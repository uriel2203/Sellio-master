<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Uriel John G. Chavez | Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Instrument+Serif:ital@0;1&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            :root {
                --accent: #C19A6B;
                --bg: #050505;
                --bg-lighter: #0A0A0A;
            }
            body { 
                background-color: var(--bg);
                color: #ffffff;
                font-family: 'Instrument Sans', sans-serif;
                overflow-x: hidden;
            }
            .font-serif { font-family: 'Instrument Serif', serif; }
            .font-outfit { font-family: 'Outfit', sans-serif; }
            .text-accent { color: var(--accent); }
            .bg-accent { background-color: var(--accent); }
            
            .glass-nav {
                background: rgba(10, 10, 10, 0.4);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.05);
            }

            .watermark {
                position: absolute;
                top: 50%;
                left: -5%;
                transform: translateY(-50%);
                font-size: 20vw;
                font-family: 'Instrument Serif', serif;
                font-style: italic;
                color: rgba(255, 255, 255, 0.02);
                line-height: 1;
                pointer-events: none;
                white-space: nowrap;
                z-index: 0;
            }

            .hero-line {
                display: inline-block;
                width: 40px;
                height: 1px;
                background-color: rgba(255, 255, 255, 0.1);
                vertical-align: middle;
                margin-left: 15px;
            }
        </style>
    </head>
    <body class="antialiased selection:bg-accent selection:text-white">
        
        <!-- Navigation -->
        <header class="fixed top-8 left-1/2 -translate-x-1/2 w-[95%] max-w-7xl z-50">
            <nav class="glass-nav rounded-full px-8 py-4 flex items-center justify-between">
                <div class="text-2xl font-serif tracking-tight">UJ<span class="text-accent">.</span></div>
                
                <div class="hidden lg:flex items-center gap-10">
                    <a href="#home" class="text-[10px] uppercase tracking-[0.2em] text-gray-400 hover:text-white transition font-bold">Home</a>
                    <a href="#about" class="text-[10px] uppercase tracking-[0.2em] text-gray-400 hover:text-white transition font-bold">About</a>
                    <a href="#certificates" class="text-[10px] uppercase tracking-[0.2em] text-gray-400 hover:text-white transition font-bold">Certificates</a>
                    <a href="#projects" class="text-[10px] uppercase tracking-[0.2em] text-gray-400 hover:text-white transition font-bold">Projects</a>
                    <a href="#experience" class="text-[10px] uppercase tracking-[0.2em] text-gray-400 hover:text-white transition font-bold">Experience</a>
                </div>

                <div class="flex items-center gap-6">
                    <a href="#contact" class="px-8 py-3 bg-accent text-black font-bold text-[10px] uppercase tracking-[0.2em] rounded-full hover:brightness-110 transition">
                        Contact
                    </a>
                    <div class="text-gray-600 hover:text-white cursor-pointer transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-40 hover:opacity-100 transition"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Hero Section -->
        <div id="home" class="relative min-h-screen flex items-center">
            <div class="watermark select-none">CHAVEZ</div>
            
            <main class="max-w-7xl mx-auto px-10 w-full relative z-10 py-32">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-20">
                    <div class="flex-1 space-y-12">
                        <div class="space-y-6">
                            <p class="text-[10px] uppercase tracking-[0.6em] text-gray-500 font-bold font-outfit">Bachelor of Science in Information Technology</p>
                            <h1 class="text-7xl md:text-[110px] font-serif leading-[0.85] tracking-tight">
                                Uriel John G. <br> 
                                <span class="italic font-serif">Chavez</span><span class="text-accent">.</span>
                            </h1>
                        </div>
                        
                        <p class="text-xl text-gray-500 max-w-lg italic font-medium leading-[1.6]">
                            Bachelor of Science in Information Technology student, focusing on technical IT solutions and complex system infrastructures.
                        </p>
                        
                        <div class="flex items-center gap-12 pt-4">
                            <a href="#projects" class="px-12 py-5 bg-accent text-black font-bold text-[11px] uppercase tracking-[0.2em] rounded-full hover:scale-105 transition transform shadow-2xl shadow-accent/20">
                                The Collection
                            </a>
                            <div class="flex items-center group cursor-pointer">
                                <a href="#about" class="text-[11px] uppercase tracking-[0.2em] font-bold text-white group-hover:text-accent transition">Learn More</a>
                                <div class="hero-line group-hover:bg-accent group-hover:w-16 transition-all duration-500"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hero Image Card -->
                    <div class="relative w-full lg:w-[450px]">
                        <div class="aspect-[4/5] rounded-[2rem] overflow-hidden relative border-[12px] border-white/5 shadow-2xl bg-gray-900/50">
                            <img src="{{ asset('image/uriell.jpg') }}" alt="Uriel John Chavez" class="w-full h-full object-cover grayscale-[20%] brightness-90">
                            <div class="absolute inset-x-0 bottom-0 p-12 bg-gradient-to-t from-black via-black/80 to-transparent">
                                <p class="text-[10px] uppercase tracking-[0.5em] text-accent font-black mb-1 opacity-70">Practicum</p>
                                <h3 class="text-3xl font-serif text-white uppercase tracking-[0.1em]">Portfolio</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- Manifesto Section -->
        <div id="about" class="bg-[#0A0A0A] py-32">
            <main class="max-w-7xl mx-auto px-10">
                <div class="grid lg:grid-cols-2 gap-32 items-start">
                    <div class="space-y-10">
                        <p class="text-[12px] uppercase tracking-[0.5em] text-accent font-bold">The Manifesto</p>
                        <h2 class="text-6xl md:text-7xl font-serif leading-tight">
                            "Clarity is the <br> foundation of <br> Information <br> Technology."
                        </h2>
                        <div class="space-y-8 text-gray-500 text-lg leading-relaxed max-w-lg italic font-medium">
                            <p>In the rapidly evolving world of IT, I believe in the power of structured logic. Success is about the precision of every detail, from the backend architecture to system scalability.</p>
                            <p>I build digital systems that are not only efficient but also intuitive—where every line of code has a clear purpose.</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-6 mt-16">
                        <div class="bg-[#050505] p-12 space-y-4 rounded-3xl border border-white/5">
                            <span class="text-[11px] uppercase tracking-[0.4em] text-accent font-bold">Years</span>
                            <h4 class="text-6xl font-serif">10+</h4>
                            <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Experience</p>
                        </div>
                        <div class="bg-[#050505] p-12 space-y-4 rounded-3xl border border-white/5">
                            <span class="text-[11px] uppercase tracking-[0.4em] text-accent font-bold">Projects</span>
                            <h4 class="text-6xl font-serif">120+</h4>
                            <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Delivered</p>
                        </div>
                        <div class="bg-[#050505] p-12 space-y-4 rounded-3xl border border-white/5">
                            <span class="text-[11px] uppercase tracking-[0.4em] text-accent font-bold">Awards</span>
                            <h4 class="text-6xl font-serif">04</h4>
                            <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Excellence</p>
                        </div>
                        <div class="bg-[#050505] p-12 space-y-4 rounded-3xl border border-white/5">
                            <span class="text-[11px] uppercase tracking-[0.4em] text-accent font-bold">Clients</span>
                            <h4 class="text-6xl font-serif">45+</h4>
                            <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Global Leaders</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- Experience Section -->
        <div id="experience" class="bg-[#050505] py-32">
            <main class="max-w-7xl mx-auto px-10">
                <div class="grid lg:grid-cols-12 gap-16">
                     <div class="lg:col-span-4 space-y-8 lg:sticky lg:top-40 h-fit">
                        <p class="text-[12px] uppercase tracking-[0.5em] text-accent font-bold">Journey</p>
                        <h2 class="text-6xl font-serif italic text-white/95 leading-tight">Professional <br> Experience</h2>
                        <p class="text-gray-500 text-lg leading-relaxed max-w-sm italic font-medium">A timeline of my technical growth and professional focus.</p>
                    </div>

                    <div class="lg:col-span-8 space-y-20">
                        @php $experience = [
                            ['role' => 'Practicum Student', 'company' => 'IT Department', 'year' => '2024 - Present', 'desc' => 'Implementing system architectures and managing database infrastructures for academic projects.'],
                            ['role' => 'Technical Lead', 'company' => 'Project Alpha', 'year' => '2023 - 2024', 'desc' => 'Led a team of 5 in developing a microservices-based workspace solution.'],
                        ]; @endphp
                        
                        @foreach($experience as $exp)
                        <div class="group flex gap-12">
                             <div class="w-24 pt-2 text-[10px] uppercase tracking-[0.3em] font-bold text-gray-600 group-hover:text-accent transition duration-500">{{ $exp['year'] }}</div>
                             <div class="flex-1 space-y-6 pb-20 border-l border-white/5 pl-16 relative">
                                 <div class="absolute -left-[1px] top-4 w-[2px] h-8 bg-accent/20 group-hover:bg-accent group-hover:h-full transition-all duration-700"></div>
                                 <h4 class="text-4xl font-serif italic text-white/90">{{ $exp['role'] }}</h4>
                                 <p class="text-[10px] uppercase tracking-[0.3em] text-accent font-black">{{ $exp['company'] }}</p>
                                 <p class="text-gray-400 text-lg leading-relaxed italic max-w-2xl font-medium">{{ $exp['desc'] }}</p>
                             </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </main>
        </div>

        <!-- Certificates -->
        <div id="certificates" class="bg-[#0A0A0A] py-32">
            <main class="max-w-7xl mx-auto px-10">
                <div class="space-y-24">
                    <div class="space-y-6">
                        <p class="text-[12px] uppercase tracking-[0.5em] text-accent font-bold">Credentials</p>
                        <h2 class="text-6xl md:text-7xl font-serif italic text-white/95">ITS Certificates</h2>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-10">
                        @php $certificates = [
                            ['title' => 'HTML and CSS', 'year' => '2024'],
                            ['title' => 'Databases', 'year' => '2024'],
                            ['title' => 'Java', 'year' => '2022']
                        ]; @endphp
                        @foreach($certificates as $cert)
                        <div class="bg-[#050505] p-10 rounded-[2.5rem] border border-white/5 space-y-10 group hover:border-accent/40 transition duration-500">
                            <div class="aspect-video bg-white/5 rounded-2xl overflow-hidden flex items-center justify-center p-3">
                                 <div class="w-full h-full bg-gray-900/50 rounded-xl flex items-center justify-center border border-white/5 group-hover:scale-105 transition-transform duration-700">
                                     <p class="text-[10px] text-gray-500 font-bold uppercase tracking-widest text-center px-4">{{ $cert['title'] }}</p>
                                 </div>
                            </div>
                            <div class="space-y-4">
                                <h4 class="text-3xl font-serif italic">{{ $cert['title'] }}</h4>
                                <div class="border-t border-white/5 pt-6">
                                    <p class="text-[10px] uppercase tracking-[0.3em] text-gray-500 font-bold">UM Indanao &bull; {{ $cert['year'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </main>
        </div>

        <!-- Projects Section -->
        <div id="projects" class="bg-[#050505] py-32">
            <main class="max-w-7xl mx-auto px-10">
                <div class="space-y-32">
                     <div class="space-y-6">
                        <p class="text-[12px] uppercase tracking-[0.5em] text-accent font-bold">The Collection</p>
                        <h2 class="text-6xl md:text-7xl font-serif italic text-white/95">Selected Works</h2>
                    </div>

                    <div class="space-y-48">
                        <!-- Project Case -->
                        <div class="flex flex-col lg:flex-row items-center gap-24">
                            <div class="flex-1 w-full aspect-[16/10] rounded-[3rem] bg-white/5 border border-white/10 p-3 relative group overflow-hidden shadow-2xl">
                                 <div class="w-full h-full bg-gray-900 rounded-[2.5rem] overflow-hidden grayscale group-hover:grayscale-0 transition duration-700 cursor-pointer"></div>
                            </div>
                            <div class="lg:w-[400px] space-y-8">
                                <p class="text-[11px] uppercase tracking-[0.3em] text-gray-500 font-bold">Archive / 2024 &bull; 01</p>
                                <h3 class="text-5xl font-serif italic text-white leading-[1.1]">Core Systems <br> Architecture</h3>
                                <p class="text-gray-400 text-lg leading-relaxed italic font-medium">A high-performance backend engine designed for large-scale enterprise data management.</p>
                                <div class="flex gap-6 pt-4">
                                     <button class="w-16 h-16 rounded-full border border-white/10 flex items-center justify-center text-accent group hover:bg-accent hover:text-black transition duration-500">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17l9.2-9.2M17 17V7H7"/></svg>
                                     </button>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col lg:flex-row-reverse items-center gap-24">
                            <div class="flex-1 w-full aspect-[16/10] rounded-[3rem] bg-white/5 border border-white/10 p-3 relative group overflow-hidden shadow-2xl">
                                 <div class="w-full h-full bg-gray-900 rounded-[2.5rem] overflow-hidden grayscale group-hover:grayscale-0 transition duration-700 cursor-pointer"></div>
                            </div>
                            <div class="lg:w-[400px] space-y-8">
                                <p class="text-[11px] uppercase tracking-[0.3em] text-gray-500 font-bold">Archive / 2024 &bull; 02</p>
                                <h3 class="text-5xl font-serif italic text-white leading-[1.1]">Cloud Workspace OS</h3>
                                <p class="text-gray-400 text-lg leading-relaxed italic font-medium">Redefining for digital workspace through modular system architecture.</p>
                                <div class="flex gap-6 pt-4">
                                     <button class="w-16 h-16 rounded-full border border-white/10 flex items-center justify-center text-accent group hover:bg-accent hover:text-black transition duration-500">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17l9.2-9.2M17 17V7H7"/></svg>
                                     </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <footer class="py-24 bg-[#050505] border-t border-white/5">
             <div class="max-w-7xl mx-auto px-10 flex flex-col items-center gap-12 text-center">
                 <div class="text-4xl font-serif tracking-tight">UJ<span class="text-accent">.</span></div>
                 <div class="flex gap-16">
                     <a href="#" class="text-[11px] uppercase tracking-[0.4em] text-gray-400 hover:text-accent transition font-bold">Linkedin</a>
                     <a href="#" class="text-[11px] uppercase tracking-[0.4em] text-gray-400 hover:text-accent transition font-bold">Github</a>
                     <a href="#" class="text-[11px] uppercase tracking-[0.4em] text-gray-400 hover:text-accent transition font-bold">Email</a>
                 </div>
                 <p class="text-[10px] uppercase tracking-[0.4em] text-gray-600 font-bold">&copy; {{ date('Y') }} Uriel John G. Chavez. IT Infrastructure.</p>
             </div>
        </footer>
    </body>
</html>
