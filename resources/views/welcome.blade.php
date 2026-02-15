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

        <!-- Tailwind Play CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            serif: ['"Instrument Serif"', 'serif'],
                            sans: ['"Instrument Sans"', 'sans-serif'],
                            outfit: ['Outfit', 'sans-serif'],
                        },
                        colors: {
                            accent: '#0ef',
                            bg: '#1f242d',
                            'bg-lighter': '#323946',
                        },
                    }
                }
            }
        </script>

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            :root {
                --accent: #0ef;
                --bg: #1f242d;
                --bg-lighter: #323946;
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
                background: rgba(31, 36, 45, 0.8);
                backdrop-filter: blur(10px);
                border-bottom: 2px solid rgba(0, 238, 255, 0.1);
            }

            .hex-frame {
                clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
                background: var(--accent);
                position: relative;
                transition: 0.5s;
            }
            .hex-frame::before {
                content: '';
                position: absolute;
                inset: 4px;
                background: var(--bg);
                clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
                z-index: 1;
            }
            .hex-frame img {
                position: relative;
                z-index: 2;
                clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
                width: calc(100% - 12px);
                height: calc(100% - 12px);
                margin: 6px;
                object-fit: cover;
                transition: 0.5s;
            }
            .hex-frame:hover {
                box-shadow: 0 0 50px var(--accent);
            }

            .btn-neon {
                background: var(--accent);
                box-shadow: 0 0 10px var(--accent);
                transition: 0.5s;
            }
            .btn-neon:hover {
                box-shadow: 0 0 30px var(--accent);
            }

            .italic { font-style: italic; }
        </style>
    </head>
    <body class="antialiased selection:bg-accent selection:text-white">
        
        <header class="fixed top-0 left-0 w-full px-[9%] py-8 flex justify-between items-center z-50 glass-nav">
            <a href="#" class="text-2xl font-bold text-white cursor-default">Portfolio<span class="text-accent">.</span></a>
            
            <nav class="flex items-center gap-8">
                <a href="#home" class="text-lg font-medium text-white hover:text-accent transition active">Home</a>
                <a href="#about" class="text-lg font-medium text-white hover:text-accent transition">About</a>
                <a href="#certificates" class="text-lg font-medium text-white hover:text-accent transition">Certificates</a>
                <a href="#projects" class="text-lg font-medium text-white hover:text-accent transition">Projects</a>
                <a href="#experience" class="text-lg font-medium text-white hover:text-accent transition">Experience</a>
                <a href="#contact" class="px-7 py-2 btn-neon text-black font-bold text-sm uppercase rounded-full hover:brightness-110 transition ml-4">
                    Contact
                </a>
            </nav>
        </header>

        <!-- Hero Section -->
        <div id="home" class="relative min-h-screen flex items-center bg-bg px-[9%] py-10">
            <main class="max-w-7xl mx-auto w-full">
                <div class="grid lg:grid-cols-2 lg:items-center gap-12">
                    <div class="space-y-6">
                        <h3 class="text-3xl font-bold text-white">Hello, It's Me</h3>
                        <h1 class="text-6xl md:text-7xl font-bold leading-tight text-white mb-2">Uriel John G. <br> <span class="italic">Chavez.</span></h1>
                        <h3 class="text-3xl font-bold text-white">And I'm a <span class="text-accent">Information Technology Student</span></h3>
                        
                        <p class="text-lg text-white/70 max-w-xl leading-relaxed">
                            Bachelor of Science in Information Technology student, focusing on technical IT solutions and complex system infrastructures.
                        </p>

                        <div class="flex gap-4 mb-8">
                            <a href="#" class="w-10 h-10 border-2 border-accent rounded-full flex items-center justify-center text-accent hover:bg-accent hover:text-black hover:shadow-[0_0_20px_#0ef] transition duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 border-2 border-accent rounded-full flex items-center justify-center text-accent hover:bg-accent hover:text-black hover:shadow-[0_0_20px_#0ef] transition duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 border-2 border-accent rounded-full flex items-center justify-center text-accent hover:bg-accent hover:text-black hover:shadow-[0_0_20px_#0ef] transition duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.493-1.1-1.1s.493-1.1 1.1-1.1 1.1.493 1.1 1.1-.493 1.1-1.1 1.1zm8 6.891h-2v-3.418c0-.847-.019-1.938-1.181-1.938-1.181 0-1.362.922-1.362 1.876v3.48h-2v-6h1.92v.82h.028c.267-.506.92-1.038 1.89-1.038 2.022 0 2.396 1.332 2.396 3.064v3.254z"/></svg>
                            </a>
                        </div>

                        <a href="#" class="inline-block px-10 py-3 btn-neon text-black font-bold text-lg rounded-full hover:brightness-110 transition">Download CV</a>
                    </div>
                    
                    <div class="flex justify-center lg:justify-end">
                        <div class="hex-frame w-80 h-80 md:w-96 md:h-96">
                            <img src="{{ asset('image/uriell.jpg') }}" alt="Uriel John Chavez">
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- About Section -->
        <div id="about" class="bg-bg-lighter py-32 px-[9%] border-y border-white/5">
            <main class="max-w-7xl mx-auto w-full">
                <div class="grid lg:grid-cols-2 lg:items-center gap-16 lg:gap-32">
                    <div class="flex justify-center lg:justify-start order-2 lg:order-1">
                        <div class="hex-frame w-72 h-72 md:w-80 md:h-80 lg:w-96 lg:h-96">
                            <img src="{{ asset('image/uriell.jpg') }}" alt="About Uriel John Chavez">
                        </div>
                    </div>

                    <div class="space-y-10 order-1 lg:order-2">
                        <div class="space-y-6">
                            <h2 class="text-5xl font-bold text-white">About <span class="text-accent">Me</span></h2>
                            <h3 class="text-2xl font-bold text-white tracking-tight">Frontend Developer!</h3>
                        </div>
                        
                        <div class="space-y-6 text-white/70 text-lg leading-relaxed italic font-medium">
                            <p>In the rapidly evolving world of IT, I believe in the power of structured logic. Success is about the precision of every detail, from the backend architecture to the network scalability.</p>
                            <p>I build digital systems that are not only efficient—where every line of code and system configuration has a clear purpose. High-performance IT meets strong infrastructure design.</p>
                        </div>
                        <a href="#" class="inline-block px-10 py-3 btn-neon text-black font-bold text-lg rounded-full hover:brightness-110 transition">Read More</a>
                    </div>
                </div>
            </main>
        </div>

        <!-- Credentials Section -->
        <div id="certificates" class="bg-bg py-32 px-[9%]">
            <main class="max-w-7xl mx-auto w-full">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-20 gap-6">
                    <div class="space-y-4 text-left">
                        <p class="text-[10px] uppercase tracking-[0.5em] text-accent font-bold font-outfit">CREDENTIALS</p>
                        <h2 class="text-6xl font-serif italic text-white uppercase tracking-tight leading-none">ITS Certificates</h2>
                    </div>
                    <a href="#" class="text-[10px] uppercase tracking-[0.2em] text-white/30 hover:text-accent transition font-bold flex items-center gap-2 border-b border-white/5 pb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                        MANAGE CREDENTIALS
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    @foreach($certificates as $certificate)
                    <div class="bg-[#111111] p-10 rounded-[2.5rem] border border-white/5 group hover:border-accent/30 transition-all duration-500 flex flex-col h-full shadow-2xl">
                        <div class="bg-[#1a1a1a] rounded-3xl p-4 mb-10 group-hover:bg-[#222222] transition-colors border border-white/5 flex items-center justify-center">
                            <div class="aspect-video w-full rounded-2xl overflow-hidden shadow-inner relative">
                                <img src="{{ $certificate->image ?? asset('image/uriell.jpg') }}" alt="{{ $certificate->title }}" class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-1000 scale-105 group-hover:scale-110">
                            </div>
                        </div>
                        
                        <div class="space-y-8 flex-1 flex flex-col">
                            <h3 class="text-4xl font-serif italic text-white leading-tight min-h-[1.2em]">{{ $certificate->title }}</h3>
                            
                            <div class="space-y-6 flex-1">
                                <div class="space-y-2">
                                    <p class="text-[9px] uppercase tracking-[0.2em] text-white/40 font-bold">ADMINISTERED BY: <span class="text-white/60 ml-2 tracking-normal uppercase">{{ $certificate->administered_by ?? 'UNIVERSITY OF MINDANAO' }}</span></p>
                                    <p class="text-[9px] uppercase tracking-[0.2em] text-white/40 font-bold">LANGUAGE: <span class="text-white/60 ml-2 tracking-normal uppercase uppercase">{{ $certificate->language ?? 'ENGLISH' }}</span></p>
                                </div>
                                
                                <div class="w-full h-[1px] bg-white/5"></div>
                                
                                <div class="space-y-1">
                                    <p class="text-[10px] uppercase tracking-[0.2em] text-white/50 font-black">Information Technology Specialist</p>
                                    <p class="text-sm text-white/30 font-medium">{{ $certificate->year }}</p>
                                </div>
                            </div>
                            
                            <div class="pt-8 border-t border-white/5 mt-auto flex justify-between items-center group/btn cursor-pointer">
                                <span class="text-[10px] uppercase tracking-[0.3em] text-white group-hover:text-accent font-bold transition">VERIFY CREDENTIAL</span>
                                <div class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-white/30 group-hover:text-accent group-hover:border-accent transition-all duration-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </main>
        </div>

        <!-- Experience Section -->
        <div id="experience" class="bg-bg-lighter py-32 px-[9%] border-b border-white/5">
            <main class="max-w-7xl mx-auto w-full">
                <div class="text-center space-y-4 mb-20">
                    <h2 class="text-5xl font-bold text-white">My <span class="text-accent">Experience</span></h2>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($experiences as $experience)
                    <div class="bg-bg-lighter p-10 rounded-3xl border border-white/5 hover:border-accent hover:scale-105 transition duration-500 group flex flex-col justify-between h-auto shadow-xl">
                        <div class="space-y-6">
                            <div class="w-16 h-16 bg-accent/10 rounded-2xl flex items-center justify-center text-accent group-hover:bg-accent group-hover:text-black transition duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white">{{ $experience->role }}</h3>
                            <p class="text-[11px] uppercase tracking-[0.2em] text-accent font-bold">{{ $experience->company }} | {{ $experience->year }}</p>
                            <p class="text-white/60 leading-relaxed text-sm">
                                {{ $experience->description }}
                            </p>
                        </div>
                        <a href="#" class="inline-block mt-8 px-8 py-2.5 btn-neon text-black font-bold text-sm rounded-full text-center">Details</a>
                    </div>
                    @endforeach
                </div>
            </main>
        </div>

        <!-- Projects Section -->
        <div id="projects" class="bg-bg py-32 px-[9%]">
            <main class="max-w-7xl mx-auto w-full">
                <div class="text-center space-y-4 mb-20">
                    <h2 class="text-5xl font-bold text-white">Latest <span class="text-accent">Project</span></h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($projects as $project)
                    <div class="relative rounded-3xl overflow-hidden group border border-white/5 hover:border-accent/30 transition duration-500 shadow-2xl h-80">
                        <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover grayscale brightness-50 group-hover:grayscale-0 group-hover:brightness-100 group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent flex flex-col justify-end p-8 transform translate-y-2 group-hover:translate-y-0 transition duration-500">
                            <h3 class="text-2xl font-bold text-white mb-2">{{ $project->title }}</h3>
                            <p class="text-white/70 text-sm mb-6 line-clamp-2">{{ $project->description }}</p>
                            <a href="#" class="w-10 h-10 bg-accent rounded-full flex items-center justify-center text-black hover:scale-110 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </main>
        </div>

        <!-- Contact Section -->
        <div id="contact" class="bg-bg-lighter py-32 px-[9%]">
            <main class="max-w-3xl mx-auto w-full">
                <div class="text-center space-y-4 mb-20">
                    <h2 class="text-5xl font-bold text-white">Contact <span class="text-accent">Me!</span></h2>
                </div>

                <form action="#" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <input type="text" placeholder="Full Name" class="w-full bg-bg border border-white/10 rounded-xl px-6 py-4 text-white focus:border-accent focus:outline-none transition">
                        <input type="email" placeholder="Email Address" class="w-full bg-bg border border-white/10 rounded-xl px-6 py-4 text-white focus:border-accent focus:outline-none transition">
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <input type="number" placeholder="Mobile Number" class="w-full bg-bg border border-white/10 rounded-xl px-6 py-4 text-white focus:border-accent focus:outline-none transition">
                        <input type="text" placeholder="Email Subject" class="w-full bg-bg border border-white/10 rounded-xl px-6 py-4 text-white focus:border-accent focus:outline-none transition">
                    </div>
                    <textarea rows="8" placeholder="Your Message" class="w-full bg-bg border border-white/10 rounded-xl px-6 py-4 text-white focus:border-accent focus:outline-none transition resize-none"></textarea>
                    
                    <div class="text-center">
                        <button type="submit" class="px-12 py-3 btn-neon text-black font-bold text-lg rounded-full hover:brightness-110 transition">Send Message</button>
                    </div>
                </form>
            </main>
        </div>

        <footer class="bg-bg py-8 text-center border-t border-white/5 relative">
            <p class="text-white/50 text-sm">Copyright &copy; 2024 by Uriel Chavez | All Rights Reserved.</p>
            <a href="#home" class="absolute right-[9%] top-1/2 -translate-y-1/2 w-10 h-10 bg-accent rounded-xl flex items-center justify-center text-black hover:shadow-[0_0_20px_#0ef] transition duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
            </a>
        </footer>
    </body>
</html>
