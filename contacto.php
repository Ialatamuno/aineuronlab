<?php
$page_title = "Contacto | AI Neuron Lab";
$page_description = "Contáctanos para comenzar tu proyecto de IA. Estamos en Asunción, Paraguay.";
$current_page = "contacto";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative h-[50vh] flex items-center justify-center bg-dark-900">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-dark-900"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="font-display font-bold text-5xl md:text-7xl text-white mb-6">
            Hablemos de tu <span class="gradient-text">Proyecto</span>
        </h1>

        <!-- Decorative Line -->
        <div class="mt-8 flex justify-center">
            <div class="w-32 h-1 gradient-border rounded-full"></div>
        </div>
    </div>
</section>

<!-- Contact Content -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <!-- Left Column: Contact Info -->
            <div class="space-y-8">

                <!-- Info Card -->
                <div class="bg-dark-800 rounded-2xl p-8 border-l-4 border-primary shadow-xl">
                    <h2 class="font-display font-bold text-3xl text-white mb-8">Información de Contacto</h2>

                    <div class="space-y-6">

                        <!-- Hours -->
                        <div class="flex items-start">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-primary/20 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-clock text-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-white mb-1">Horarios de Atención</h3>
                                <p class="text-gray-400">Lunes - Viernes: 9:00 AM - 6:00 PM</p>
                                <p class="text-gray-400">Sábados y Domingos: Cerrado</p>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="flex items-start">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-accent/20 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-accent text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-white mb-1">Ubicación</h3>
                                <p class="text-gray-400">Asunción, Paraguay</p>
                                <p class="text-gray-500 text-sm">Ubicación exacta al confirmar reunión</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-secondary/20 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-secondary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-white mb-1">Teléfono</h3>
                                <a href="tel:+595981234567" class="text-primary hover:text-accent transition-colors">
                                    +595 981 234 567
                                </a>
                            </div>
                        </div>

                        <!-- WhatsApp -->
                        <div class="flex items-start">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center mr-4">
                                <i class="fab fa-whatsapp text-green-400 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-white mb-1">WhatsApp</h3>
                                <a href="https://wa.me/595981234567" target="_blank"
                                    class="text-primary hover:text-accent transition-colors">
                                    +595 981 234 567
                                </a>
                                <p class="text-gray-500 text-sm">Respuesta rápida por WhatsApp</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-primary/20 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-white mb-1">Email</h3>
                                <a href="mailto:contacto@aineuronlab.com"
                                    class="text-primary hover:text-accent transition-colors">
                                    contacto@aineuronlab.com
                                </a>
                            </div>
                        </div>

                    </div>

                    <!-- Note -->
                    <div class="mt-8 p-4 bg-accent/10 border-l-2 border-accent rounded">
                        <p class="text-gray-300 text-sm">
                            <i class="fas fa-info-circle text-accent mr-2"></i>
                            <strong>Proyectos Corporativos:</strong> Ofrecemos reuniones presenciales para proyectos
                            empresariales. Contáctanos para coordinar.
                        </p>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-8">
                        <h3 class="font-semibold text-white mb-4">Síguenos en Redes</h3>
                        <div class="flex space-x-4">
                            <a href="#" target="_blank"
                                class="w-14 h-14 bg-dark-700 rounded-lg flex items-center justify-center text-gray-400 hover:bg-gradient-to-r hover:from-accent hover:to-primary hover:text-white transition-all duration-300 hover:scale-110">
                                <i class="fab fa-linkedin-in text-2xl"></i>
                            </a>
                            <a href="#" target="_blank"
                                class="w-14 h-14 bg-dark-700 rounded-lg flex items-center justify-center text-gray-400 hover:bg-gradient-to-r hover:from-accent hover:to-primary hover:text-white transition-all duration-300 hover:scale-110">
                                <i class="fab fa-instagram text-2xl"></i>
                            </a>
                            <a href="#" target="_blank"
                                class="w-14 h-14 bg-dark-700 rounded-lg flex items-center justify-center text-gray-400 hover:bg-gradient-to-r hover:from-accent hover:to-primary hover:text-white transition-all duration-300 hover:scale-110">
                                <i class="fab fa-github text-2xl"></i>
                            </a>
                            <a href="#" target="_blank"
                                class="w-14 h-14 bg-dark-700 rounded-lg flex items-center justify-center text-gray-400 hover:bg-gradient-to-r hover:from-accent hover:to-primary hover:text-white transition-all duration-300 hover:scale-110">
                                <i class="fab fa-twitter text-2xl"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Right Column: Contact Form -->
            <div>

                <div
                    class="bg-dark-800 rounded-2xl p-8 border-t-4 border-gradient-to-r from-accent to-primary shadow-xl">
                    <h2 class="font-display font-bold text-3xl text-white mb-2">Envíanos un Mensaje</h2>
                    <p class="text-gray-400 mb-8">Completa el formulario y te responderemos en menos de 24 horas</p>

                    <form action="#" method="POST" class="space-y-6">

                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-white font-semibold mb-2">
                                Nombre Completo <span class="text-primary">*</span>
                            </label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 bg-dark-700 border border-gray-600 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/50 transition-all"
                                placeholder="Tu nombre">
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-white font-semibold mb-2">
                                Email <span class="text-primary">*</span>
                            </label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 bg-dark-700 border border-gray-600 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/50 transition-all"
                                placeholder="tu@email.com">
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-white font-semibold mb-2">
                                Teléfono
                            </label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-3 bg-dark-700 border border-gray-600 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/50 transition-all"
                                placeholder="+595 XXX XXX XXX">
                        </div>

                        <!-- Company -->
                        <div>
                            <label for="company" class="block text-white font-semibold mb-2">
                                Empresa
                            </label>
                            <input type="text" id="company" name="company"
                                class="w-full px-4 py-3 bg-dark-700 border border-gray-600 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/50 transition-all"
                                placeholder="Nombre de tu empresa">
                        </div>

                        <!-- Service Type -->
                        <div>
                            <label for="service" class="block text-white font-semibold mb-2">
                                Servicio de Interés <span class="text-primary">*</span>
                            </label>
                            <select id="service" name="service" required
                                class="w-full px-4 py-3 bg-dark-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/50 transition-all">
                                <option value="">Selecciona un servicio</option>
                                <option value="deep-learning">Deep Learning</option>
                                <option value="automatizacion">Automatización</option>
                                <option value="chatbots">Chatbots</option>
                                <option value="analytics">Analítica Predictiva</option>
                                <option value="vision">Visión por Computadora</option>
                                <option value="nlp">Procesamiento de Lenguaje</option>
                                <option value="consultoria">Consultoría</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-white font-semibold mb-2">
                                Cuéntanos sobre tu Proyecto <span class="text-primary">*</span>
                            </label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-3 bg-dark-700 border border-gray-600 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/50 transition-all resize-none"
                                placeholder="Describe tu proyecto, objetivos y cualquier detalle relevante..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full px-8 py-4 bg-gradient-to-r from-accent to-primary text-white rounded-lg font-bold text-lg hover:scale-105 transition-transform duration-300 shadow-lg shadow-accent/50">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Enviar Mensaje
                        </button>

                    </form>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- Map Section -->
<section class="py-20 bg-dark-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12">
            <h2 class="font-display font-bold text-4xl md:text-5xl text-white mb-4">
                ¿Cómo <span class="gradient-text">Llegar</span>?
            </h2>
            <p class="text-gray-400">Estamos ubicados en Asunción, Paraguay</p>
        </div>

        <!-- Map Container -->
        <div class="rounded-2xl overflow-hidden shadow-2xl">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115396.06267184245!2d-57.67691684999999!3d-25.282196699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945da8c05a0d0df7%3A0x9fb713d3d3cb9ca!2sAsunci%C3%B3n%2C%20Paraguay!5e0!3m2!1sen!2s!4v1234567890"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                class="grayscale"></iframe>
        </div>

        <!-- Transportation Info -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-dark-800 rounded-lg p-6 text-center">
                <i class="fas fa-car text-3xl text-primary mb-3"></i>
                <h3 class="font-display font-bold text-white mb-2">En Auto</h3>
                <p class="text-gray-400 text-sm">Estacionamiento disponible en la zona</p>
            </div>

            <div class="bg-dark-800 rounded-lg p-6 text-center">
                <i class="fas fa-bus text-3xl text-accent mb-3"></i>
                <h3 class="font-display font-bold text-white mb-2">Transporte Público</h3>
                <p class="text-gray-400 text-sm">Varias líneas de bus disponibles</p>
            </div>

            <div class="bg-dark-800 rounded-lg p-6 text-center">
                <i class="fas fa-taxi text-3xl text-secondary mb-3"></i>
                <h3 class="font-display font-bold text-white mb-2">Taxi / Uber</h3>
                <p class="text-gray-400 text-sm">Servicios de taxi disponibles 24/7</p>
            </div>

        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>