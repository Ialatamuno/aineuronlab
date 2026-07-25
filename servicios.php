<?php
$page_title = "Servicios | AI Neuron Lab";
$page_description = "Descubre nuestros servicios de IA: Deep Learning, Automatización, Chatbots, Analítica Predictiva y más.";
$current_page = "servicios";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative h-[50vh] flex items-center justify-center bg-dark-900">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-dark-900"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="font-display font-bold text-5xl md:text-7xl text-white mb-6">
            Nuestros <span class="gradient-text">Servicios</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto">
            Soluciones de inteligencia artificial diseñadas para impulsar tu negocio
        </p>

        <!-- Decorative Line -->
        <div class="mt-8 flex justify-center">
            <div class="w-32 h-1 gradient-border rounded-full"></div>
        </div>
    </div>
</section>

<!-- Sticky Navigation -->
<nav class="sticky top-20 z-40 bg-dark-800 border-b border-gray-700 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex overflow-x-auto space-x-8 py-4 scrollbar-hide">
            <a href="#deep-learning"
                class="whitespace-nowrap text-gray-400 hover:text-primary transition-colors pb-2 border-b-2 border-transparent hover:border-primary font-semibold">
                Deep Learning
            </a>
            <a href="#automatizacion"
                class="whitespace-nowrap text-gray-400 hover:text-primary transition-colors pb-2 border-b-2 border-transparent hover:border-primary font-semibold">
                Automatización
            </a>

            <a href="#consultoria"
                class="whitespace-nowrap text-gray-400 hover:text-primary transition-colors pb-2 border-b-2 border-transparent hover:border-primary font-semibold">
                Consultoría
            </a>
        </div>
    </div>
</nav>

<!-- Deep Learning Section -->
<section id="deep-learning" class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12">
            <h2 class="font-display font-bold text-4xl md:text-5xl text-dark-900 mb-4">
                <span class="gradient-text">Deep Learning</span> & Redes Neuronales
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary to-accent mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Service Item -->
            <div class="bg-white rounded-lg shadow-lg p-8 border-l-4 border-primary hover:shadow-xl transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="font-display font-bold text-2xl text-dark-900">Modelos Personalizados</h3>
                    <span class="px-3 py-1 bg-primary/20 text-primary text-xs font-bold rounded-full">POPULAR</span>
                </div>
                <p class="text-gray-600 mb-4">Desarrollo de modelos de Deep Learning adaptados a tus necesidades
                    específicas.</p>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                        <span>Arquitecturas CNN, RNN, LSTM</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                        <span>Transfer Learning & Fine-tuning</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                        <span>Optimización y deployment</span>
                    </li>
                </ul>
                <p class="text-sm text-gray-500 mt-4 italic">Precio: Cotización según proyecto</p>
            </div>

            <!-- Service Item -->
            <div class="bg-white rounded-lg shadow-lg p-8 border-l-4 border-accent hover:shadow-xl transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="font-display font-bold text-2xl text-dark-900">Clasificación de Imágenes</h3>
                </div>
                <p class="text-gray-600 mb-4">Sistemas de reconocimiento y clasificación visual automatizada.</p>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-accent mr-2 mt-1"></i>
                        <span>Detección de objetos</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-accent mr-2 mt-1"></i>
                        <span>Segmentación semántica</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-accent mr-2 mt-1"></i>
                        <span>Control de calidad visual</span>
                    </li>
                </ul>
                <p class="text-sm text-gray-500 mt-4 italic">Precio: Desde USD 3,000</p>
            </div>

            <!-- Service Item -->
            <div
                class="bg-white rounded-lg shadow-lg p-8 border-l-4 border-secondary hover:shadow-xl transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="font-display font-bold text-2xl text-dark-900">Modelos Predictivos</h3>
                    <span
                        class="px-3 py-1 bg-secondary/20 text-secondary text-xs font-bold rounded-full">RECOMENDADO</span>
                </div>
                <p class="text-gray-600 mb-4">Forecasting y predicción basada en datos históricos.</p>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-secondary mr-2 mt-1"></i>
                        <span>Series temporales</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-secondary mr-2 mt-1"></i>
                        <span>Análisis de tendencias</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-secondary mr-2 mt-1"></i>
                        <span>Modelos de regresión avanzados</span>
                    </li>
                </ul>
                <p class="text-sm text-gray-500 mt-4 italic">Precio: Desde USD 2,500</p>
            </div>

            <!-- Service Item -->
            <div class="bg-white rounded-lg shadow-lg p-8 border-l-4 border-primary hover:shadow-xl transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="font-display font-bold text-2xl text-dark-900">Análisis de Sentimiento</h3>
                </div>
                <p class="text-gray-600 mb-4">Comprende la opinión de tus clientes mediante NLP.</p>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                        <span>Análisis de redes sociales</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                        <span>Monitoreo de marca</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                        <span>Dashboards en tiempo real</span>
                    </li>
                </ul>
                <p class="text-sm text-gray-500 mt-4 italic">Precio: Desde USD 2,000</p>
            </div>

        </div>
    </div>
</section>

<!-- Automatización Section -->
<section id="automatizacion" class="py-24 bg-dark-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12">
            <h2 class="font-display font-bold text-4xl md:text-5xl text-white mb-4">
                <span class="gradient-text">Automatización</span> Inteligente
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-accent to-secondary mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Service Item -->
            <div
                class="bg-dark-800 rounded-lg shadow-lg p-8 border-l-4 border-accent hover:shadow-2xl transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="font-display font-bold text-2xl text-white">RPA (Robotic Process Automation)</h3>
                    <span class="px-3 py-1 bg-accent/20 text-accent text-xs font-bold rounded-full">MÁS VENDIDO</span>
                </div>
                <p class="text-gray-400 mb-4">Automatiza tareas repetitivas y libera tiempo de tu equipo.</p>
                <ul class="space-y-2 text-gray-300">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-accent mr-2 mt-1"></i>
                        <span>Procesamiento de documentos</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-accent mr-2 mt-1"></i>
                        <span>Extracción de datos</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-accent mr-2 mt-1"></i>
                        <span>Integración de sistemas</span>
                    </li>
                </ul>
                <p class="text-sm text-gray-500 mt-4 italic">Precio: Desde USD 1,800</p>
            </div>

            <!-- Service Item -->
            <div
                class="bg-dark-800 rounded-lg shadow-lg p-8 border-l-4 border-primary hover:shadow-2xl transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="font-display font-bold text-2xl text-white">Workflows Inteligentes</h3>
                </div>
                <p class="text-gray-400 mb-4">Optimiza procesos de negocio con flujos automatizados.</p>
                <ul class="space-y-2 text-gray-300">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                        <span>Aprobaciones automáticas</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                        <span>Notificaciones inteligentes</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary mr-2 mt-1"></i>
                        <span>Reglas de negocio personalizadas</span>
                    </li>
                </ul>
                <p class="text-sm text-gray-500 mt-4 italic">Precio: Desde USD 2,200</p>
            </div>

            <!-- Service Item -->
            <div
                class="bg-dark-800 rounded-lg shadow-lg p-8 border-l-4 border-secondary hover:shadow-2xl transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="font-display font-bold text-2xl text-white">Integración de Datos</h3>
                </div>
                <p class="text-gray-400 mb-4">Conecta sistemas y centraliza información automáticamente.</p>
                <ul class="space-y-2 text-gray-300">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-secondary mr-2 mt-1"></i>
                        <span>ETL automatizado</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-secondary mr-2 mt-1"></i>
                        <span>APIs y webhooks</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-secondary mr-2 mt-1"></i>
                        <span>Sincronización en tiempo real</span>
                    </li>
                </ul>
                <p class="text-sm text-gray-500 mt-4 italic">Precio: Desde USD 2,800</p>
            </div>

            <!-- Service Item -->
            <div
                class="bg-dark-800 rounded-lg shadow-lg p-8 border-l-4 border-accent hover:shadow-2xl transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="font-display font-bold text-2xl text-white">Reporting Automático</h3>
                    <span class="px-3 py-1 bg-primary/20 text-primary text-xs font-bold rounded-full">NUEVO</span>
                </div>
                <p class="text-gray-400 mb-4">Reportes y dashboards generados automáticamente.</p>
                <ul class="space-y-2 text-gray-300">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-accent mr-2 mt-1"></i>
                        <span>Informes programados</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-accent mr-2 mt-1"></i>
                        <span>Visualizaciones interactivas</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-accent mr-2 mt-1"></i>
                        <span>Distribución automática</span>
                    </li>
                </ul>
                <p class="text-sm text-gray-500 mt-4 italic">Precio: Desde USD 1,500</p>
            </div>

        </div>
    </div>
</section>



<!-- Consultoría Section -->
<section id="consultoria" class="py-24 bg-dark-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12">
            <h2 class="font-display font-bold text-4xl md:text-5xl text-white mb-4">
                <span class="gradient-text">Consultoría</span> & Capacitación
            </h2>
            <div class="w-24 h-1 bg-gradient-to-r from-primary via-accent to-secondary mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Service Item -->
            <div class="bg-dark-800 rounded-lg p-6 text-center hover:scale-105 transition-transform">
                <i class="fas fa-lightbulb text-4xl text-primary mb-4"></i>
                <h3 class="font-display font-bold text-xl text-white mb-3">Estrategia IA</h3>
                <p class="text-gray-400 text-sm mb-4">Definición de roadmap tecnológico y casos de uso.</p>
                <p class="text-xl font-bold text-primary">USD 800</p>
                <p class="text-xs text-gray-500">Por sesión</p>
            </div>

            <!-- Service Item -->
            <div class="bg-dark-800 rounded-lg p-6 text-center hover:scale-105 transition-transform">
                <i class="fas fa-search text-4xl text-accent mb-4"></i>
                <h3 class="font-display font-bold text-xl text-white mb-3">Auditoría Tech</h3>
                <p class="text-gray-400 text-sm mb-4">Evaluación de infraestructura y procesos actuales.</p>
                <p class="text-xl font-bold text-accent">USD 1,500</p>
                <p class="text-xs text-gray-500">Informe completo</p>
            </div>

            <!-- Service Item -->
            <div class="bg-dark-800 rounded-lg p-6 text-center hover:scale-105 transition-transform">
                <i class="fas fa-chalkboard-teacher text-4xl text-secondary mb-4"></i>
                <h3 class="font-display font-bold text-xl text-white mb-3">Capacitación</h3>
                <p class="text-gray-400 text-sm mb-4">Formación en IA para tu equipo técnico.</p>
                <p class="text-xl font-bold text-secondary">USD 1,200</p>
                <p class="text-xs text-gray-500">Workshop (8 hrs)</p>
            </div>

            <!-- Service Item -->
            <div class="bg-dark-800 rounded-lg p-6 text-center hover:scale-105 transition-transform">
                <i class="fas fa-code text-4xl text-primary mb-4"></i>
                <h3 class="font-display font-bold text-xl text-white mb-3">Proof of Concept</h3>
                <p class="text-gray-400 text-sm mb-4">Validación técnica antes del proyecto completo.</p>
                <p class="text-xl font-bold text-primary">Variable</p>
                <p class="text-xs text-gray-500">Según alcance</p>
            </div>

        </div>

    </div>
</section>

<!-- Final CTA -->
<section class="py-20 bg-gradient-to-r from-primary via-accent to-secondary">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-display font-bold text-4xl md:text-5xl text-white mb-6">
            ¿Tienes un proyecto en mente?
        </h2>
        <p class="text-xl text-white/90 mb-8">
            Agenda una consulta gratuita y descubre cómo la IA puede transformar tu negocio
        </p>
        <a href="contacto.php"
            class="inline-block px-10 py-4 bg-white text-accent rounded-lg font-bold text-lg hover:scale-105 transition-transform duration-300 shadow-xl">
            Solicitar Consulta Gratuita
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>