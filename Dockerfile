FROM php:8.2-apache

# 1. Install dependencies for Laravel and PostgreSQL
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git libpq-dev curl \
    && docker-php-ext-install pdo_mysql pdo_pgsql zip

# 2. Install Node.js (needed for Vite/Tailwind)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# 3. Enable Apache URL rewriting
RUN a2enmod rewrite

# 4. Point Apache to Laravel's "public" folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 5. Copy your files into the server
COPY . /var/www/html

# 6. Install Composer packages
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# 7. Build your CSS/JS
RUN npm install
RUN npm run build

# 8. Set permissions for Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80