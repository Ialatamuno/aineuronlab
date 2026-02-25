<?php
$page_title = "AI Neuron Lab | Soluciones de Inteligencia Artificial en Paraguay";
$page_description = "Transformamos tu negocio con IA. Deep Learning, Automatización y Chatbots inteligentes desde Paraguay.";
$current_page = "inicio";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Video/GIF with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="images/hero-background.gif" alt="AI Neuron Lab" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-dark-900/80 via-dark-900/60 to-dark-900"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Pretitle -->
        <p class="text-primary font-display text-sm md:text-base tracking-[0.3em] uppercase mb-6 animate-fade-in">
            Inteligencia Artificial • Paraguay
        </p>

        <!-- Main Title -->
        <h1 class="font-display font-bold text-5xl md:text-7xl lg:text-8xl mb-6 leading-tight">
            Transformamos tu<br />
            <span class="gradient-text">negocio con IA</span>
        </h1>

        <!-- Subtitle -->
        <p class="text-xl md:text-2xl text-gray-300 mb-12 font-light max-w-3xl mx-auto">
            Deep Learning <span class="text-primary">•</span> Automatización <span class="text-primary">•</span>
            Chatbots
        </p>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <a href="servicios.php"
                class="px-8 py-4 border-2 border-primary text-primary rounded-lg font-semibold text-lg hover:bg-primary hover:text-white transition-all duration-300 hover:scale-105">
                Ver Servicios
            </a>
            <a href="contacto.php"
                class="px-8 py-4 bg-gradient-to-r from-accent to-primary text-white rounded-lg font-semibold text-lg hover:scale-105 transition-transform duration-300 shadow-lg shadow-accent/50">
                Comenzar Proyecto
            </a>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 animate-float">
            <i class="fas fa-chevron-down text-primary text-2xl"></i>
        </div>
    </div>
</section>

<!-- Intro Section -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- Left Column: Text -->
            <div>
                <p class="text-accent font-display text-sm tracking-widest uppercase mb-4">
                    Bienvenido a AI Neuron Lab
                </p>
                <h2 class="font-display font-bold text-4xl md:text-5xl text-dark-900 mb-6">
                    Innovación en <span class="gradient-text">Inteligencia Artificial</span>
                </h2>

                <div class="space-y-6 text-gray-700 leading-relaxed">
                    <p>
                        En <strong>AI Neuron Lab</strong>, liderados por el Dr. Il Sung Park, transformamos la manera en
                        que las empresas operan mediante soluciones de inteligencia artificial de vanguardia. Desde
                        Paraguay, llevamos tecnología de clase mundial a tu negocio.
                    </p>
                    <p>
                        Nuestra misión es democratizar el acceso a la IA, haciendo que las tecnologías de Deep Learning,
                        automatización y procesamiento de lenguaje natural sean accesibles para empresas de todos los
                        tamaños.
                    </p>
                    <p>
                        Con experiencia comprobada en modelos predictivos, visión por computadora y sistemas
                        conversacionales, ayudamos a nuestros clientes a optimizar procesos, reducir costos y tomar
                        decisiones basadas en datos.
                    </p>
                </div>

                <!-- Stats -->
                <div class="mt-10 flex flex-wrap gap-8">
                    <div class="flex items-center">
                        <div class="w-1 h-16 bg-gradient-to-b from-primary to-accent mr-4"></div>
                        <div>
                            <p class="text-3xl font-bold text-dark-900">5+</p>
                            <p class="text-gray-600 text-sm">Años de experiencia</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1 h-16 bg-gradient-to-b from-accent to-secondary mr-4"></div>
                        <div>
                            <p class="text-3xl font-bold text-dark-900">50+</p>
                            <p class="text-gray-600 text-sm">Proyectos entregados</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1 h-16 bg-gradient-to-b from-secondary to-primary mr-4"></div>
                        <div>
                            <p class="text-3xl font-bold text-dark-900">15+</p>
                            <p class="text-gray-600 text-sm">Tecnologías dominadas</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Image -->
            <div class="relative">
                <img src="C:/Users/Usuario/.gemini/antigravity/brain/f4442f7c-5411-4d09-9a13-698786963466/ambiente_workspace_1770727136993.png"
                    alt="Workspace AI Neuron Lab" class="rounded-2xl shadow-2xl">
                <div
                    class="absolute -bottom-6 -left-6 w-32 h-32 bg-gradient-to-br from-primary/20 to-accent/20 rounded-2xl -z-10">
                </div>
                <div
                    class="absolute -top-6 -right-6 w-32 h-32 bg-gradient-to-br from-accent/20 to-secondary/20 rounded-2xl -z-10">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-24 bg-dark-900 relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-96 h-1 gradient-border"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="font-display font-bold text-4xl md:text-6xl text-white mb-6">
                Nuestros <span class="gradient-text">Servicios</span>
            </h2>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                Soluciones de IA diseñadas para impulsar tu negocio al siguiente nivel
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Service 1: Deep Learning -->
            <div
                class="group bg-dark-800 rounded-xl overflow-hidden border-l-4 border-primary hover:border-accent transition-all duration-300 hover:scale-105">
                <div class="aspect-square overflow-hidden">
                    <img src="C:/Users/Usuario/.gemini/antigravity/brain/f4442f7c-5411-4d09-9a13-698786963466/servicio_deeplearning_1770727153888.png"
                        alt="Deep Learning"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <span
                        class="inline-block px-3 py-1 bg-primary/20 text-primary text-xs font-semibold rounded-full mb-3">
                        POPULAR
                    </span>
                    <h3 class="font-display font-bold text-2xl text-white mb-3">Deep Learning</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Modelos de aprendizaje profundo personalizados para tus necesidades específicas. Redes
                        neuronales avanzadas para predicción, clasificación y análisis.
                    </p>
                </div>
            </div>

            <!-- Service 2: Automation -->
            <div
                class="group bg-dark-800 rounded-xl overflow-hidden border-l-4 border-accent hover:border-primary transition-all duration-300 hover:scale-105">
                <div class="aspect-square overflow-hidden">
                    <img src="C:/Users/Usuario/.gemini/antigravity/brain/f4442f7c-5411-4d09-9a13-698786963466/servicio_automation_1770727168165.png"
                        alt="Automatización"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <span
                        class="inline-block px-3 py-1 bg-accent/20 text-accent text-xs font-semibold rounded-full mb-3">
                        RECOMENDADO
                    </span>
                    <h3 class="font-display font-bold text-2xl text-white mb-3">Automatización</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Automatiza procesos repetitivos con RPA e IA. Optimiza flujos de trabajo y libera tiempo valioso
                        para tareas estratégicas.
                    </p>
                </div>
            </div>

            <!-- Service 3: Chatbots -->
            <div
                class="group bg-dark-800 rounded-xl overflow-hidden border-l-4 border-secondary hover:border-accent transition-all duration-300 hover:scale-105">
                <div class="aspect-square overflow-hidden">
                    <img src="C:/Users/Usuario/.gemini/antigravity/brain/f4442f7c-5411-4d09-9a13-698786963466/servicio_chatbot_1770727184839.png"
                        alt="Chatbots"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <span
                        class="inline-block px-3 py-1 bg-secondary/20 text-secondary text-xs font-semibold rounded-full mb-3">
                        NUEVO
                    </span>
                    <h3 class="font-display font-bold text-2xl text-white mb-3">Chatbots Inteligentes</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Asistentes conversacionales 24/7 con IA. Mejora la atención al cliente con bots que entienden y
                        resuelven problemas reales.
                    </p>
                </div>
            </div>

            <!-- Service 4: Analytics -->
            <div
                class="group bg-dark-800 rounded-xl overflow-hidden border-l-4 border-primary hover:border-secondary transition-all duration-300 hover:scale-105">
                <div class="aspect-square overflow-hidden bg-dark-700 flex items-center justify-center">
                    <i class="fas fa-chart-line text-6xl text-primary"></i>
                </div>
                <div class="p-6">
                    <h3 class="font-display font-bold text-2xl text-white mb-3">Analítica Predictiva</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Anticipa tendencias y comportamientos con modelos predictivos. Toma decisiones informadas
                        basadas en datos históricos y patrones.
                    </p>
                </div>
            </div>

            <!-- Service 5: Computer Vision -->
            <div
                class="group bg-dark-800 rounded-xl overflow-hidden border-l-4 border-accent hover:border-secondary transition-all duration-300 hover:scale-105">
                <div class="aspect-square overflow-hidden bg-dark-700 flex items-center justify-center">
                    <i class="fas fa-eye text-6xl text-accent"></i>
                </div>
                <div class="p-6">
                    <h3 class="font-display font-bold text-2xl text-white mb-3">Visión por Computadora</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Sistemas de reconocimiento de imágenes y video. Detección de objetos, análisis facial y
                        procesamiento visual avanzado.
                    </p>
                </div>
            </div>

            <!-- Service 6: NLP -->
            <div
                class="group bg-dark-800 rounded-xl overflow-hidden border-l-4 border-secondary hover:border-primary transition-all duration-300 hover:scale-105">
                <div class="aspect-square overflow-hidden bg-dark-700 flex items-center justify-center">
                    <i class="fas fa-language text-6xl text-secondary"></i>
                </div>
                <div class="p-6">
                    <h3 class="font-display font-bold text-2xl text-white mb-3">Procesamiento de Lenguaje</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Análisis de texto, sentiment analysis y extracción de información. Transforma datos no
                        estructurados en insights accionables.
                    </p>
                </div>
            </div>

        </div>

        <!-- Link to Services Page -->
        <div class="text-center mt-12">
            <a href="servicios.php"
                class="inline-flex items-center text-primary hover:text-accent transition-colors font-semibold text-lg group">
                Ver todos los servicios
                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
            </a>
        </div>

    </div>
</section>

<!-- About Section -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- Left Column: Image -->
            <div class="order-2 lg:order-1">
                <div class="relative">
                    <div class="bg-dark-800 rounded-2xl p-8">
                        <i class="fas fa-user-graduate text-6xl text-primary mb-4"></i>
                        <h3 class="font-display font-bold text-2xl text-white mb-2">Dr. Il Sung Park</h3>
                        <p class="text-gray-400 mb-4">Fundador & CEO</p>
                        <p class="text-gray-300 leading-relaxed">
                            Experto en Deep Learning e Inteligencia Artificial con más de 10 años de experiencia en
                            investigación y desarrollo de soluciones tecnológicas innovadoras.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Text -->
            <div class="order-1 lg:order-2">
                <p class="text-accent font-display text-sm tracking-widest uppercase mb-4">
                    Nuestra Historia
                </p>
                <h2 class="font-display font-bold text-4xl md:text-5xl text-dark-900 mb-6">
                    Liderando la <span class="gradient-text">Revolución IA</span> en Paraguay
                </h2>

                <div class="space-y-6 text-gray-700 leading-relaxed">
                    <p>
                        Fundado con la visión de hacer la inteligencia artificial accesible para todos los negocios, AI
                        Neuron Lab nace de la pasión por la innovación tecnológica y el compromiso con la excelencia.
                    </p>
                    <p>
                        Bajo el liderazgo del <strong>Dr. Il Sung Park</strong>, hemos desarrollado soluciones que
                        combinan investigación académica de vanguardia con aplicaciones prácticas del mundo real.
                    </p>
                    <p>
                        Nuestro equipo de expertos trabaja día a día para romper barreras tecnológicas y democratizar el
                        acceso a herramientas de IA que antes solo estaban al alcance de grandes corporaciones.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="relative py-32 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 bg-dark-900"></div>
    <div class="absolute inset-0 opacity-20">
        <div class="absolute inset-0 bg-gradient-to-r from-primary via-accent to-secondary"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-display font-bold text-4xl md:text-6xl text-white mb-8">
            ¿Listo para <span class="gradient-text">innovar con IA</span>?
        </h2>
        <p class="text-xl text-gray-300 mb-12">
            Comienza tu transformación digital hoy mismo
        </p>
        <a href="contacto.php"
            class="inline-block px-10 py-5 bg-gradient-to-r from-accent to-primary text-white rounded-lg font-bold text-xl hover:scale-105 transition-transform duration-300 shadow-2xl shadow-accent/50">
            Solicitar Consulta Gratuita
        </a>
    </div>
</section>

<!-- Social Gallery -->
<section class="py-24 bg-dark-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="font-display font-bold text-4xl md:text-5xl text-white mb-4">
                Síguenos en <span class="gradient-text">@aineuronlab</span>
            </h2>
            <p class="text-gray-400">Conoce más sobre nuestro trabajo y tecnologías</p>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

            <!-- Gallery Item 1 -->
            <div class="group relative aspect-square overflow-hidden rounded-lg cursor-pointer">
                <div class="w-full h-full bg-dark-800 flex items-center justify-center">
                    <i class="fas fa-code text-4xl text-primary"></i>
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-t from-accent to-transparent opacity-0 group-hover:opacity-90 transition-opacity duration-300 flex items-center justify-center">
                    <i class="fab fa-instagram text-white text-4xl"></i>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="group relative aspect-square overflow-hidden rounded-lg cursor-pointer">
                <div class="w-full h-full bg-dark-800 flex items-center justify-center">
                    <i class="fas fa-laptop-code text-4xl text-accent"></i>
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-t from-primary to-transparent opacity-0 group-hover:opacity-90 transition-opacity duration-300 flex items-center justify-center">
                    <i class="fab fa-instagram text-white text-4xl"></i>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="group relative aspect-square overflow-hidden rounded-lg cursor-pointer">
                <div class="w-full h-full bg-dark-800 flex items-center justify-center">
                    <i class="fas fa-brain text-4xl text-secondary"></i>
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-t from-accent to-transparent opacity-0 group-hover:opacity-90 transition-opacity duration-300 flex items-center justify-center">
                    <i class="fab fa-instagram text-white text-4xl"></i>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div class="group relative aspect-square overflow-hidden rounded-lg cursor-pointer">
                <div class="w-full h-full bg-dark-800 flex items-center justify-center">
                    <i class="fas fa-network-wired text-4xl text-accent"></i>
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-t from-secondary to-transparent opacity-0 group-hover:opacity-90 transition-opacity duration-300 flex items-center justify-center">
                    <i class="fab fa-instagram text-white text-4xl"></i>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div class="group relative aspect-square overflow-hidden rounded-lg cursor-pointer">
                <div class="w-full h-full bg-dark-800 flex items-center justify-center">
                    <i class="fas fa-robot text-4xl text-primary"></i>
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-t from-primary to-transparent opacity-0 group-hover:opacity-90 transition-opacity duration-300 flex items-center justify-center">
                    <i class="fab fa-instagram text-white text-4xl"></i>
                </div>
            </div>

            <!-- Gallery Item 6 -->
            <div class="group relative aspect-square overflow-hidden rounded-lg cursor-pointer">
                <div class="w-full h-full bg-dark-800 flex items-center justify-center">
                    <i class="fas fa-microchip text-4xl text-secondary"></i>
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-t from-accent to-transparent opacity-0 group-hover:opacity-90 transition-opacity duration-300 flex items-center justify-center">
                    <i class="fab fa-instagram text-white text-4xl"></i>
                </div>
            </div>

        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>