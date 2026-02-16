@php
    $profile = (object)[
        'name' => 'Uriel <br> <span class="italic">John.</span>',
        'title' => 'Information Technology Student',
        'bio' => 'Specialize in developing complex IT infrastructures and technical solutions that bridge high-performance engineering with modern digital efficiency.',
        'image' => asset('image/uriell.png'),
        'cv_link' => '#',
        'facebook_link' => '#',
        'instagram_link' => '#',
        'linkedin_link' => '#',
        'github_link' => '#',
        'email' => 'urieljohnchavez@gmail.com',
        'phone' => '+63 907 8700 119',
        'address' => 'Maa, Davao City',
    ];

    $experiences = [
        (object)[
            'role' => 'Senior IT Specialist',
            'company' => 'METROPOLIS SYSTEMS',
            'year' => '2022 - PRES',
            'description' => 'Leading the technical vision for high-scale IT infrastructures. Bridging the gap between stakeholders and technical teams.',
            'color' => 'accent-purple',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-full h-full"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><path d="M9 1v3"/><path d="M15 1v3"/><path d="M9 20v3"/><path d="M15 20v3"/><path d="M20 9h3"/><path d="M20 15h3"/><path d="M1 9h3"/><path d="M1 15h3"/></svg>'
        ],
        (object)[
            'role' => 'Web Developer',
            'company' => 'Freelance Professional',
            'year' => '2020 - 2021',
            'description' => 'Completed 30+ international website projects. Specialized in creating high-converting landing pages and e-commerce stores.',
            'color' => 'accent-pink',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-full h-full"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>'
        ]
    ];

    $certificates = [
        (object)[
            'title' => 'Cybersecurity',
            'administered_by' => 'UNIVERSITY OF MINDANAO',
            'year' => '2025',
            'color' => 'blue-500',
            'image' => asset('image/cybersecurity.jpg'),
            'verify_link' => '#'
        ],
        (object)[
            'title' => 'Network Security',
            'administered_by' => 'UNIVERSITY OF MINDANAO',
            'year' => '2025',
            'color' => 'accent-purple',
            'image' => asset('image/networksecurity.jpg'),
            'verify_link' => '#'
        ],
        (object)[
            'title' => 'Networking',
            'administered_by' => 'UNIVERSITY OF MINDANAO',
            'year' => '2024',
            'color' => 'cyan-400',
            'image' => asset('image/networking.jpg'),
            'verify_link' => '#'
        ],
        (object)[
            'title' => 'HTML and CSS',
            'administered_by' => 'UNIVERSITY OF MINDANAO',
            'year' => '2024',
            'color' => 'accent-pink',
            'image' => asset('image/HTML CSS.jpg'),
            'verify_link' => '#'
        ],
        (object)[
            'title' => 'Databases',
            'administered_by' => 'UNIVERSITY OF MINDANAO',
            'year' => '2024',
            'color' => 'emerald-400',
            'image' => asset('image/database.jpg'),
            'verify_link' => '#'
        ],
        (object)[
            'title' => 'Java',
            'administered_by' => 'UNIVERSITY OF MINDANAO',
            'year' => '2022',
            'color' => 'orange-400',
            'image' => asset('image/java.jpg'),
            'verify_link' => '#'
        ],
    ];

    $tools = [
        (object)[
            'name' => 'React JS',
            'category' => 'Frontend Library',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>',
            'description' => 'I use React to build complex and interactive user interfaces. My experience includes using Hooks, Context API, and Redux for global state management.',
            'proficiencies' => ['Hooks', 'Redux', 'Context API', 'Performance'],
            'certificate' => 'React Developer Certificate - Meta Specialization',
            'color' => 'accent-purple'
        ],
        (object)[
            'name' => 'Tailwind CSS',
            'category' => 'Utility-first Framework',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>',
            'description' => 'I specialize in building highly responsive and visually stunning layouts using Tailwind CSS. Expertise in extending the theme and building multi-brand design systems.',
            'proficiencies' => ['Responsive Design', 'JIT Engine', 'Custom Configurations', 'CSS Variables'],
            'certificate' => 'Advanced CSS & Tailwind Mastery - Coursera',
            'color' => 'accent-pink'
        ],
        (object)[
            'name' => 'JavaScript ES6+',
            'category' => 'Programming Language',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m10 2 6 6-6 6-6-6Z"/><path d="m14 10 6 6-6 6-6-6Z"/></svg>',
            'description' => 'Strong foundation in modern JavaScript, focusing on performance, asynchronous programming, and clean code principles.',
            'proficiencies' => ['Async/Await', 'ESM', 'DOM Manipulation', 'Functional Programming'],
            'certificate' => 'JavaScript Algorithms and Data Structures - FreeCodeCamp',
            'color' => 'yellow-500'
        ],
        (object)[
            'name' => 'Figma',
            'category' => 'UI/UX Design Tool',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 5.5A3.5 3.5 0 0 1 8.5 2H12v7H8.5A3.5 3.5 0 0 1 5 5.5z"/><path d="M12 2h3.5a3.5 3.5 0 1 1 0 7H12V2z"/><path d="M12 12.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 1 1-7 0z"/><path d="M5 19.5A3.5 3.5 0 0 1 8.5 16H12v7H8.5A3.5 3.5 0 0 1 5 19.5z"/><path d="M8.5 16h3.5v7H8.5a3.5 3.5 0 1 1 0-7z"/></svg>',
            'description' => 'Expert in hi-fi prototyping, design systems, and vector editing. Bridging the gap between conceptual design and frontend implementation.',
            'proficiencies' => ['Prototyping', 'Auto-Layout', 'Design Systems', 'Variants'],
            'certificate' => 'Google UX Design Professional Certificate - Coursera',
            'color' => 'accent-purple'
        ],
        (object)[
            'name' => 'Git & Github',
            'category' => 'Version Control',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg>',
            'description' => 'Proficient in team collaboration environments using Git workflows, branching strategies, and CI/CD pipelines.',
            'proficiencies' => ['Git Flow', 'Pull Requests', 'Actions', 'Resolving Conflicts'],
            'certificate' => 'Version Control with Git - Atlassian University',
            'color' => 'accent-pink'
        ],
        (object)[
            'name' => 'Node & Next.js',
            'category' => 'Fullstack Framework',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>',
            'description' => 'Enthusiastic about Server-Side Rendering (SSR) and Static Site Generation (SSG). Building performant and SEO-friendly applications.',
            'proficiencies' => ['App Router', 'API Routes', 'Server Components', 'Middleware'],
            'certificate' => 'Next.js 13+ Advanced Patterns - Vercel Academy',
            'color' => 'green-500'
        ],
    ];

    $projects = [
        (object)[
            'title' => 'Core Systems Architecture',
            'description' => 'A high-performance backend engine designed for large-scale enterprise data management.',
            'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc51?q=80&w=1000&auto=format&fit=crop'
        ],
        (object)[
            'title' => 'Cloud Workspace OS',
            'description' => 'Redefining for digital workspace through modular system architecture.',
            'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1000&auto=format&fit=crop'
        ],
        (object)[
            'title' => 'Aether Protocol',
            'description' => 'A decentralized mesh protocol for low-latency network recovery.',
            'image' => 'https://images.unsplash.com/photo-1639322537228-f710d846310a?q=80&w=1000&auto=format&fit=crop'
        ],
    ];

@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Uriel John G. Chavez | Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Inter:wght@100..900&display=swap" rel="stylesheet">

        <!-- Tailwind Play CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Inter', 'sans-serif'],
                            outfit: ['Outfit', 'sans-serif'],
                        },
                        colors: {
                            'dark-bg': '#0b011d',
                            'accent-purple': '#8b5cf6',
                            'accent-pink': '#ec4899',
                        },
                        backgroundImage: {
                            'primary-gradient': 'linear-gradient(135deg, #8b5cf6 0%, #ec4899 100%)',
                        }
                    }
                }
            }
        </script>

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            @keyframes slide-down {
                from { transform: translateY(-100%); opacity: 0; }
                to { transform: translateY(0); opacity: 1; }
            }
            @keyframes slide-up {
                from { transform: translateY(100%); opacity: 0; }
                to { transform: translateY(0); opacity: 1; }
            }
            @keyframes zoom-in {
                from { transform: scale(0.9); opacity: 0; }
                to { transform: scale(1); opacity: 1; }
            }
            .animate-slide-down { animation: slide-down 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
            .animate-slide-up { animation: slide-up 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
            .animate-zoom { animation: zoom-in 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards; }

            :root {
                --primary-bg: #05010d;
                --accent-purple: #8b5cf6;
                --accent-pink: #ec4899;
                --card-bg: rgba(30, 30, 46, 0.4);
                --text-main: #ffffff;
                --text-muted: rgba(255, 255, 255, 0.4);
                --border-color: rgba(255, 255, 255, 0.05);
                --glass-nav: rgba(5, 1, 13, 0.7);
            }

            html.light {
                --primary-bg: #f8fafc;
                --card-bg: rgba(255, 255, 255, 0.6);
                --text-main: #0f172a;
                --text-muted: rgba(15, 23, 42, 0.5);
                --border-color: rgba(15, 23, 42, 0.08);
                --glass-nav: rgba(248, 250, 252, 0.8);
            }

            body { 
                background-color: var(--primary-bg);
                color: var(--text-main);
                font-family: 'Outfit', sans-serif;
                overflow-x: hidden;
                background-image: 
                    radial-gradient(circle at 10% 20%, rgba(139, 92, 246, 0.1) 0%, transparent 40%),
                    radial-gradient(circle at 90% 80%, rgba(236, 72, 153, 0.1) 0%, transparent 40%);
                background-attachment: fixed;
                transition: background-color 0.5s cubic-bezier(0.4, 0, 0.2, 1), color 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            }
            
            .text-gradient {
                background: linear-gradient(to right, var(--accent-purple), var(--accent-pink));
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .bg-accent-gradient {
                background: linear-gradient(135deg, var(--accent-purple), var(--accent-pink));
            }

            .glass-nav {
                background: var(--glass-nav);
                backdrop-filter: blur(20px);
                border-bottom: 1px solid var(--border-color);
                transition: 0.5s;
            }

            .btn-glow-purple {
                border: 1px solid rgba(139, 92, 246, 0.5);
                box-shadow: 0 0 15px rgba(139, 92, 246, 0.2);
                transition: 0.3s;
            }
            .btn-glow-purple:hover {
                box-shadow: 0 0 25px rgba(139, 92, 246, 0.4);
                background: rgba(139, 92, 246, 0.1);
            }

            .btn-glow-pink {
                border: 1px solid rgba(236, 72, 153, 0.5);
                box-shadow: 0 0 15px rgba(236, 72, 153, 0.2);
                transition: 0.3s;
            }
            .btn-glow-pink:hover {
                box-shadow: 0 0 25px rgba(236, 72, 153, 0.4);
                background: rgba(236, 72, 153, 0.1);
            }

            /* Typing animation cursor */
            .typing-cursor::after {
                content: '|';
                animation: blink 1s step-end infinite;
            }
            @keyframes blink {
                from, to { color: transparent }
                50% { color: var(--accent-pink) }
            }

            .animate-pulse-subtle {
                animation: pulse-subtle 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
            }
            @keyframes pulse-subtle {
                0%, 100% { opacity: 1; transform: scale(1); }
                50% { opacity: 0.8; transform: scale(1.05); }
            }

            @keyframes pulse-green {
                0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.4); }
                70% { box-shadow: 0 0 0 10px rgba(34, 197, 94, 0); }
                100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
            }
            .animate-pulse-green {
                animation: pulse-green 2s infinite;
            }

            @keyframes zoom {
                from { transform: scale(0.9); opacity: 0; }
                to { transform: scale(1); opacity: 1; }
            }
            .animate-zoom { animation: zoom 0.3s ease-out forwards; }

            @keyframes float {
                0%, 100% { transform: translateY(0) translateX(0) rotate(0); }
                33% { transform: translateY(-10px) translateX(5px) rotate(1deg); }
                66% { transform: translateY(5px) translateX(-5px) rotate(-1deg); }
            }
            .animate-float {
                animation: float 6s ease-in-out infinite;
            }
        </style>


        </style>
    </head>
    <body class="antialiased selection:bg-accent selection:text-white">
        
        <!-- Navbar -->
        <header class="fixed top-0 left-0 w-full px-6 md:px-[9%] py-6 flex justify-between items-center z-50 glass-nav">
            <div class="flex flex-col leading-none">
                <a href="#" class="text-xl font-bold text-white flex items-center gap-1">
                    <span class="text-accent-pink">&lt;</span>JohnDev<span class="text-accent-pink">/&gt;</span>
                </a>
                <span class="text-[8px] tracking-[0.3em] font-bold text-white/50 mt-1 uppercase">Information Technology Student</span>
            </div>
            
            <!-- Hamburger Menu Button (Mobile Only) -->
            <button id="menu-btn" class="md:hidden text-white hover:text-accent-pink transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </button>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="#home" class="text-sm font-medium opacity-70 hover:opacity-100 transition py-2 px-4 rounded-full bg-accent-purple/20 border border-accent-purple/30">Home</a>
                <a href="#about" class="text-sm font-medium opacity-70 hover:opacity-100 transition">About</a>
                <a href="#edu" class="text-sm font-medium opacity-70 hover:opacity-100 transition">Education</a>
                <a href="#skills" class="text-sm font-medium opacity-70 hover:opacity-100 transition">Skills</a>
                <a href="#projects" class="text-sm font-medium opacity-70 hover:opacity-100 transition">Projects</a>
                <a href="#certs" class="text-sm font-medium opacity-70 hover:opacity-100 transition">Certificates</a>
                
                <div class="flex items-center gap-6 ml-4">
                    <button id="theme-toggle" class="text-white hover:text-accent-pink transition w-10 h-10 flex items-center justify-center rounded-xl bg-white/5 border border-white/10" onclick="toggleTheme()">
                        <svg id="theme-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="18.36" x2="5.64" y2="19.78"></line><line x1="18.36" y1="4.22" x2="19.78" y2="5.64"></line></svg>
                    </button>
                    <a href="#contact" class="px-6 py-2 border border-accent-purple rounded-full text-sm font-semibold hover:bg-accent-purple text-white transition shadow-[0_0_15px_rgba(139,92,246,0.3)]">
                        Contact Me
                    </a>
                </div>
            </nav>

            <!-- Mobile Nav Container -->
            <div id="mobile-menu" class="fixed top-[88px] left-0 w-full bg-dark-bg/95 backdrop-blur-xl border-b border-white/5 flex flex-col items-center py-10 gap-6 transform -translate-y-full opacity-0 pointer-events-none transition-all duration-300 md:hidden z-40">
                <a href="#home" class="text-lg font-medium hover:text-accent-pink transition" onclick="toggleMenu()">Home</a>
                <a href="#about" class="text-lg font-medium hover:text-accent-pink transition" onclick="toggleMenu()">About</a>
                <a href="#edu" class="text-lg font-medium hover:text-accent-pink transition" onclick="toggleMenu()">Education</a>
                <a href="#skills" class="text-lg font-medium hover:text-accent-pink transition" onclick="toggleMenu()">Skills</a>
                <a href="#projects" class="text-lg font-medium hover:text-accent-pink transition" onclick="toggleMenu()">Projects</a>
                <a href="#certs" class="text-lg font-medium hover:text-accent-pink transition" onclick="toggleMenu()">Certificates</a>
                <a href="#contact" class="px-8 py-3 bg-accent-purple rounded-full text-sm font-bold shadow-lg" onclick="toggleMenu()">Contact Me</a>
            </div>
        </header>

        <script>
            function toggleMenu() {
                const menu = document.getElementById('mobile-menu');
                const isOpen = !menu.classList.contains('-translate-y-full');
                
                if (isOpen) {
                    menu.classList.add('-translate-y-full', 'opacity-0', 'pointer-events-none');
                } else {
                    menu.classList.remove('-translate-y-full', 'opacity-0', 'pointer-events-none');
                }
            }

            document.getElementById('menu-btn').addEventListener('click', toggleMenu);
        </script>

        <!-- Hero Section -->
        <section id="home" class="relative min-h-screen flex items-center px-6 md:px-[9%] py-20 overflow-hidden">
            <!-- Background Nebula Effect -->
            <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-accent-purple/10 to-transparent pointer-events-none"></div>

            <div class="max-w-7xl mx-auto w-full grid lg:grid-cols-[1.1fr_0.9fr] items-center gap-12 relative z-10">
                <div class="space-y-10 order-2 lg:order-1 relative z-10">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-3 px-4 py-2 rounded-xl bg-white/5 border border-white/10 animate-fade-in">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent-purple opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-accent-purple"></span>
                        </span>
                        <span class="text-[10px] font-bold text-white/50 uppercase tracking-[0.2em]">Available for Freelance</span>
                    </div>

                    <!-- Main Heading -->
                    <div class="space-y-4">
                        <h1 class="text-5xl md:text-7xl font-black text-white leading-[0.9] tracking-tighter">
                            <span class="block">Creative Solutions</span>
                            <span class="block text-gradient">Digital World</span>
                        </h1>
                        
                        <div class="text-lg md:text-xl font-medium text-white/60">
                            I am a <span id="typing-text" class="text-accent-purple border-r-2 border-accent-purple pr-1"></span>
                        </div>

                        <p class="text-sm md:text-base text-white/40 max-w-md leading-relaxed mt-4">
                            Transforming complex challenges into elegant technical solutions. Specializing in high-performance system architecture and modern web experiences.
                        </p>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap items-center gap-6">
                        <a href="#projects" class="px-10 py-5 bg-accent-purple text-white rounded-2xl font-black text-xs uppercase tracking-widest hover:scale-105 transition-all duration-300 shadow-xl shadow-accent-purple/20 active:scale-95 flex items-center gap-3">
                            View Portfolio
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="translate-x-0 group-hover:translate-x-1 transition"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                        <a href="#about" class="px-10 py-5 bg-white/5 border border-white/10 rounded-2xl font-black text-xs text-white uppercase tracking-widest hover:bg-white/10 transition-all duration-300 flex items-center gap-3">
                            About Me
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-white/40"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </a>
                    </div>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-3 gap-12 pt-10 border-t border-white/5">
                        <div class="space-y-1">
                            <h4 class="text-4xl font-black text-white">5+</h4>
                            <p class="text-[10px] font-bold text-white/30 uppercase tracking-[0.2em]">Experience</p>
                        </div>
                        <div class="space-y-1">
                            <h4 class="text-4xl font-black text-white">50+</h4>
                            <p class="text-[10px] font-bold text-white/30 uppercase tracking-[0.2em]">Projects</p>
                        </div>
                        <div class="space-y-1">
                            <h4 class="text-4xl font-black text-white">20+</h4>
                            <p class="text-[10px] font-bold text-white/30 uppercase tracking-[0.2em]">Clients</p>
                        </div>
                    </div>
                </div>
                
                <div class="relative order-1 lg:order-2">
                    <div class="relative rounded-[3rem] overflow-hidden border border-white/10 group shadow-2xl max-w-[80%] ml-auto">
                        <img src="{{ $profile->image }}" alt="John" class="w-full aspect-[4/5] object-cover grayscale brightness-75 group-hover:grayscale-0 group-hover:brightness-100 transition duration-1000 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05010d] via-transparent to-transparent opacity-60"></div>
                    </div>

                    <!-- Floating Terminal Card -->
                    <div class="absolute -bottom-10 -left-10 md:-left-20 w-72 p-6 rounded-2xl bg-[#1e1e2e]/90 backdrop-blur-xl border border-white/5 shadow-2xl animate-float" style="animation-delay: 0.5s;">
                        <div class="flex gap-2 mb-4">
                            <div class="w-2.5 h-2.5 rounded-full bg-red-500"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-yellow-500"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-green-500"></div>
                        </div>
                        <div class="space-y-2 font-mono text-xs">
                            <p class="text-blue-400">const <span class="text-white">developer</span> = {</p>
                            <p class="pl-4 text-white/50">name: <span class="text-accent-pink">'Uriel John'</span>,</p>
                            <p class="pl-4 text-white/50">passion: <span class="text-accent-pink">'Tech Alchemy'</span></p>
                            <p class="text-blue-400">};</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="about" class="py-24 md:py-32 px-6 md:px-[9%] border-y border-white/5 relative overflow-hidden">
            <div class="max-w-7xl mx-auto w-full relative z-10">
                <div class="text-center space-y-2 mb-16">
                    <p class="text-accent-purple text-xs font-bold tracking-[0.4em] uppercase">Overview</p>
                    <h2 class="text-4xl md:text-5xl font-bold text-white">About The <span class="text-gradient">Developer</span></h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Who Am I Card -->
                    <div class="md:col-span-2 md:row-span-2 bg-[var(--card-bg)] border border-[var(--border-color)] rounded-3xl p-8 hover:border-accent-purple/30 transition duration-500">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-12 h-12 rounded-2xl bg-accent-purple/20 flex items-center justify-center text-accent-purple">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </div>
                            <h3 class="text-xl font-bold text-white">Who Am I?</h3>
                        </div>
                        <div class="space-y-4 opacity-60 leading-relaxed text-sm md:text-base">
                            <p>
                                Hi! I'm <span class="text-white font-bold">Uriel John</span>, a dedicated <span class="text-accent-pink font-bold">IT Student</span> based in the Philippines. 
                                I have a deep passion for creating digital interfaces that are not only functional but also visually stunning. 
                                With a background in Technical Information, I bridge the gap between code logic and design aesthetics.
                            </p>
                            <p>
                                My journey in tech is driven by curiosity and the desire to build things that make an impact. 
                                Whether it's architecting complex systems or fine-tuning micro-interactions, I strive for excellence in every project.
                            </p>
                        </div>
                    </div>

                    <!-- Experience Stats Card -->
                    <div class="bg-[var(--card-bg)] border border-[var(--border-color)] rounded-3xl p-8 flex flex-col justify-center items-center text-center hover:border-accent-purple/30 transition duration-500">
                        <div class="space-y-2 mb-8">
                            <h4 class="text-5xl font-bold text-gradient">2+</h4>
                            <p class="text-[10px] tracking-[0.2em] font-black text-white/40 uppercase">Years Experience</p>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-5xl font-bold text-white">15+</h4>
                            <p class="text-[10px] tracking-[0.2em] font-black text-white/40 uppercase">Projects Done</p>
                        </div>
                    </div>

                    <!-- Current Focus Card -->
                    <div class="bg-[var(--card-bg)] border border-[var(--border-color)] rounded-3xl p-8 hover:border-accent-pink/30 transition duration-500">
                        <h3 class="text-lg font-bold text-white mb-4">Current Focus</h3>
                        <p class="opacity-60 text-sm mb-6">Deep diving into <span class="text-accent-purple">Web3</span> & <span class="text-accent-pink">AI Integration</span>.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-accent-purple/10 border border-accent-purple/20 rounded-md text-[10px] font-bold text-accent-purple">Laravel</span>
                            <span class="px-3 py-1 bg-accent-pink/10 border border-accent-pink/20 rounded-md text-[10px] font-bold text-accent-pink">Cloud</span>
                        </div>
                    </div>

                    <!-- Base Station Card -->
                    <div class="bg-[var(--card-bg)] border border-[var(--border-color)] rounded-3xl p-8 flex items-center justify-between hover:border-green-500/30 transition duration-500">
                        <div class="space-y-2">
                            <h3 class="text-lg font-bold text-white">Base Station</h3>
                            <p class="opacity-40 text-[10px] font-bold uppercase tracking-widest">Davao City, PH (GMT+8)</p>
                            <div class="flex items-center gap-2 mt-4">
                                <span class="relative flex h-2 w-2">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                                </span>
                                <span class="text-[10px] font-bold text-green-500 uppercase tracking-widest">Open for Work</span>
                            </div>
                        </div>
                        <div class="text-white/10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                        </div>
                    </div>

                    <!-- Core Stack Card -->
                    <div class="md:col-span-2 bg-[var(--card-bg)] border border-[var(--border-color)] rounded-3xl p-8 hover:border-accent-purple/30 transition duration-500">
                        <h3 class="text-lg font-bold text-white mb-6">Core Stack</h3>
                        <div class="flex flex-wrap items-center gap-8">
                            <div class="flex items-center gap-3 group">
                                <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-accent-purple group-hover:text-white transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3v12"></path><path d="M18 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path><path d="M6 21a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path><path d="M15 6a9 9 0 0 0-9 9"></path></svg>
                                </div>
                                <span class="text-xs font-bold text-white/50 uppercase tracking-widest">PHP</span>
                            </div>
                            <div class="flex items-center gap-3 group">
                                <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-accent-pink group-hover:text-white transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                </div>
                                <span class="text-xs font-bold text-white/50 uppercase tracking-widest">Tailwind</span>
                            </div>
                            <div class="flex items-center gap-3 group">
                                <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-blue-400 group-hover:text-white transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>
                                </div>
                                <span class="text-xs font-bold opacity-50 uppercase tracking-widest">MySQL</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="edu" class="py-24 md:py-32 px-6 md:px-[9%] border-t border-[var(--border-color)]">
            <div class="max-w-7xl mx-auto w-full space-y-16">
                <div class="text-center space-y-2">
                    <p class="text-accent-purple text-xs font-bold tracking-[0.4em] uppercase">My Journey</p>
                    <h2 class="text-4xl md:text-5xl font-bold text-white">Education & <span class="text-gradient">Experience</span></h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    @foreach($experiences as $exp)
                    <div class="group relative bg-[var(--card-bg)] border border-[var(--border-color)] rounded-[2.5rem] p-10 hover:border-{{ $exp->color }}/50 hover:shadow-[0_0_50px_rgba(139,92,246,0.1)] transition-all duration-700 overflow-hidden">
                        <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-{{ $exp->color }}/5 rounded-full blur-3xl group-hover:bg-{{ $exp->color }}/10 transition-colors duration-700"></div>
                        
                        <div class="relative z-10 space-y-10">
                            <div class="flex justify-between items-start">
                                <span class="inline-block px-5 py-2 rounded-2xl bg-{{ $exp->color }}/10 border border-{{ $exp->color }}/10 text-[10px] font-black text-{{ $exp->color }} uppercase tracking-[0.3em]">{{ $exp->year }}</span>
                                <div class="w-14 h-14 bg-white/5 rounded-2xl flex items-center justify-center text-white/20 group-hover:text-{{ $exp->color }} group-hover:bg-{{ $exp->color }}/10 transition-all duration-700">
                                    {!! $exp->icon !!}
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="space-y-1">
                                    <h3 class="text-2xl font-bold group-hover:text-{{ $exp->color }} transition duration-500">{{ $exp->role }}</h3>
                                    <p class="opacity-30 text-xs font-bold uppercase tracking-[0.2em]">{{ $exp->company }}</p>
                                </div>
                                <p class="opacity-50 text-sm leading-relaxed">{{ $exp->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Certificates Section -->
        <section id="certs" class="py-24 md:py-32 px-6 md:px-[9%] border-t border-white/5 overflow-hidden">
            <div class="max-w-7xl mx-auto w-full space-y-20">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-8">
                    <div class="space-y-4">
                        <p class="text-accent-pink text-xs font-bold tracking-[0.5em] uppercase">Verified Expertise</p>
                        <h2 class="text-4xl md:text-6xl font-black text-white leading-none">The <span class="text-gradient">Vault</span></h2>
                    </div>
                    <p class="text-white/30 text-sm max-w-xs font-medium leading-relaxed">A collection of industry-recognized certifications and technical validations.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($certificates as $cert)
                    <div class="group relative bg-[var(--card-bg)] border border-[var(--border-color)] rounded-[2rem] p-4 hover:border-{{ $cert->color }}/30 transition-all duration-700 cursor-pointer overflow-hidden" onclick="openZoom('{{ $cert->image }}', '{{ $cert->title }}')">
                        <!-- Decorative Background Gradient -->
                        <div class="absolute inset-0 bg-{{ $cert->color }}/0 group-hover:bg-{{ $cert->color }}/5 transition-colors duration-700"></div>
                        
                        <div class="relative space-y-4">
                            <!-- Certificate Image Container -->
                            <div class="relative aspect-[4/3] rounded-[1.5rem] overflow-hidden border border-white/5 group-hover:border-{{ $cert->color }}/20 transition-all duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                                <img src="{{ $cert->image }}" alt="{{ $cert->title }}" class="w-full h-full object-cover scale-110 group-hover:scale-100 transition duration-1000">
                                
                                <div class="absolute inset-0 flex items-center justify-center z-20 opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0 transition-all duration-700">
                                    <div class="w-14 h-14 rounded-full bg-white/20 backdrop-blur-xl flex items-center justify-center text-white scale-90 group-hover:scale-100 hover:bg-{{ $cert->color }} transition duration-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h6v6"></path><path d="M10 14L21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path></svg>
                                    </div>
                                </div>
                            </div>

                            <div class="px-4 pb-4 space-y-4">
                                <div class="flex justify-between items-center">
                                    <span class="text-[10px] font-black text-{{ $cert->color }} uppercase tracking-[0.2em]">{{ $cert->year }}</span>
                                    <span class="w-1.5 h-1.5 rounded-full bg-{{ $cert->color }}/40 group-hover:scale-150 transition-transform duration-700 shadow-[0_0_10px_{{ $cert->color }}]"></span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold group-hover:text-{{ $cert->color }} transition duration-500 line-clamp-1">{{ $cert->title }}</h3>
                                    <p class="opacity-30 text-[8px] font-bold uppercase tracking-widest">{{ $cert->administered_by }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="skills" class="py-24 md:py-32 px-6 md:px-[9%] border-t border-white/5">
            <div class="max-w-7xl mx-auto w-full space-y-16">
                <div class="text-center space-y-2">
                    <p class="text-accent-pink text-xs font-bold tracking-[0.4em] uppercase">Tech Stack</p>
                    <h2 class="text-4xl md:text-5xl font-bold text-white">Tools & <span class="text-gradient">Workflow</span></h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($tools as $tool)
                    <div onclick="openToolModal({{ json_encode($tool) }})" class="group bg-[var(--card-bg)] border border-[var(--border-color)] p-8 rounded-3xl flex items-center gap-6 hover:border-{{ $tool->color }}/30 transition-all duration-300 cursor-pointer">
                        <div class="w-14 h-14 rounded-2xl bg-{{ $tool->color }}/10 flex items-center justify-center text-{{ $tool->color }} group-hover:bg-{{ $tool->color }} group-hover:text-{{ $tool->color == 'yellow-500' ? 'black' : 'white' }} transition-all duration-300">
                            {!! $tool->icon !!}
                        </div>
                        <div class="space-y-1">
                            <h3 class="font-bold text-lg">{{ $tool->name }}</h3>
                            <p class="opacity-40 text-xs font-bold uppercase tracking-wider">{{ $tool->category }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Projects Section (Selected Works) -->
        <section id="projects" class="py-24 md:py-32 px-6 md:px-[9%] border-t border-white/5">
            <div class="max-w-7xl mx-auto w-full space-y-16">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-8">
                    <div class="space-y-2">
                        <p class="text-accent-purple text-xs font-bold tracking-[0.4em] uppercase">Portfolio</p>
                        <h2 class="text-4xl md:text-5xl font-bold text-white">Selected <span class="text-gradient">Works</span></h2>
                    </div>
                    <a href="#" class="text-sm font-bold text-white/40 hover:text-white transition flex items-center gap-2 group">
                        View All
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 transition"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach($projects as $project)
                    <div class="group relative bg-[var(--card-bg)] border border-[var(--border-color)] rounded-[2rem] overflow-hidden hover:border-accent-purple/30 transition-all duration-500">
                        <div class="aspect-[16/10] overflow-hidden">
                            <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-full object-cover grayscale brightness-75 group-hover:grayscale-0 group-hover:brightness-100 group-hover:scale-105 transition duration-1000">
                        </div>
                        
                        <div class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-black/90 via-black/40 to-transparent">
                            <div class="flex justify-between items-end">
                                <div class="space-y-2">
                                    <h3 class="text-2xl font-bold mb-2">{{ $project->title }}</h3>
                                    <p class="opacity-50 text-sm max-w-md line-clamp-2">{{ $project->description }}</p>
                                </div>
                                <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center text-white backdrop-blur-md group-hover:bg-accent-purple transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


        <!-- Contact Section -->
        <section id="contact" class="py-24 md:py-32 px-6 md:px-[9%] border-t border-white/5 overflow-hidden">
            <div class="max-w-7xl mx-auto w-full space-y-20">
                <div class="text-center space-y-4">
                    <p class="text-accent-purple text-xs font-bold tracking-[0.5em] uppercase">Get In Touch</p>
                    <h2 class="text-5xl md:text-7xl font-black text-white leading-tight">Let's <span class="text-gradient">Connect</span></h2>
                </div>

                <div class="grid lg:grid-cols-12 gap-12">
                    <!-- Left: Info Cards -->
                    <div class="lg:col-span-4 space-y-6">
                        <!-- Email Card -->
                        <div class="group relative bg-[var(--card-bg)] border border-[var(--border-color)] rounded-[2rem] p-8 hover:border-accent-purple/50 transition-all duration-500 overflow-hidden">
                            <div class="relative z-10 space-y-6">
                                <div class="w-12 h-12 rounded-2xl bg-accent-purple/10 flex items-center justify-center text-accent-purple">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-[10px] font-bold text-white/30 uppercase tracking-[0.2em]">Email Resmi</p>
                                    <div class="flex items-center justify-between gap-4">
                                        <h4 id="email-address" class="text-sm font-bold text-white truncate">{{ $profile->email }}</h4>
                                        <button onclick="copyEmail()" class="text-white/20 hover:text-white transition group/copy">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover/copy:scale-110 transition"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Location Card -->
                        <div class="group relative bg-[var(--card-bg)] border border-[var(--border-color)] rounded-[2rem] p-8 hover:border-accent-pink/50 transition-all duration-500 overflow-hidden">
                            <div class="relative z-10 space-y-6">
                                <div class="w-12 h-12 rounded-2xl bg-accent-pink/10 flex items-center justify-center text-accent-pink">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-[10px] font-bold text-white/30 uppercase tracking-[0.2em]">Base Location</p>
                                    <h4 class="text-lg font-bold text-white">{{ $profile->address }}</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Social Cards Grid -->
                        <div class="grid grid-cols-2 gap-4">
                            <a href="https://www.linkedin.com/in/urieljohn-chavez-b9a010398/" target="_blank" class="group bg-[var(--card-bg)] border border-[var(--border-color)] rounded-3xl p-6 flex flex-col items-center gap-3 hover:border-blue-400/50 transition-all duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-20 group-hover:text-blue-400 transition-colors duration-500"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                                <span class="text-[10px] font-bold opacity-40 uppercase tracking-widest">LinkedIn</span>
                            </a>
                            <a href="https://github.com/uriel2203" target="_blank" class="group bg-[var(--card-bg)] border border-[var(--border-color)] rounded-3xl p-6 flex flex-col items-center gap-3 hover:border-white/30 transition-all duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-20 group-hover:text-white transition-colors duration-500"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                                <span class="text-[10px] font-bold opacity-40 uppercase tracking-widest">GitHub</span>
                            </a>
                            <a href="https://www.facebook.com/urieljohn.chavez.9" target="_blank" class="group bg-[var(--card-bg)] border border-[var(--border-color)] rounded-3xl p-6 flex flex-col items-center gap-3 hover:border-blue-600/50 transition-all duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-20 group-hover:text-blue-600 transition-colors duration-500"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                                <span class="text-[10px] font-bold opacity-40 uppercase tracking-widest">Facebook</span>
                            </a>
                            <a href="https://www.instagram.com/urieljohn_c/" target="_blank" class="group bg-[var(--card-bg)] border border-[var(--border-color)] rounded-3xl p-6 flex flex-col items-center gap-3 hover:border-accent-pink/50 transition-all duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-20 group-hover:text-accent-pink transition-colors duration-500"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                                <span class="text-[10px] font-bold opacity-40 uppercase tracking-widest">Instagram</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right: Contact Form -->
                    <div class="lg:col-span-8 bg-[var(--card-bg)] border border-[var(--border-color)] rounded-[3rem] p-8 md:p-12 space-y-10 relative overflow-hidden backdrop-blur-xl">
                        <div class="absolute top-0 right-0 p-8 flex gap-2">
                             <div class="w-2.5 h-2.5 rounded-full bg-red-500/50"></div>
                             <div class="w-2.5 h-2.5 rounded-full bg-yellow-500/50"></div>
                             <div class="w-2.5 h-2.5 rounded-full bg-green-500/50"></div>
                        </div>

                        <div class="space-y-4">
                            <h3 class="text-3xl font-bold tracking-tight">Send Message<span class="text-accent-purple animate-pulse">_</span></h3>
                        </div>

                        <form id="contact-form" action="https://formsubmit.co/ajax/urieljohnchavez@gmail.com" method="POST" class="grid md:grid-cols-2 gap-6">
                            <!-- FormSubmit Configuration -->
                            <input type="hidden" name="_subject" value="New Portfolio Message!">
                            <input type="hidden" name="_template" value="table">
                            <input type="hidden" name="_captcha" value="false">

                            <div class="space-y-2">
                                <input type="text" name="name" placeholder="Name" required class="w-full bg-[var(--card-bg)] border border-[var(--border-color)] rounded-2xl px-6 py-4 text-[var(--text-main)] text-sm focus:outline-none focus:border-accent-purple/50 transition duration-300 placeholder:opacity-20">
                            </div>
                            <div class="space-y-2">
                                <input type="email" name="email" placeholder="Email Address" required class="w-full bg-[var(--card-bg)] border border-[var(--border-color)] rounded-2xl px-6 py-4 text-[var(--text-main)] text-sm focus:outline-none focus:border-accent-purple/50 transition duration-300 placeholder:opacity-20">
                            </div>
                            <div class="md:col-span-2 space-y-2">
                                <div class="relative">
                                    <select name="category" required class="w-full bg-[var(--card-bg)] border border-[var(--border-color)] rounded-2xl px-6 py-4 text-[var(--text-main)] opacity-30 text-sm focus:outline-none focus:border-accent-purple/50 transition duration-300 appearance-none">
                                        <option value="" disabled selected>Select Project Type</option>
                                        <option value="web">Web Development</option>
                                        <option value="infrastructure">IT Infrastructure</option>
                                        <option value="consulting">Consulting</option>
                                    </select>
                                    <div class="absolute right-6 top-1/2 -translate-y-1/2 pointer-events-none text-white/20">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-2 space-y-2">
                                <textarea name="message" placeholder="Tell me about your project..." rows="5" required class="w-full bg-[var(--card-bg)] border border-[var(--border-color)] rounded-2xl px-6 py-4 text-[var(--text-main)] text-sm focus:outline-none focus:border-accent-purple/50 transition duration-300 placeholder:opacity-20 resize-none"></textarea>
                            </div>
                            <div class="md:col-span-2">
                                <button type="submit" class="w-full md:w-fit group h-14 px-10 bg-accent-purple text-white rounded-2xl font-black text-xs uppercase tracking-widest hover:scale-105 active:scale-95 transition-all duration-300 flex items-center justify-center gap-3">
                                    Send Message
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="translate-x-0 group-hover:translate-x-1 transition"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-32 px-6 overflow-hidden relative">
            <div class="absolute inset-0 bg-gradient-to-b from-accent-purple/5 to-transparent"></div>
            <div class="max-w-7xl mx-auto w-full relative z-10 text-center space-y-10">
                <p class="text-white/30 text-[10px] font-bold tracking-[0.5em] uppercase">What's Next?</p>
                <div class="space-y-4">
                    <h2 class="text-5xl md:text-8xl font-black text-white leading-tight">Let's build something <br> <span class="text-gradient">legendary together.</span></h2>
                </div>
                <div class="pt-6">
                    <a href="mailto:{{ $profile->email }}" class="group relative inline-flex items-center gap-4 text-xl md:text-3xl font-bold text-white hover:text-accent-pink transition-colors duration-500">
                        {{ $profile->email }}
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-white/20 group-hover:text-white group-hover:bg-accent-pink transition-all duration-500">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                        </div>
                        <div class="absolute -bottom-2 left-0 w-full h-px bg-white/10 group-hover:bg-accent-pink transition-colors duration-500"></div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Redesigned Footer -->
        <footer class="py-16 px-[9%] border-t border-white/5">
            <div class="max-w-7xl mx-auto w-full space-y-16">
                <div class="flex flex-col md:flex-row justify-between items-center gap-12">
                    <!-- Brand -->
                    <div class="flex flex-col items-center md:items-start leading-none">
                        <a href="#" class="text-2xl font-bold text-white flex items-center gap-1">
                            <span class="text-accent-pink">&lt;</span>JohnDev<span class="text-accent-pink">/&gt;</span>
                        </a>
                        <p class="opacity-30 text-[8px] tracking-[0.3em] font-bold text-white/50 mt-3 uppercase">Pioneering Technical solutions</p>
                    </div>

                    <!-- NavLinks -->
                    <div class="flex flex-wrap justify-center gap-x-10 gap-y-4">
                        <a href="#home" class="text-[10px] font-bold opacity-40 hover:opacity-100 transition uppercase tracking-widest text-white">Home</a>
                        <a href="#about" class="text-[10px] font-bold opacity-40 hover:opacity-100 transition uppercase tracking-widest text-white">About</a>
                        <a href="#projects" class="text-[10px] font-bold opacity-40 hover:opacity-100 transition uppercase tracking-widest text-white">Projects</a>
                        <a href="#contact" class="text-[10px] font-bold opacity-40 hover:opacity-100 transition uppercase tracking-widest text-white">Contact</a>
                    </div>

                    <!-- Small Socials -->
                    <div class="flex items-center gap-4">
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-white/30 hover:text-white hover:bg-white/10 transition duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-white/30 hover:text-white hover:bg-white/10 transition duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-white/30 hover:text-white hover:bg-white/10 transition duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        </a>
                    </div>
                </div>

                <div class="pt-16 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
                    <p class="opacity-20 text-[10px] font-bold tracking-widest uppercase text-white">© {{ date('Y') }} JohnDev. Built with ❤️ & Code.</p>
                    <div class="flex items-center gap-8">
                        <div class="flex items-center gap-2">
                            <span class="opacity-20 text-[10px] font-bold tracking-widest uppercase text-white">Local time:</span>
                            <span class="opacity-100 text-[10px] font-bold tracking-widest uppercase text-white" id="local-time">--:-- --</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-green-500 shadow-[0_0_10px_#22c55e]"></span>
                            <span class="text-white text-[10px] font-bold tracking-widest uppercase">Online Status</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Certificate Zoom Modal -->
        <div id="certificateZoom" class="fixed inset-0 z-[150] hidden flex flex-col items-center justify-center p-4">
            <div class="absolute inset-0 bg-black/95 backdrop-blur-xl" onclick="closeZoom()"></div>
            
            <!-- Drive-style Header -->
            <div class="relative w-full max-w-7xl flex items-center justify-between px-8 py-6 z-[160] translate-y-[-100%] animate-slide-down">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-accent-pink">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
                    </div>
                    <div>
                        <h4 id="zoomTitle" class="text-sm font-bold text-white tracking-wide">Certificate_Preview.jpg</h4>
                        <p class="text-[8px] text-white/30 uppercase tracking-[0.2em]">Verified Credential System</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-4">
                    <button onclick="closeZoom()" class="w-10 h-10 rounded-full bg-white/5 hover:bg-white/10 flex items-center justify-center text-white/50 hover:text-white transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
            </div>

            <div class="relative max-w-5xl w-full h-[75vh] flex items-center justify-center z-[160]">
                <img id="zoomedImage" src="" alt="Certificate" class="max-w-full max-h-full object-contain shadow-[0_30px_100px_rgba(0,0,0,0.5)] rounded-2xl animate-zoom">
            </div>

            <!-- Bottom Action Bar -->
            <div class="relative z-[160] mt-10 translate-y-[100%] animate-slide-up">
                <a id="zoomDownload" href="#" download class="px-8 py-3 bg-white/5 border border-white/10 rounded-2xl text-[10px] font-black text-white hover:bg-white hover:text-black transition duration-500 uppercase tracking-widest flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    Download Certificate
                </a>
            </div>
        </div>

        <!-- Tool Detail Modal -->
        <div id="toolModal" class="fixed inset-0 z-[200] hidden flex items-center justify-center p-4">
            <div class="absolute inset-0 bg-black/80 backdrop-blur-md" onclick="closeToolModal()"></div>
            <div class="relative bg-[var(--primary-bg)] border border-[var(--border-color)] rounded-[2.5rem] w-full max-w-2xl overflow-hidden shadow-2xl animate-zoom">
                <!-- Close Button -->
                <button onclick="closeToolModal()" class="absolute top-8 right-8 text-white/40 hover:text-white transition group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>

                <div class="p-8 md:p-12 space-y-10">
                    <!-- Header -->
                    <div class="flex items-center gap-6">
                        <div id="modalIcon" class="w-16 h-16 rounded-2xl flex items-center justify-center shadow-lg">
                            <!-- Icon will be injected here -->
                        </div>
                        <div>
                            <h3 id="modalName" class="text-3xl font-bold tracking-tight"></h3>
                            <p id="modalCategory" class="text-xs font-bold opacity-40 uppercase tracking-[0.2em] mt-1"></p>
                        </div>
                    </div>

                    <!-- Tabs -->
                    <div class="flex border-b border-[var(--border-color)] relative">
                        <button onclick="switchToolTab('overview')" id="tab-overview" class="flex-1 py-4 text-sm font-bold tracking-widest uppercase transition relative group">
                            Overview
                            <div class="absolute bottom-0 left-0 w-full h-[2px] bg-accent-purple shadow-[0_0_8px_rgba(139,92,246,0.8)] scale-x-100 transition-transform duration-300 origin-left" id="tab-indicator-overview"></div>
                        </button>
                        <button onclick="switchToolTab('certificate')" id="tab-certificate" class="flex-1 py-4 text-sm font-bold tracking-widest uppercase transition relative group opacity-40 hover:opacity-100">
                            Certificate
                            <div class="absolute bottom-0 left-0 w-full h-[2px] bg-accent-purple shadow-[0_0_8px_rgba(139,92,246,0.8)] scale-x-0 transition-transform duration-300 origin-left" id="tab-indicator-certificate"></div>
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="min-h-[200px]">
                        <!-- Overview Content -->
                        <div id="content-overview" class="space-y-8">
                            <p id="modalDescription" class="opacity-60 leading-relaxed text-sm md:text-base"></p>
                            
                            <div class="space-y-4">
                                <h4 class="text-[10px] font-black opacity-30 uppercase tracking-[0.3em]">Key Proficiency</h4>
                                <div id="modalProficiencies" class="flex flex-wrap gap-3">
                                    <!-- Badges will be injected here -->
                                </div>
                            </div>
                        </div>

                        <!-- Certificate Content -->
                        <div id="content-certificate" class="hidden space-y-6">
                            <div class="bg-white/5 border border-white/5 rounded-2xl p-6 flex items-center justify-between group hover:border-accent-purple/30 transition">
                                <div class="space-y-1">
                                    <h5 id="modalCertName" class="font-bold"></h5>
                                    <p class="text-[10px] opacity-30 uppercase tracking-widest">Verified Credential</p>
                                </div>
                                <div class="w-10 h-10 rounded-full bg-accent-purple/10 flex items-center justify-center text-accent-purple group-hover:bg-accent-purple group-hover:text-white transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 22 3 22 10"></polyline><line x1="10" y1="14" x2="22" y2="2"></line></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Typing Effect
            const typingText = document.getElementById('typing-text');
            const words = ["Problem Solver", "UI/UX Designer", "Software Architect"];
            let wordIndex = 0;
            let charIndex = 0;
            let isDeleting = false;
            let typeSpeed = 100;

            function type() {
                const currentWord = words[wordIndex];
                if (isDeleting) {
                    typingText.textContent = currentWord.substring(0, charIndex - 1);
                    charIndex--;
                    typeSpeed = 50;
                } else {
                    typingText.textContent = currentWord.substring(0, charIndex + 1);
                    charIndex++;
                    typeSpeed = 150;
                }

                if (!isDeleting && charIndex === currentWord.length) {
                    isDeleting = true;
                    typeSpeed = 1500; // Pause at the end
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    wordIndex = (wordIndex + 1) % words.length;
                    typeSpeed = 500;
                }

                setTimeout(type, typeSpeed);
            }

            document.addEventListener('DOMContentLoaded', type);

            function toggleMenu() {
                const menu = document.getElementById('mobile-menu');
                const isOpen = !menu.classList.contains('-translate-y-full');
                
                if (isOpen) {
                    menu.classList.add('-translate-y-full', 'opacity-0', 'pointer-events-none');
                } else {
                    menu.classList.remove('-translate-y-full', 'opacity-0', 'pointer-events-none');
                }
            }

            function openToolModal(tool) {
                const modal = document.getElementById('toolModal');
                const name = document.getElementById('modalName');
                const category = document.getElementById('modalCategory');
                const icon = document.getElementById('modalIcon');
                const description = document.getElementById('modalDescription');
                const proficiencies = document.getElementById('modalProficiencies');
                const certName = document.getElementById('modalCertName');

                name.textContent = tool.name;
                category.textContent = tool.category;
                icon.innerHTML = tool.icon;
                
                // Color specific styling
                icon.className = `w-16 h-16 rounded-2xl flex items-center justify-center shadow-lg bg-${tool.color}/10 text-${tool.color}`;
                if(tool.color === 'yellow-500') icon.classList.add('text-yellow-500'); // Ensure visibility

                description.textContent = tool.description;
                certName.textContent = tool.certificate;

                // Proficiencies
                proficiencies.innerHTML = '';
                tool.proficiencies.forEach(p => {
                    const span = document.createElement('span');
                    span.className = `px-4 py-2 bg-white/5 border border-white/5 rounded-xl text-[10px] font-bold text-white/50 uppercase tracking-widest hover:text-white hover:border-white/10 transition`;
                    span.textContent = p;
                    proficiencies.appendChild(span);
                });

                // Reset tabs
                switchToolTab('overview');

                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeToolModal() {
                const modal = document.getElementById('toolModal');
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }

            function switchToolTab(tab) {
                const overviewContent = document.getElementById('content-overview');
                const certContent = document.getElementById('content-certificate');
                const overviewIndicator = document.getElementById('tab-indicator-overview');
                const certIndicator = document.getElementById('tab-indicator-certificate');
                const overviewText = document.getElementById('tab-overview');
                const certText = document.getElementById('tab-certificate');

                if (tab === 'overview') {
                    overviewContent.classList.remove('hidden');
                    certContent.classList.add('hidden');
                    overviewIndicator.classList.replace('scale-x-0', 'scale-x-100');
                    certIndicator.classList.replace('scale-x-100', 'scale-x-0');
                    overviewText.classList.replace('text-white/40', 'text-white');
                    certText.classList.replace('text-white', 'text-white/40');
                } else {
                    overviewContent.classList.add('hidden');
                    certContent.classList.remove('hidden');
                    overviewIndicator.classList.replace('scale-x-100', 'scale-x-0');
                    certIndicator.classList.replace('scale-x-0', 'scale-x-100');
                    overviewText.classList.replace('text-white', 'text-white/40');
                    certText.classList.replace('text-white/40', 'text-white');
                }
            }

            function openZoom(image, title) {
                const modal = document.getElementById('certificateZoom');
                const zoomedImg = document.getElementById('zoomedImage');
                const zoomTitle = document.getElementById('zoomTitle');
                const zoomDownload = document.getElementById('zoomDownload');

                zoomedImg.src = image;
                zoomTitle.textContent = title + ".jpg";
                zoomDownload.href = image;

                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeZoom() {
                const modal = document.getElementById('certificateZoom');
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }

            function copyEmail() {
                const emailAddress = document.getElementById('email-address').textContent;
                navigator.clipboard.writeText(emailAddress).then(() => {
                    const button = document.querySelector('button[onclick="copyEmail()"]');
                    const originalIcon = button.innerHTML;
                    button.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>';
                    setTimeout(() => {
                        button.innerHTML = originalIcon;
                    }, 2000);
                });
            }

            function updateTime() {
                const now = new Date();
                const timeString = now.toLocaleTimeString('en-US', { 
                    hour12: true, 
                    hour: '2-digit', 
                    minute: '2-digit'
                });
                const timeElement = document.getElementById('local-time');
                if (timeElement) timeElement.textContent = timeString + ' PHT';
            }

            setInterval(updateTime, 1000);
            updateTime();

            // Contact Form AJAX Submission
            document.getElementById('contact-form').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const form = this;
                const button = form.querySelector('button[type="submit"]');
                const originalContent = button.innerHTML;
                
                // Set sending state
                button.disabled = true;
                button.innerHTML = `
                    Sending...
                    <svg class="animate-spin" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a9 9 0 1 1-6.219-8.56"></path></svg>
                `;

                const formData = new FormData(form);
                const data = {};
                formData.forEach((value, key) => data[key] = value);

                fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(result => {
                    // Success state
                    button.innerHTML = `
                        Message Sent!
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    `;
                    form.reset();
                    
                    setTimeout(() => {
                        button.disabled = false;
                        button.innerHTML = originalContent;
                    }, 3000);
                })
                .catch(error => {
                    console.error('Error:', error);
                    button.disabled = false;
                    button.innerHTML = originalContent;
                    alert('Something went wrong. Please try again.');
                });
            });

            function toggleTheme() {
                const html = document.documentElement;
                const icon = document.getElementById('theme-icon');
                const isLight = html.classList.toggle('light');
                
                localStorage.setItem('theme', isLight ? 'light' : 'dark');
                
                if (isLight) {
                    icon.innerHTML = '<path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>';
                    document.getElementById('theme-toggle').classList.replace('text-white', 'text-slate-900');
                } else {
                    icon.innerHTML = '<circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="18.36" x2="5.64" y2="19.78"></line><line x1="18.36" y1="4.22" x2="19.78" y2="5.64"></line>';
                    document.getElementById('theme-toggle').classList.replace('text-slate-900', 'text-white');
                }
            }

            // Initialize theme
            document.addEventListener('DOMContentLoaded', () => {
                const savedTheme = localStorage.getItem('theme');
                if (savedTheme === 'light') {
                    toggleTheme();
                }
            });

            document.getElementById('menu-btn').addEventListener('click', toggleMenu);
        </script>

        <style>
            .custom-scrollbar::-webkit-scrollbar {
                width: 6px;
            }
            .custom-scrollbar::-webkit-scrollbar-track {
                background: rgba(255, 255, 255, 0.02);
                border-radius: 10px;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: rgba(0, 238, 255, 0.2);
                border-radius: 10px;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                background: rgba(0, 238, 255, 0.4);
            }
        </style>
    </body>
</html>
