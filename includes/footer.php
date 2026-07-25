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
                    Transformamos negocios con soluciones de inteligencia artificial de vanguardia. Deep Learning y
                    Automatización.
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
                    </ul>
            </div>



            <!-- Column 4: Contact -->
            <div>
                <h3 class="text-white font-bold text-lg mb-4 font-display">Contacto</h3>
                <ul class="space-y-3 text-gray-400 text-sm">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt text-primary mr-3 mt-1"></i>
                        <div>
                            <p class="font-semibold text-white">Korea Office</p>
                            <p>309 Gangnam-daero, Seocho-gu</p>
                            <p>Seoul, Republic of Korea</p>
                        </div>
                    </li>

                    <li class="flex items-start">
                        <i class="fas fa-envelope text-primary mr-3 mt-1"></i>
                        <a href="mailto:contacto@aineuronlab.com"
                            class="hover:text-primary transition-colors">contacto@aineuronlab.com</a>
                    </li>
                </ul>

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