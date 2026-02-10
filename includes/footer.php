</main>

<!-- Footer -->
<footer class="bg-dark-800 border-t border-gray-800 relative">
    <!-- Gradient Top Border -->
    <div class="h-1 gradient-border"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

            <!-- Column 1: About -->
            <div class="space-y-4">
                <div class="flex items-center space-x-2 mb-4">
                    <div
                        class="w-10 h-10 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center">
                        <i class="fas fa-brain text-white text-xl"></i>
                    </div>
                    <span class="text-xl font-bold font-display">
                        <span class="gradient-text">AI</span> Neuron Lab
                    </span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Transformamos negocios con soluciones de inteligencia artificial de vanguardia. Deep Learning,
                    Automatización y Chatbots inteligentes.
                </p>
            </div>

            <!-- Column 2: Navigation -->
            <div>
                <h3 class="text-white font-bold text-lg mb-4 font-display">Navegación</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="index.php"
                            class="text-gray-400 hover:text-primary transition-colors flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Inicio
                        </a>
                    </li>
                    <li>
                        <a href="servicios.php"
                            class="text-gray-400 hover:text-primary transition-colors flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Servicios
                        </a>
                    </li>
                    <li>
                        <a href="contacto.php"
                            class="text-gray-400 hover:text-primary transition-colors flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Contacto
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Column 3: Hours -->
            <div>
                <h3 class="text-white font-bold text-lg mb-4 font-display">Horarios</h3>
                <ul class="space-y-3 text-gray-400 text-sm">
                    <li class="flex items-start">
                        <i class="fas fa-clock text-primary mr-3 mt-1"></i>
                        <div>
                            <p class="font-semibold text-white">Lunes - Viernes</p>
                            <p>9:00 AM - 6:00 PM</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-calendar-xmark text-primary mr-3 mt-1"></i>
                        <div>
                            <p class="font-semibold text-white">Fines de Semana</p>
                            <p>Cerrado</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Contact -->
            <div>
                <h3 class="text-white font-bold text-lg mb-4 font-display">Contacto</h3>
                <ul class="space-y-3 text-gray-400 text-sm">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt text-primary mr-3 mt-1"></i>
                        <span>Asunción, Paraguay</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone text-primary mr-3 mt-1"></i>
                        <a href="tel:+595981234567" class="hover:text-primary transition-colors">+595 981 234 567</a>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope text-primary mr-3 mt-1"></i>
                        <a href="mailto:contacto@aineuronlab.com"
                            class="hover:text-primary transition-colors">contacto@aineuronlab.com</a>
                    </li>
                </ul>

                <!-- Social Media -->
                <div class="mt-6">
                    <h4 class="text-white font-semibold mb-3">Síguenos</h4>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-10 h-10 bg-dark-700 rounded-lg flex items-center justify-center text-gray-400 hover:bg-gradient-to-r hover:from-accent hover:to-primary hover:text-white transition-all duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-dark-700 rounded-lg flex items-center justify-center text-gray-400 hover:bg-gradient-to-r hover:from-accent hover:to-primary hover:text-white transition-all duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-dark-700 rounded-lg flex items-center justify-center text-gray-400 hover:bg-gradient-to-r hover:from-accent hover:to-primary hover:text-white transition-all duration-300">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Copyright -->
        <div class="mt-12 pt-8 border-t border-gray-700 text-center">
            <p class="text-gray-400 text-sm">
                &copy;
                <?php echo date('Y'); ?> <span class="gradient-text font-semibold">AI Neuron Lab</span>. Todos los
                derechos reservados.
            </p>
        </div>
    </div>
</footer>

</body>

</html>