<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50">
   <nav class="bg-sky-900 border-b border-rose-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        <div class="flex-shrink-0 flex items-center">
          <span class="text-2xl font-bold text-white tracking-tight">Dens</span>
        </div>
        <div class="hidden md:flex space-x-8 items-center">
          <a href="#" class="text-sky-100 hover:text-white transition">Home</a>
          <a href="#" class="text-sky-100 hover:text-white transition">About</a>
          <a href="#" class="text-sky-100 hover:text-white transition">Contacts</a>
        </div>
      </div>
    </div>
   </nav>

   <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
     <div class="flex flex-col md:flex-row items-center justify-between gap-12">
       
       <div class="md:w-1/2">
         <h1 class="text-2xl md:text-6xl font-bold text-sky-950 leading-tight">
           Hi im Dens Joshua A. Suba 
         </h1>
         <p class="mt-4 text-lg text-slate-600">
              I am a passionate web developer with experience in buildjing dynamic and responsive websites. I specialize in front-end development and have a strong background in HTML, CSS, JavaScript, and various frameworks. I am dedicated to creating user-friendly and visually appealing web applications that provide an exceptional user experience.
         </p>
         <button class="mt-8 px-6 py-3 bg-sky-900 text-white rounded-lg font-medium hover:bg-sky-800 transition">
           Contact
         </button>
       </div>

       <div class="md:w-1/2">
         <img src="img/dens.jpg" 
            class="rounded-2xl shadow-xl w-full h-80 object-cover"
         >
       </div>

     </div>
   </main>
    
   <section class="max-w-7xl mx-auto px-4 py-16">
    <div class="flex flex-col md:flex-row items-stretch gap-8">

        <div class="md:w-1/2 bg-white p-8 md:p-12 rounded-3xl shadow-xl border border-slate-100">
            <h2 class="text-3xl font-bold text-sky-900 mb-6 text-center">Information</h2>
            
            <div class="space-y-4">
                <div class="flex items-center gap-4">
                    <span class="text-sky-600 font-bold">✉️</span>
                    <p class="text-lg leading-relaxed text-slate-600">
                        subadensjoshua@gmail.com
                    </p>
                </div>

                <div class="flex items-center gap-4">
                    <span class="text-sky-600 font-bold">📞</span>
                    <p class="text-lg leading-relaxed text-slate-600">
                        09204296323 
                    </p>
                </div>
            </div>
        </div>

        <div class="md:w-1/2 bg-white p-8 md:p-12 rounded-3xl shadow-xl border border-slate-100">
            <h2 class="text-3xl font-bold text-sky-900 mb-6 text-center">Skills</h2>
            
         <div class="flex flex-wrap gap-3">
        <span class="flex items-center gap-2 px-4 py-2 bg-sky-50 text-sky-700 rounded-full font-semibold border border-sky-100 shadow-sm hover:bg-white transition">
            <img src="https://cdn.simpleicons.org/laravel/FF2D20" class="w-4 h-4" alt="Laravel">
            Laravel
        </span>

        <span class="flex items-center gap-2 px-4 py-2 bg-sky-50 text-sky-700 rounded-full font-semibold border border-sky-100 shadow-sm hover:bg-white transition">
            <img src="https://cdn.simpleicons.org/tailwindcss/06B6D4" class="w-4 h-4" alt="Tailwind">
            Tailwind CSS
        </span>

        <span class="flex items-center gap-2 px-4 py-2 bg-sky-50 text-sky-700 rounded-full font-semibold border border-sky-100 shadow-sm hover:bg-white transition">
            <img src="https://cdn.simpleicons.org/react/61DAFB" class="w-4 h-4" alt="React">
            React
        </span>

        <span class="flex items-center gap-2 px-4 py-2 bg-sky-50 text-sky-700 rounded-full font-semibold border border-sky-100 shadow-sm hover:bg-white transition">
            <img src="https://cdn.simpleicons.org/javascript/F7DF1E" class="w-4 h-4" alt="JS">
            JavaScript
        </span>

        <span class="flex items-center gap-2 px-4 py-2 bg-sky-50 text-sky-700 rounded-full font-semibold border border-sky-100 shadow-sm hover:bg-white transition">
            <img src="https://cdn.simpleicons.org/php/777BB4" class="w-4 h-4" alt="PHP">
            PHP
        </span>

        <span class="flex items-center gap-2 px-4 py-2 bg-sky-50 text-sky-700 rounded-full font-semibold border border-sky-100 shadow-sm hover:bg-white transition">
            <img src="https://cdn.simpleicons.org/mysql/4479A1" class="w-4 h-4" alt="MySQL">
            MySQL
        </span>

        <span class="flex items-center gap-2 px-4 py-2 bg-sky-50 text-sky-700 rounded-full font-semibold border border-sky-100 shadow-sm hover:bg-white transition">
            <img src="https://cdn.simpleicons.org/git/F05032" class="w-4 h-4" alt="Git">
            Git
        </span>

        <span class="flex items-center gap-2 px-4 py-2 bg-sky-50 text-sky-700 rounded-full font-semibold border border-sky-100 shadow-sm hover:bg-white transition">
            <svg class="w-4 h-4 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
            </svg>
            Laragon
        </span>
        </div>
        </div>

    </div>
</section>

    <section class="bg-white py-16 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-sky-900 mb-12">Projects</h2>
        
        <div class="flex flex-wrap justify-center gap-8">
            
            <div class="max-w-sm bg-slate-50 rounded-2xl overflow-hidden hover:shadow-md transition">
                <img src="img/project.jpg"  
                     class="w-full h-48 object-cover">
                
                <div class="p-8">
                    <div class="w-12 h-12 bg-sky-100 text-sky-900 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">1</div>
                    <h3 class="font-bold text-xl mb-2 text-sky-900">Inventory Management and POS with Role based Authentication</h3>
                </div>
            </div>

            <div class="max-w-sm bg-slate-50 rounded-2xl overflow-hidden hover:shadow-md transition">
                <img src="img/project2.jpg" 
                     alt="Project 2" 
                     class="w-full h-48 object-cover">
                
                <div class="p-8">
                    <div class="w-12 h-12 bg-sky-100 text-sky-900 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">2</div>
                    <h3 class="font-bold text-xl mb-2 text-sky-900">SPCWD Ticketing system</h3>
                </div>
            </div>

        </div>
    </div>
</section>
</body>
</html>