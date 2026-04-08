<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dens Joshua | Full Stack Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(10px); }
        .dark .glass { background: rgba(15, 23, 42, 0.8); border-color: rgba(51, 65, 85, 0.5); }
    </style>
</head>
<body class="bg-[#f8fafc] dark:bg-slate-950 text-slate-900 dark:text-slate-100 transition-colors duration-300">

    <nav class="sticky top-0 z-50 glass border-b border-slate-200/60 dark:border-slate-800/60">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-sky-600 rounded-xl flex items-center justify-center shadow-lg shadow-sky-200 dark:shadow-none">
                    <span class="text-white font-bold text-xl">D</span>
                </div>
                <span class="text-xl font-extrabold tracking-tight text-sky-950 dark:text-white uppercase">Dens</span>
            </div>
            
            <div class="flex items-center gap-8">
                <div class="hidden md:flex space-x-10 text-sm font-bold uppercase tracking-widest">
                    <a href="#" class="text-sky-600">Home</a>
                    <a href="#about" class="text-slate-500 dark:text-slate-400 hover:text-sky-600 transition">About</a>
                    <a href="#projects" class="text-slate-500 dark:text-slate-400 hover:text-sky-600 transition">Projects</a>
                </div>
                
                <button onclick="toggleDarkMode()" class="p-2.5 rounded-xl bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 hover:bg-white dark:hover:bg-slate-700 transition-all">
                    <span class="dark:hidden">🌙</span>
                    <span class="hidden dark:inline">☀️</span>
                </button>
            </div>
        </div>
    </nav>

    <main class="relative overflow-hidden pt-16 pb-24">
        <div class="absolute top-0 right-0 -z-10 w-1/3 h-full bg-gradient-to-l from-sky-100/50 dark:from-sky-900/20 to-transparent rounded-l-full blur-3xl"></div>
        
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <span class="inline-block px-4 py-1.5 mb-6 text-xs font-bold tracking-widest text-sky-600 dark:text-sky-400 uppercase bg-sky-100 dark:bg-sky-900/30 rounded-full">
                    Available for Projects
                </span>
                <h1 class="text-5xl md:text-7xl font-extrabold text-slate-950 dark:text-white leading-[1.1] mb-8">
                    Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-indigo-600 dark:from-sky-400 dark:to-indigo-400">Dens Joshua</span>
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-10 max-w-lg">
                    I am a passionate web developer dedicated to creating user-friendly and visually appealing web applications that provide an exceptional user experience.
                </p>
                <div class="flex gap-4">
                    <a href="#contact" class="px-8 py-4 bg-sky-600 text-white rounded-2xl font-bold shadow-xl shadow-sky-200 dark:shadow-none hover:bg-sky-700 hover:-translate-y-1 transition-all">
                        Let's Talk
                    </a>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-tr from-sky-500 to-indigo-500 rounded-[2rem] blur-2xl opacity-20"></div>
                <img src="img/dens.jpg" alt="Dens Joshua" class="relative rounded-[2rem] shadow-2xl w-full h-[450px] object-cover border-4 border-white dark:border-slate-800">
            </div>
        </div>
    </main>

    <section id="about" class="max-w-7xl mx-auto px-6 py-24">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-stretch">
            
            <div class="md:col-span-5 bg-white dark:bg-slate-900 p-10 rounded-[2.5rem] shadow-sm border border-slate-200/60 dark:border-slate-800 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-32 h-32 bg-sky-50 dark:bg-sky-900/10 rounded-bl-full -mr-10 -mt-10 transition-all group-hover:scale-110"></div>
                <h2 class="text-2xl font-extrabold text-slate-900 dark:text-white mb-8 relative">Information</h2>
                <div class="space-y-6 relative">
                    <div class="flex items-center gap-5 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/50 hover:bg-sky-50 dark:hover:bg-sky-900/20 transition">
                        <div class="w-12 h-12 bg-white dark:bg-slate-800 rounded-xl shadow-sm flex items-center justify-center text-xl">✉️</div>
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Email</p>
                            <p class="font-bold text-slate-700 dark:text-slate-300">subadensjoshua@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-5 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/50 hover:bg-sky-50 dark:hover:bg-sky-900/20 transition">
                        <div class="w-12 h-12 bg-white dark:bg-slate-800 rounded-xl shadow-sm flex items-center justify-center text-xl">📞</div>
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Phone</p>
                            <p class="font-bold text-slate-700 dark:text-slate-300">09204296323</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:col-span-7 bg-white dark:bg-slate-900 p-10 rounded-[2.5rem] shadow-sm border border-slate-200/60 dark:border-slate-800">
                <h2 class="text-2xl font-extrabold text-slate-900 dark:text-white mb-8">Tech Stack</h2>
                <div class="flex flex-wrap gap-3">
                    <div class="group flex items-center gap-3 px-5 py-3 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl hover:border-sky-500 hover:shadow-lg transition-all">
                        <img src="https://cdn.simpleicons.org/laravel/FF2D20" class="w-5 h-5" alt="Laravel">
                        <span class="font-bold text-slate-700 dark:text-slate-300 text-sm">Laravel</span>
                    </div>
                    <div class="group flex items-center gap-3 px-5 py-3 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl hover:border-sky-500 hover:shadow-lg transition-all">
                        <img src="https://cdn.simpleicons.org/tailwindcss/06B6D4" class="w-5 h-5" alt="Tailwind">
                        <span class="font-bold text-slate-700 dark:text-slate-300 text-sm">Tailwind</span>
                    </div>
                    <div class="group flex items-center gap-3 px-5 py-3 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl hover:border-sky-500 hover:shadow-lg transition-all">
                        <img src="https://cdn.simpleicons.org/react/61DAFB" class="w-5 h-5" alt="React">
                        <span class="font-bold text-slate-700 dark:text-slate-300 text-sm">React</span>
                    </div>
                    <div class="group flex items-center gap-3 px-5 py-3 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl hover:border-sky-500 hover:shadow-lg transition-all">
                        <img src="https://cdn.simpleicons.org/javascript/F7DF1E" class="w-5 h-5" alt="JS">
                        <span class="font-bold text-slate-700 dark:text-slate-300 text-sm">JavaScript</span>
                    </div>
                    <div class="group flex items-center gap-3 px-5 py-3 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl hover:border-sky-500 hover:shadow-lg transition-all">
                        <img src="https://cdn.simpleicons.org/mysql/4479A1" class="w-5 h-5" alt="MySQL">
                        <span class="font-bold text-slate-700 dark:text-slate-300 text-sm">MySQL</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-24 bg-slate-950 dark:bg-slate-900/50 rounded-t-[4rem] border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-white mb-4">Featured Projects</h2>
                <div class="w-24 h-1.5 bg-sky-500 mx-auto rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="group bg-slate-900 border border-slate-800 rounded-[2.5rem] overflow-hidden hover:border-sky-500/50 transition-all">
                    <img src="img/project.jpg" class="w-full h-64 object-cover opacity-80 group-hover:opacity-100 transition duration-500">
                    <div class="p-10 text-left">
                        <span class="text-sky-500 font-bold text-xs uppercase tracking-widest mb-3 block">Inventory & POS</span>
                        <h3 class="text-2xl font-bold text-white mb-4">Inventory Management System</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">Role-based authentication and stock tracking built with PHP and MySQL.</p>
                    </div>
                </div>

                <div class="group bg-slate-900 border border-slate-800 rounded-[2.5rem] overflow-hidden hover:border-sky-500/50 transition-all">
                    <img src="img/project2.jpg" class="w-full h-64 object-cover opacity-80 group-hover:opacity-100 transition duration-500">
                    <div class="p-10 text-left">
                        <span class="text-sky-500 font-bold text-xs uppercase tracking-widest mb-3 block">Utility</span>
                        <h3 class="text-2xl font-bold text-white mb-4">SPCWD Ticketing System</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">A specialized system for managing customer concerns and technical reports.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-24 bg-[#f8fafc] dark:bg-slate-950 transition-colors">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white dark:bg-slate-900 rounded-[3rem] shadow-2xl shadow-sky-100 dark:shadow-none overflow-hidden border border-slate-100 dark:border-slate-800">
                <div class="flex flex-col md:flex-row">
                    
                    <div class="md:w-1/3 bg-sky-900 p-12 text-white relative overflow-hidden">
                        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-sky-800 rounded-full opacity-50"></div>
                        <h2 class="text-3xl font-extrabold mb-6 relative">Get in Touch</h2>
                        <div class="space-y-8 relative">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-sky-800 rounded-xl flex items-center justify-center text-xl">✉️</div>
                                <div>
                                    <p class="text-xs font-bold text-sky-300 uppercase tracking-widest">Email</p>
                                    <p class="font-semibold">subadensjoshua@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-sky-800 rounded-xl flex items-center justify-center text-xl">📞</div>
                                <div>
                                    <p class="text-xs font-bold text-sky-300 uppercase tracking-widest">Phone</p>
                                    <p class="font-semibold">09204296323</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-16 flex gap-4 relative">
                            <a href="#" class="w-10 h-10 border border-sky-700 rounded-full flex items-center justify-center hover:bg-white hover:border-white group transition-all">
                                <img src="https://cdn.simpleicons.org/facebook/white" class="w-5 h-5 group-hover:filter group-hover:invert" alt="FB">
                            </a>
                            <a href="#" class="w-10 h-10 border border-sky-700 rounded-full flex items-center justify-center hover:bg-white hover:border-white group transition-all">
                                <img src="https://cdn.simpleicons.org/github/white" class="w-5 h-5 group-hover:filter group-hover:invert" alt="GH">
                            </a>
                        </div>
                    </div>

                    <div class="md:w-2/3 p-12">
                        <form action="#" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-slate-700 dark:text-slate-300">Name</label>
                                    <input type="text" class="w-full px-5 py-4 rounded-2xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 focus:ring-2 focus:ring-sky-500 outline-none transition-all dark:text-white">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-slate-700 dark:text-slate-300">Email</label>
                                    <input type="email" class="w-full px-5 py-4 rounded-2xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 focus:ring-2 focus:ring-sky-500 outline-none transition-all dark:text-white">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-700 dark:text-slate-300">Message</label>
                                <textarea rows="4" class="w-full px-5 py-4 rounded-2xl bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 focus:ring-2 focus:ring-sky-500 outline-none transition-all dark:text-white"></textarea>
                            </div>
                            <button class="w-full md:w-max px-10 py-4 bg-sky-600 text-white font-bold rounded-2xl shadow-xl hover:bg-sky-700 transition-all">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-12 text-center text-slate-400 text-sm border-t border-slate-200 dark:border-slate-800 transition-colors">
        <p>© 2026 Dens Joshua. All Rights Reserved.</p>
    </footer>

</body>
</html>