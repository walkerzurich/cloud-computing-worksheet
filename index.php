<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Agus Virgianto | Informatics Student UII</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }
        
        .progress-bar {
            height: 8px;
            border-radius: 4px;
            background-color: #e2e8f0;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            border-radius: 4px;
            background-color: #3b82f6;
            transition: width 1s ease-in-out;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .section-title {
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 50%;
            height: 3px;
            background-color: #3b82f6;
        }
        
        .dark-mode {
            background-color: #1e293b;
            color: #f8fafc;
        }
        
        .dark-mode .bg-white {
            background-color: #334155 !important;
        }
        
        .dark-mode .text-gray-800 {
            color: #f8fafc !important;
        }
        
        .dark-mode .text-gray-600 {
            color: #cbd5e1 !important;
        }
    </style>
</head>
<body class="text-gray-800">
    <!-- Dark Mode Toggle -->
    <button id="darkModeToggle" class="fixed top-4 right-4 z-50 p-2 rounded-full bg-blue-500 text-white shadow-lg">
        <i class="fas fa-moon"></i>
    </button>

    <!-- Header Section -->
    <header class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-16">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="w-32 h-32 md:w-40 md:h-40 rounded-full overflow-hidden border-4 border-white shadow-lg mb-6 md:mb-0 md:mr-8">
                <img src="https://avatars.githubusercontent.com/u/127306176?v=4" 
                     alt="Profile Photo" class="w-full h-full object-cover">
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-bold mb-2">Muhammad Agus Virgianto</h1>
                <p class="text-xl mb-4">Informatics Student at Universitas Islam Indonesia (22523159)</p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded-full text-sm">HTML/CSS</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded-full text-sm">JavaScript</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded-full text-sm">Python</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded-full text-sm">Database</span>
                    <span class="bg-white bg-opacity-20 px-3 py-1 rounded-full text-sm">UI/UX</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column -->
            <div class="lg:col-span-2 space-y-8">
                <!-- About Section -->
                <section class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 card-hover">
                    <h2 class="text-2xl font-bold mb-4 section-title">About Me</h2>
                    <p class="text-gray-600 mb-4">
                        I am a passionate Informatics student at Universitas Islam Indonesia with a strong interest in web development, 
                        software engineering, and data science. Currently in my 3rd year, I'm actively expanding my knowledge through 
                        coursework and personal projects.
                    </p>
                    <p class="text-gray-600">
                        My goal is to become a full-stack developer with expertise in both front-end and back-end technologies. 
                        I enjoy solving complex problems and creating user-friendly applications that make a positive impact.
                    </p>
                </section>

                <!-- Education Section -->
                <section class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 card-hover">
                    <h2 class="text-2xl font-bold mb-6 section-title">Education</h2>
                    
                    <div class="space-y-6">
                        <div class="flex">
                            <div class="mr-4">
                                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                                    <i class="fas fa-graduation-cap text-blue-500 text-xl"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Universitas Islam Indonesia</h3>
                                <p class="text-gray-600">Bachelor of Informatics | 2022 - Present</p>
                                <p class="text-gray-600 mt-2">
                                    Relevant coursework: Data Structures, Algorithms, Database Systems, Web Programming, 
                                    Software Engineering, Artificial Intelligence.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="mr-4">
                                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                                    <i class="fas fa-school text-blue-500 text-xl"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">SMA Negeri 1 Mimika</h3>
                                <p class="text-gray-600">Science Major | 2019 - 2022</p>
                                <p class="text-gray-600 mt-2">
                                    Graduated with honors. Participated in computer science olympiad training.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Projects Section -->
                <section class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 card-hover">
                    <h2 class="text-2xl font-bold mb-6 section-title">Projects</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <div class="h-40 bg-gradient-to-r from-blue-400 to-indigo-500 flex items-center justify-center">
                                <i class="fas fa-laptop-code text-white text-5xl"></i>
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2">E-Learning Platform</h3>
                                <p class="text-gray-600 text-sm mb-3">
                                    A web-based learning management system built with React.js and Node.js
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">React</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">Node.js</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">MongoDB</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <div class="h-40 bg-gradient-to-r from-purple-400 to-pink-500 flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-white text-5xl"></i>
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2">Task Management App</h3>
                                <p class="text-gray-600 text-sm mb-3">
                                    Mobile application for personal task management using Flutter
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">Flutter</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">Firebase</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">Dart</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <div class="h-40 bg-gradient-to-r from-green-400 to-teal-500 flex items-center justify-center">
                                <i class="fas fa-chart-line text-white text-5xl"></i>
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2">Data Visualization Dashboard</h3>
                                <p class="text-gray-600 text-sm mb-3">
                                    Interactive dashboard for COVID-19 data analysis using Python
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">Python</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">Pandas</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">Plotly</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <div class="h-40 bg-gradient-to-r from-yellow-400 to-orange-500 flex items-center justify-center">
                                <i class="fas fa-store text-white text-5xl"></i>
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2">E-Commerce Website</h3>
                                <p class="text-gray-600 text-sm mb-3">
                                    Online store prototype with payment gateway integration
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">Laravel</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">MySQL</span>
                                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">Bootstrap</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
            <!-- Right Column -->
            <div class="space-y-8">
                <!-- Contact Section -->
                <section class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 card-hover">
                    <h2 class="text-2xl font-bold mb-6 section-title">Contact</h2>
                    
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-blue-500"></i>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm">Email</p>
                                <p class="font-medium">muhammadagusvirgianto@gmail.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                <i class="fas fa-phone-alt text-blue-500"></i>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm">Phone</p>
                                <p class="font-medium">+62 812 3456 7890</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-blue-500"></i>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm">Location</p>
                                <p class="font-medium">Yogyakarta, Indonesia</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                <i class="fab fa-github text-blue-500"></i>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm">GitHub</p>
                                <a href="https://github.com/walkerzurich" class="font-medium text-blue-500 hover:underline">github.com/walkerzurich</a>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                <i class="fab fa-linkedin-in text-blue-500"></i>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm">LinkedIn</p>
                                <a href="https://linkedin.com/in/muhammadagusvirgianto" class="font-medium text-blue-500 hover:underline">linkedin.com/in/muhammadagusvirgianto</a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Skills Section -->
                <section class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 card-hover">
                    <h2 class="text-2xl font-bold mb-6 section-title">Skills</h2>
                    
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">HTML/CSS</span>
                                <span>85%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 85%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">JavaScript</span>
                                <span>75%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 75%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">Python</span>
                                <span>80%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 80%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">Java</span>
                                <span>70%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 70%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">SQL</span>
                                <span>78%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 78%"></div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Languages Section -->
                <section class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 card-hover">
                    <h2 class="text-2xl font-bold mb-6 section-title">Languages</h2>
                    
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">Indonesian</span>
                                <span>Native</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 100%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">English</span>
                                <span>30%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 30%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-medium">Japanese</span>
                                <span>5%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 5%"></div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Interests Section -->
                <section class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 card-hover">
                    <h2 class="text-2xl font-bold mb-4 section-title">Interests</h2>
                    
                    <div class="flex flex-wrap gap-3">
                        <div class="flex items-center bg-blue-50 px-3 py-2 rounded-full">
                            <i class="fas fa-code text-blue-500 mr-2"></i>
                            <span>Coding</span>
                        </div>
                        <div class="flex items-center bg-blue-50 px-3 py-2 rounded-full">
                            <i class="fas fa-book text-blue-500 mr-2"></i>
                            <span>Reading</span>
                        </div>
                        <div class="flex items-center bg-blue-50 px-3 py-2 rounded-full">
                            <i class="fas fa-music text-blue-500 mr-2"></i>
                            <span>Music</span>
                        </div>
                        <div class="flex items-center bg-blue-50 px-3 py-2 rounded-full">
                            <i class="fas fa-plane text-blue-500 mr-2"></i>
                            <span>Travel</span>
                        </div>
                        <div class="flex items-center bg-blue-50 px-3 py-2 rounded-full">
                            <i class="fas fa-gamepad text-blue-500 mr-2"></i>
                            <span>Gaming</span>
                        </div>
                        <div class="flex items-center bg-blue-50 px-3 py-2 rounded-full">
                            <i class="fas fa-camera text-blue-500 mr-2"></i>
                            <span>Photography</span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-100 py-8">
        <div class="container mx-auto px-4 text-center">
            <p class="text-gray-600 mb-4">© 2025 Muhammad Agus Virgianto. All rights reserved.</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="text-gray-600 hover:text-blue-500"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-gray-600 hover:text-blue-400"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-gray-600 hover:text-pink-500"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </footer>

    <script>
        // Dark mode toggle
        const darkModeToggle = document.getElementById('darkModeToggle');
        const body = document.body;
        
        // Check for saved user preference
        if (localStorage.getItem('darkMode') === 'enabled') {
            body.classList.add('dark-mode');
            darkModeToggle.innerHTML = '<i class="fas fa-sun"></i>';
        }
        
        darkModeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            
            if (body.classList.contains('dark-mode')) {
                localStorage.setItem('darkMode', 'enabled');
                darkModeToggle.innerHTML = '<i class="fas fa-sun"></i>';
            } else {
                localStorage.setItem('darkMode', 'disabled');
                darkModeToggle.innerHTML = '<i class="fas fa-moon"></i>';
            }
        });
        
        // Animate progress bars on scroll
        const progressBars = document.querySelectorAll('.progress-fill');
        
        function animateProgressBars() {
            progressBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = width;
                }, 100);
            });
        }
        
        // Intersection Observer for scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target.classList.contains('progress-fill')) {
                        animateProgressBars();
                    }
                    entry.target.classList.add('animate-fadeIn');
                }
            });
        }, { threshold: 0.1 });
        
        document.querySelectorAll('.progress-fill, .card-hover').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>