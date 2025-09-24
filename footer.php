    <footer class="bg-neutral-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Brand -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <span class="text-xl font-semibold"><?php bloginfo('name'); ?></span>
                    </div>
                    <p class="text-neutral-400 text-sm leading-relaxed">
                        Expert en marketing international et stratégie culturelle. 
                        Spécialisation unique dans les cultures nordiques.
                    </p>
                </div>

                <!-- Expertise -->
                <div class="space-y-4">
                    <h4 class="font-semibold text-white">Expertise</h4>
                    <ul class="space-y-2 text-sm text-neutral-400">
                        <li>Cultures Nordiques</li>
                        <li>Développement Commercial</li>
                        <li>Communication Globale</li>
                        <li>Analyse Opportunités</li>
                        <li>Conseil Stratégique</li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="space-y-4">
                    <h4 class="font-semibold text-white">Services</h4>
                    <ul class="space-y-2 text-sm text-neutral-400">
                        <li>Audit de Marché International</li>
                        <li>Stratégie d'Expansion Nordique</li>
                        <li>Communication Globale</li>
                        <li>Formation Équipes</li>
                        <li>Consultation Stratégique</li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="space-y-4">
                    <h4 class="font-semibold text-white">Contact</h4>
                    <div class="space-y-3 text-sm text-neutral-400">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>thierry@thierry-robert.eu</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                            <span>Thierry Robert</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>Europe / Nordique</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom -->
            <div class="border-t border-neutral-700 mt-12 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-neutral-400">
                    <p>
                        © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Tous droits réservés.
                    </p>
                    <div class="flex gap-6">
                        <a href="#privacy" class="hover:text-white transition-colors">
                            Politique de confidentialité
                        </a>
                        <a href="#terms" class="hover:text-white transition-colors">
                            Mentions légales
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>