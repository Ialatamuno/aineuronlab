<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'AI Neuron Lab'; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Soluciones de inteligencia artificial para automatizar procesos y mejorar la eficiencia de tu negocio'; ?>">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Custom Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#00D9FF',
                        accent: '#8B5CF6',
                        secondary: '#10B981',
                        dark: {
                            900: '#0A0E27',
                            800: '#1A1F3A',
                            700: '#2A2F4A'
                        }
                    },
                    fontFamily: {
                        'display': ['Space Grotesk', 'sans-serif'],
                        'body': ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
    
    <!-- Custom Styles -->
    <style>
        * {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Space Grotesk', sans-serif;
        }
        
        .glass {
            background: rgba(26, 31, 58, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
        
        .gradient-border {
            background: linear-gradient(90deg, #00D9FF 0%, #8B5CF6 50%, #10B981 100%);
        }
        
        .gradient-text {
            background: linear-gradient(90deg, #00D9FF 0%, #8B5CF6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #00D9FF, #8B5CF6);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }
        
        .mobile-menu.active {
            transform: translateX(0);
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-dark-900 text-gray-100">
    
    <!-- Header -->
    <header class="fixed w-full top-0 z-50 glass border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                
                <!-- Logo -->
                <a href="index.php" class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center">
                        <i class="fas fa-brain text-white text-xl"></i>
                    </div>
                    <span class="text-2xl font-bold font-display">
                        <span class="gradient-text">AI</span> Neuron Lab
                    </span>
                </a>
                
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="index.php" class="nav-link <?php echo (isset($current_page) && $current_page == 'inicio') ? 'active text-primary' : 'text-gray-300 hover:text-primary'; ?>">
                        Inicio
                    </a>
                    <a href="servicios.php" class="nav-link <?php echo (isset($current_page) && $current_page == 'servicios') ? 'active text-primary' : 'text-gray-300 hover:text-primary'; ?>">
                        Servicios
                    </a>
                    <a href="contacto.php" class="nav-link <?php echo (isset($current_page) && $current_page == 'contacto') ? 'active text-primary' : 'text-gray-300 hover:text-primary'; ?>">
                        Contacto
                    </a>
                    
                    <!-- CTA Button -->
                    <a href="contacto.php" class="px-6 py-2.5 bg-gradient-to-r from-accent to-primary rounded-lg text-white font-semibold hover:scale-105 transition-transform duration-300 shadow-lg shadow-accent/50">
                        Comenzar Proyecto
                    </a>
                </nav>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-white text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        
        <!-- Gradient Line -->
        <div class="h-1 gradient-border"></div>
    </header>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu fixed top-0 right-0 w-full h-full bg-dark-800 z-40 md:hidden">
        <div class="flex flex-col h-full">
            <!-- Close Button -->
            <div class="flex justify-end p-6">
                <button id="mobile-menu-close" class="text-white text-3xl">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <!-- Mobile Nav Links -->
            <nav class="flex flex-col items-center space-y-8 mt-12">
                <a href="index.php" class="text-2xl <?php echo (isset($current_page) && $current_page == 'inicio') ? 'text-primary' : 'text-gray-300'; ?> hover:text-primary transition-colors">
                    Inicio
                </a>
                <a href="servicios.php" class="text-2xl <?php echo (isset($current_page) && $current_page == 'servicios') ? 'text-primary' : 'text-gray-300'; ?> hover:text-primary transition-colors">
                    Servicios
                </a>
                <a href="contacto.php" class="text-2xl <?php echo (isset($current_page) && $current_page == 'contacto') ? 'text-primary' : 'text-gray-300'; ?> hover:text-primary transition-colors">
                    Contacto
                </a>
                
                <a href="contacto.php" class="mt-8 px-8 py-3 bg-gradient-to-r from-accent to-primary rounded-lg text-white font-semibold text-xl">
                    Comenzar Proyecto
                </a>
            </nav>
        </div>
    </div>
    
    <!-- Mobile Menu Script -->
    <script>
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.add('active');
        });
        
        mobileMenuClose.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
        });
        
        // Close on link click
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
            });
        });
    </script>
    
    <!-- Main Content Wrapper -->
    <main class="pt-20">
