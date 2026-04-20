<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dens Joshua | Full Stack Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="app.js"></script>
    @vite(['resources/css/app.css'])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</head>
<body class="bg-teal-100 text-slate-900 transition-colors duration-300">

    <div id="preloader" class="fixed inset-0 z-[9999] bg-slate-950 flex items-center justify-center transition-opacity duration-700 ease-in-out">
        <div class="loader JS_on">
            <span class="binary"></span>
            <span class="binary"></span>
            <span class="getting-there">LOADING...</span>
        </div>
    </div>

    <nav class="sticky top-0 z-50 glass border-b border-slate-200/60 bg-[#D4AF37]">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-sky-600 rounded-xl flex items-center justify-center shadow-lg shadow-sky-200">
                    <span class="text-white font-bold text-xl">P</span>
                </div>
                <span class="text-xl font-extrabold tracking-tight text-sky-950 uppercase">Portfolio</span>
            </div>
            
            <div class="flex items-center gap-8">
                <div class="hidden md:flex space-x-10 text-sm font-bold uppercase tracking-widest">
                    <a href="#" class="text-black">Home</a>
                    <a href="#about" class="text-black hover:text-sky-600 transition">About</a>
                    <a href="#certificates" class="text-black hover:text-sky-600 transition">Certificates</a>
                    <a href="#experience" class="text-black hover:text-sky-600 transition">Experience</a>
                    <a href="#projects" class="text-black hover:text-sky-600 transition">Projects</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="relative overflow-hidden pt-16 pb-24 bg-slate-950 ">
        <div class="absolute top-0 right-0 -z-10 w-1/3 h-full bg-gradient-to-l from-sky-100/50 to-transparent rounded-l-full blur-3xl"></div>
        
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <span class="inline-block px-4 py-1.5 mb-6 text-xs font-bold tracking-widest text-sky-600 uppercase bg-sky-100 rounded-full">
                    Available for Projects
                </span>
                <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-[1.1] mb-8">
                    Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-indigo-600">Dens Joshua A. Suba</span>
                </h1>
                <p class="text-lg text-white leading-relaxed mb-10 max-w-lg">
                    I am a passionate web developer dedicated to creating user-friendly and visually appealing web applications that provide an exceptional user experience.
                </p>
                <div class="flex gap-4">
                    <a href="#contact">
                    <button class="cursor-pointer flex justify-between bg-gray-800 px-3 py-2 rounded-full text-white tracking-wider shadow-xl hover:bg-gray-900 hover:scale-105 duration-500 hover:ring-1 font-mono w-[150px]">
                       let's talk
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="w-5 h-5 animate-bounce"
                    >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3"
                        ></path>
                    </svg>
                    </button>
                    </a>
                </div>  
            </div>

            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-tr from-sky-500 to-indigo-500 rounded-[2rem] blur-2xl opacity-20"></div>
                <img src="img/dens.jpg" alt="Dens Joshua" class="relative rounded-[2rem] shadow-2xl w-full h-[450px] object-cover border-4 border-white">
            </div>
        </div>
    </main>

    <section id="about" class="max-w-7xl mx-auto px-6 py-24  ">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-stretch ">
            <div class="md:col-span-5 bg-slate-950 p-10 rounded-[2.5rem] shadow-sm border border-slate-200/60 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-32 h-32 bg-[#D4AF37] rounded-bl-full -mr-10 -mt-10 transition-all group-hover:scale-110"></div>
                <h2 class="text-2xl font-extrabold text-white mb-8 relative">Information</h2>
                <div class="space-y-6 relative">
                    <div class="flex items-center gap-5 p-4 rounded-2xl bg-slate-50 hover:bg-sky-50 transition">
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Email</p>
                            <p class="font-bold text-slate-700">subadensjoshua@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-5 p-4 rounded-2xl bg-slate-50 hover:bg-sky-50 transition">
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Phone</p>
                            <p class="font-bold text-slate-700">09204296323</p>
                        </div>
                    </div>
                </div>
            </div>

    <div class="md:col-span-7 bg-[#D4AF37] p-8 rounded-[2.5rem] shadow-sm">
    <h2 class="text-xl font-extrabold text-slate-900 mb-6">Tech Stack & Tools</h2>
    
    <div id="tech-carousel" class="relative w-full" data-carousel="slide">
        <div class="relative h-44 overflow-hidden rounded-2xl bg-slate-950 p-4">
            
            <div class="hidden duration-700 ease-in-out flex items-center justify-center" data-carousel-item>
                <div class="flex flex-wrap justify-center gap-3">
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-white rounded-xl text-xs font-bold shadow-sm">
                        <img src="https://cdn.simpleicons.org/html5/E34F26" class="w-4 h-4" alt="HTML"> HTML
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-white rounded-xl text-xs font-bold shadow-sm">
                        <img src="https://cdn.simpleicons.org/CSS/663399" class="w-4 h-4" alt="CSS"> CSS
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-white rounded-xl text-xs font-bold shadow-sm">
                        <img src="https://cdn.simpleicons.org/javascript/F7DF1E" class="w-4 h-4" alt="JS"> JS
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-white rounded-xl text-xs font-bold shadow-sm">
                        <img src="https://cdn.simpleicons.org/tailwindcss/06B6D4" class="w-4 h-4" alt="Tailwind"> Tailwind
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-white rounded-xl text-xs font-bold shadow-sm">
                        <img src="https://cdn.simpleicons.org/bootstrap/7952B3" class="w-4 h-4" alt="Bootstrap"> Bootstrap
                    </div>
                </div>
            </div>

            <div class="hidden duration-700 ease-in-out flex items-center justify-center" data-carousel-item="active">
                <div class="flex flex-wrap justify-center gap-3">
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-white rounded-xl text-xs font-bold shadow-sm">
                        <img src="https://cdn.simpleicons.org/laravel/FF2D20" class="w-4 h-4" alt="Laravel"> Laravel
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-white rounded-xl text-xs font-bold shadow-sm">
                        <img src="https://cdn.simpleicons.org/nodedotjs/5FA04E" class="w-4 h-4" alt="Node.js"> Node.js
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-white rounded-xl text-xs font-bold shadow-sm">
                        <img src="https://cdn.simpleicons.org/mysql/4479A1" class="w-4 h-4" alt="MySQL"> MySQL
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-white rounded-xl text-xs font-bold shadow-sm">
                        <img src="https://cdn.simpleicons.org/laragon/0E83CD" class="w-4 h-4" alt="Laragon"> Laragon
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-white rounded-xl text-xs font-bold shadow-sm">
                        <img src="https://cdn.simpleicons.org/XAMPP/FB7A24" class="w-4 h-4" alt="XAMPP"> XAMPP
                    </div>
                </div>
            </div>

            <div class="hidden duration-700 ease-in-out flex items-center justify-center" data-carousel-item>
                <div class="flex flex-wrap justify-center gap-3">
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-white rounded-xl text-xs font-bold shadow-sm">
                        <img src="https://cdn.simpleicons.org/git/F05032" class="w-4 h-4" alt="Git"> Git
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-white rounded-xl text-xs font-bold shadow-sm">
                        <img src="https://cdn.simpleicons.org/github/181717" class="w-4 h-4" alt="GitHub"> GitHub
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-white rounded-xl text-xs font-bold shadow-sm">
                        <img src="https://api.iconify.design/vscode-icons:file-type-vscode.svg" class="w-4 h-4" alt="VS Code"> VS Code
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-white rounded-xl text-xs font-bold shadow-sm">
                        <img src="https://cdn.simpleicons.org/netlify/00C7B7" class="w-4 h-4" alt="Netlify"> Netlify
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-white rounded-xl text-xs font-bold shadow-sm">
                        <img src="https://cdn.simpleicons.org/ngrok/1F1E37" class="w-4 h-4" alt="ngrok"> ngrok
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 bg-white rounded-xl text-xs font-bold shadow-sm">
                        <img src="https://cdn.simpleicons.org/infinityfree/7738C8" class="w-4 h-4" alt="InfinityFree"> InfinityFree
                    </div>
                </div>
            </div>
        </div>

        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-2 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-black/5 group-hover:bg-black/10">
                <svg class="w-4 h-4 text-slate-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/></svg>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-2 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-black/5 group-hover:bg-black/10">
                <svg class="w-4 h-4 text-slate-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/></svg>
            </span>
        </button>
    </div>
</div>
</section>

    <section id="certificates" class="max-w-7xl mx-auto px-6 py-24 border-t border-slate-200/60 ">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
            <div>
                <h2 class="animate-pulse text-4xl font-extrabold text-[#D4AF37] mb-4">
                    Certificates & Seminars
                </h2>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="group p-8 bg-slate-950 border border-slate-200/60 rounded-[2rem] flex flex-col justify-between h-full hover:border-sky-500 hover:shadow-xl hover:shadow-sky-100 transition-all duration-300">
                <div>
                    <h3 class="text-xl font-bold text-white mb-2">Arduin Microprocessor Crash course” College of Computing Studies and technology, PLSP</h3>
                    <p class="text-xs font-bold text-white uppercase tracking-widest mb-6">Issued: June 2025</p>
                </div>
                <a href="https://www.facebook.com/share/p/1J66uhAaWt/" class="inline-flex items-center gap-2 text-sm font-extrabold text-white hover:text-[#FFD700] transition-colors">
                    More Info
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4 group-hover:translate-x-1.5 transition-transform duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>

            <div class="group p-8 bg-slate-950 border border-slate-200/60 rounded-[2rem] flex flex-col justify-between h-full hover:border-sky-500 hover:shadow-xl hover:shadow-sky-100 transition-all duration-300">
                <div>
                    <h3 class="text-xl font-bold text-white mb-2">ICT MONTH Walang Iwanan sa Digital Bayanihan” College of Computing studies and technology, PLSP Pavillion, 2025 </h3>
                    <p class="text-xs font-bold text-white uppercase tracking-widest mb-6">Issued: June 2025</p>
                </div>
                <a href="https://www.facebook.com/share/p/18Z8kYB3wE/" class="inline-flex items-center gap-2 text-sm font-extrabold text-white hover:text-[#FFD700] transition-colors">
                    More Info
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4 group-hover:translate-x-1.5 transition-transform duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
            
            <div class="group p-8 bg-slate-950 border border-slate-200/60 rounded-[2rem] flex flex-col justify-between h-full hover:border-sky-500 hover:shadow-xl hover:shadow-sky-100 transition-all duration-300">
                <div>
                    <h3 class="text-xl font-bold text-white mb-2">“Managing a business venture” CISCO Networking Acadmey</h3>
                    <p class="text-xs font-bold text-white uppercase tracking-widest mb-6">Issued: June 2025</p>
                </div>
                <a href="https://www.credly.com/earner/earned/share/c59e61c6-05d6-4aed-9a7c-d7dd4ae486cf" class="inline-flex items-center gap-2 text-sm font-extrabold text-white hover:text-[#FFD700] transition-colors">
                    More Info
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4 group-hover:translate-x-1.5 transition-transform duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section id="education" class="max-w-7xl mx-auto px-6 py-24 border-t border-slate-200/60">
        <div class="text-center mb-12">
            <h2 class="animate-pulse text-4xl font-extrabold text-[#D4AF37] mb-4">Academic Foundation</h2>
        </div>

        <div class="max-w-3xl mx-auto">
            <div class="bg-[#D4AF37] p-10 rounded-[2.5rem] shadow-sm border border-slate-200/60 relative overflow-hidden group hover:border-sky-500 hover:shadow-xl hover:shadow-sky-100 transition-all duration-300">
                <div class="absolute top-0 right-0 w-32 h-32 bg-sky-50 rounded-bl-full -mr-10 -mt-10 transition-all group-hover:scale-110"></div>
                
                <div class="relative z-10 text-center flex flex-col items-center">
                    <span class="text-xs font-bold text-black uppercase tracking-widest bg-white/50 px-3 py-1 rounded-full mb-6 inline-block">College</span>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Bachelor of Science in Information Systems Major in System and Network Security</h3>
                    <p class="text-lg font-semibold text-slate-800 mb-4">Pamantasan ng Lungsod ng San Pablo</p>
                </div>
            </div>
        </div>
    </section>

   <section id="projects" class="py-24 bg-slate-950 rounded-t-[4rem] border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-extrabold text-[#D4AF37] mb-4">Featured Projects</h2>
            <div class="w-24 h-1.5 bg-sky-500 mx-auto rounded-full"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="group bg-slate-900 border border-slate-800 rounded-[2.5rem] overflow-hidden hover:border-sky-500/50 transition-all shadow-2xl">
                <div class="overflow-hidden">
                    <img src="img/project.jpg" 
                         alt="Inventory POS" 
                         class="project-zoom w-full h-64 object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition duration-500 cursor-zoom-in">
                </div>
                <div class="p-10 text-left">
                    <div class="flex justify-between items-start mb-4">
                        <span class="text-sky-500 font-bold text-xs uppercase tracking-widest block">Inventory & POS</span>
                        <div class="flex gap-2">
                             <img src="https://cdn.simpleicons.org/php/777BB4" class="w-4 h-4" alt="PHP">
                             <img src="https://cdn.simpleicons.org/mysql/4479A1" class="w-4 h-4" alt="MySQL">
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Inventory Management System</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">Role-based authentication and stock tracking built with PHP and MySQL.</p>
                </div>
            </div>

            <div class="group bg-slate-900 border border-slate-800 rounded-[2.5rem] overflow-hidden hover:border-sky-500/50 transition-all shadow-2xl">
                <div class="overflow-hidden">
                    <img src="img/project2.jpg" 
                         alt="Ticketing System" 
                         class="project-zoom w-full h-64 object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition duration-500 cursor-zoom-in">
                </div>
                <div class="p-10 text-left">
                    <div class="flex justify-between items-start mb-4">
                        <span class="text-sky-500 font-bold text-xs uppercase tracking-widest block">Utility</span>
                        <div class="flex gap-2">
                             <img src="https://cdn.simpleicons.org/laravel/FF2D20" class="w-4 h-4" alt="Laravel">
                             <img src="https://cdn.simpleicons.org/tailwindcss/06B6D4" class="w-4 h-4" alt="Tailwind">
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">SPCWD Ticketing System</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">A specialized system for managing customer concerns and technical reports for San Pablo City Water District.</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <section id="contact" class="py-24 bg-teal-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-sky-400 rounded-[3rem] shadow-2xl shadow-sky-100 overflow-hidden border border-slate-100">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 bg-[#D4AF37] p-12 text-white relative overflow-hidden">
                        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-sky-400 rounded-full opacity-50"></div>
                        <h2 class="text-3xl font-extrabold mb-6 relative">Contact Me</h2>
                        <div class="space-y-8 relative">
                            <div class="flex items-center gap-4">
                                <div>
                                    <p class="text-xs font-bold text-black uppercase tracking-widest">Email</p>
                                    <p class="font-semibold">subadensjoshua@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div>
                                    <p class="text-xs font-bold text-black uppercase tracking-widest">Phone</p>
                                    <p class="font-semibold">09204296323</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-16 flex gap-4 relative">
                            <a href="https://www.facebook.com/dens.suba.92" class="w-10 h-10 border border-sky-700 rounded-full flex items-center justify-center hover:bg-white hover:border-white group transition-all">
                                <img src="https://cdn.simpleicons.org/facebook/white" class="w-5 h-5 group-hover:filter group-hover:invert" alt="FB">
                            </a>
                            <a href="https://github.com/densssuba" class="w-10 h-10 border border-sky-700 rounded-full flex items-center justify-center hover:bg-white hover:border-white group transition-all">
                                <img src="https://cdn.simpleicons.org/github/white" class="w-5 h-5 group-hover:filter group-hover:invert" alt="GH">
                            </a>
                        </div>
                    </div>

                <div class="md:w-2/3 p-2 bg-slate-950 ">
                <form action="{{ url('/send-message') }}" method="POST" class="space-y-6">
    
                    @csrf 

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 ">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-white">Name</label>
                            <input type="text" name="name" required class="w-full px-5 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-sky-500 outline-none transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-white">Email</label>
                            <input type="email" name="email" required class="w-full px-5 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-sky-500 outline-none transition-all">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-white">Message</label>
                        <textarea name="message" rows="4" required class="w-full px-5 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-sky-500 outline-none transition-all"></textarea>
                    </div>
                    
                    <button class="font-sans flex justify-center gap-2 items-center mx-auto shadow-xl text-lg text-gray-50 bg-[#0A0D2D] backdrop-blur-md lg:font-semibold isolation-auto border-gray-50 before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-[#FFFFFF] hover:text-black before:-z-10 before:aspect-square before:hover:scale-200 before:hover:duration-500 relative z-10 px-4 py-2 overflow-hidden border-2 rounded-full group" type="submit">
                        Submit
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 19" class="w-8 h-8 justify-end bg-gray-50 group-hover:rotate-90 group-hover:bg-gray-50 text-gray-50 ease-linear duration-300 rounded-full border border-gray-700 group-hover:border-gray-700 p-2 rotate-45">
                            <path class="fill-gray-800 group-hover:fill-gray-800" d="M7 18C7 18.5523 7.44772 19 8 19C8.55228 19 9 18.5523 9 18H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 18L9 1H7L7 18H9Z"></path>
                        </svg>
                    </button>
                </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-12 text-center text-white text-sm border-t border-slate-200 transition-colors bg-slate-950 ">
        <p>© 2026 Dens Joshua. All Rights Reserved.</p>
    </footer>

    <script>
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            setTimeout(() => {
                preloader.classList.add('opacity-0');
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 700); 
            }, 1500); 
        });
    </script>
</body>
</html>