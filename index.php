<?php get_header(); ?>

<!-- Hero Section -->
<section class="relative pt-20 pb-16 bg-gradient-to-br from-neutral-50 to-blue-50 overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-8">
                <!-- Main Heading -->
                <div class="space-y-6">
                    <h1 class="text-5xl lg:text-7xl font-bold leading-tight">
                        Marketing 
                        <span class="text-blue-600">International</span> & 
                        <span class="block">Stratégie Culturelle</span>
                    </h1>
                    
                    <p class="text-xl lg:text-2xl text-neutral-600 leading-relaxed">
                        Expert en développement commercial international avec une spécialisation unique 
                        dans les cultures nordiques. Je transforme votre compréhension culturelle en 
                        avantage concurrentiel.
                    </p>
                </div>

                <!-- Badges -->
                <div class="flex flex-wrap gap-4">
                    <div class="badge-nordic">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Expertise Nordique
                    </div>
                    <div class="badge-orange">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        Développement International
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#services" class="btn-primary text-lg px-8 py-4">
                        Découvrir mes services
                    </a>
                    <a href="#about" class="btn-secondary text-lg px-8 py-4">
                        Voir mon parcours
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-8 pt-8">
                    <div class="text-center">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Années d'expérience</div>
                    </div>
                    <div class="text-center">
                        <div class="stat-number">25+</div>
                        <div class="stat-label">Marchés analysés</div>
                    </div>
                    <div class="text-center">
                        <div class="stat-number">100+</div>
                        <div class="stat-label">Projets réalisés</div>
                    </div>
                </div>
            </div>

            <!-- Right Content - Photo -->
            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/thierry-hero.jpg"
                        alt="Thierry Robert - Expert Marketing International"
                        class="w-full h-auto object-cover"
                    />
                    
                    <!-- Floating Badge -->
                    <div class="absolute bottom-6 left-6 bg-white/95 backdrop-blur-sm rounded-lg p-4 shadow-lg">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-neutral-800">Croissance</div>
                                <div class="text-sm text-neutral-600">Internationale</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Expertise Section -->
<section id="expertise" class="py-20 bg-neutral-50">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-neutral-800 mb-6">
                Mon Expertise
            </h2>
            <p class="text-xl text-neutral-600 max-w-3xl mx-auto">
                Spécialisation unique dans les cultures nordiques
            </p>
        </div>

        <!-- Expertise Grid -->
        <div class="grid lg:grid-cols-2 gap-16 items-center mb-20">
            <div class="relative">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/nordic-expertise.jpg"
                    alt="Expertise Cultures Nordiques"
                    class="w-full rounded-2xl shadow-xl"
                />
            </div>

            <div class="space-y-8">
                <h3 class="text-3xl font-semibold text-neutral-800">
                    Cultures Nordiques & Business Global
                </h3>
                
                <div class="space-y-6">
                    <p class="text-lg text-neutral-600 leading-relaxed">
                        Ma spécialisation dans les cultures nordiques (Danemark, Suède, Norvège, Finlande, Islande) 
                        me permet d'identifier rapidement les opportunités commerciales uniques de ces marchés.
                    </p>

                    <p class="text-neutral-600 leading-relaxed">
                        Cette expertise culturelle approfondie, combinée à ma maîtrise du développement commercial 
                        international, constitue un avantage concurrentiel rare sur le marché du conseil.
                    </p>
                </div>

                <!-- Key Points -->
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-neutral-600">Compréhension approfondie des mentalités nordiques</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-neutral-600">Maîtrise des codes culturels pour le business</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-neutral-600">Adaptation des stratégies aux spécificités locales</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 bg-neutral-50">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-neutral-800 mb-6">
                Mes Services
            </h2>
            <p class="text-xl text-neutral-600 max-w-3xl mx-auto mb-8">
                Comment je peux vous accompagner
            </p>
            <p class="text-lg text-neutral-600 max-w-4xl mx-auto">
                Des solutions sur mesure pour transformer votre vision internationale en succès 
                commercial, avec l'expertise culturelle comme différenciateur clé.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid lg:grid-cols-3 gap-8 mb-16">
            <!-- Service 1 -->
            <div class="service-card h-full">
                <div class="flex items-center gap-2 mb-4">
                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="service-duration">2-4 semaines</span>
                </div>

                <h3 class="text-2xl font-semibold text-neutral-800 mb-4">
                    Audit de Marché International
                </h3>

                <p class="text-neutral-600 mb-6 leading-relaxed">
                    Analyse complète de vos opportunités sur les marchés nordiques et internationaux
                </p>

                <div class="space-y-3 mb-6">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-neutral-600 text-sm">Étude de faisabilité culturelle</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-neutral-600 text-sm">Analyse concurrentielle approfondie</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-neutral-600 text-sm">Recommandations stratégiques</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-neutral-600 text-sm">Plan d'action personnalisé</span>
                    </div>
                </div>

                <div class="mb-6 p-4 bg-blue-50 rounded-lg">
                    <p class="text-sm font-medium text-blue-800 mb-1">Idéal pour :</p>
                    <p class="text-sm text-blue-700">Entreprises souhaitant s'implanter à l'international</p>
                </div>

                <a href="#contact" class="w-full btn-secondary group inline-flex items-center justify-center">
                    En savoir plus
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <!-- Service 2 -->
            <div class="service-card h-full">
                <div class="flex items-center gap-2 mb-4">
                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="service-duration">3-6 mois</span>
                </div>

                <h3 class="text-2xl font-semibold text-neutral-800 mb-4">
                    Stratégie d'Expansion Nordique
                </h3>

                <p class="text-neutral-600 mb-6 leading-relaxed">
                    Accompagnement complet pour votre développement sur les marchés scandinaves
                </p>

                <div class="space-y-3 mb-6">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-neutral-600 text-sm">Stratégie d'entrée sur mesure</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-neutral-600 text-sm">Identification de partenaires locaux</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-neutral-600 text-sm">Adaptation produit/service</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-neutral-600 text-sm">Formation équipes commerciales</span>
                    </div>
                </div>

                <div class="mb-6 p-4 bg-blue-50 rounded-lg">
                    <p class="text-sm font-medium text-blue-800 mb-1">Idéal pour :</p>
                    <p class="text-sm text-blue-700">PME et grandes entreprises en expansion</p>
                </div>

                <a href="#contact" class="w-full btn-secondary group inline-flex items-center justify-center">
                    En savoir plus
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <!-- Service 3 -->
            <div class="service-card h-full">
                <div class="flex items-center gap-2 mb-4">
                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="service-duration">1-3 mois</span>
                </div>

                <h3 class="text-2xl font-semibold text-neutral-800 mb-4">
                    Conseil en Communication Globale
                </h3>

                <p class="text-neutral-600 mb-6 leading-relaxed">
                    Optimisation de votre communication pour les marchés internationaux
                </p>

                <div class="space-y-3 mb-6">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-neutral-600 text-sm">Adaptation culturelle des messages</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-neutral-600 text-sm">Stratégie de contenu multimarché</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-neutral-600 text-sm">Guidelines de communication</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-neutral-600 text-sm">Formation à la négociation interculturelle</span>
                    </div>
                </div>

                <div class="mb-6 p-4 bg-blue-50 rounded-lg">
                    <p class="text-sm font-medium text-blue-800 mb-1">Idéal pour :</p>
                    <p class="text-sm text-blue-700">Équipes marketing et commerciales</p>
                </div>

                <a href="#contact" class="w-full btn-secondary group inline-flex items-center justify-center">
                    En savoir plus
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Bottom CTA -->
        <div class="text-center">
            <a href="#contact" class="btn-primary text-lg px-8 py-4">
                Discutons de votre projet
            </a>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-neutral-800 mb-6">
                À Propos
            </h2>
            <p class="text-xl text-neutral-600 max-w-3xl mx-auto">
                Un parcours dédié au marketing international
            </p>
        </div>

        <!-- Main Content -->
        <div class="grid lg:grid-cols-2 gap-16 items-center mb-20">
            <div class="space-y-8">
                <h3 class="text-3xl font-semibold text-neutral-800">
                    Mon approche unique
                </h3>
                
                <div class="space-y-6">
                    <p class="text-lg text-neutral-600 leading-relaxed">
                        Fort de plus de 15 années d'expérience en développement commercial international, 
                        j'ai développé une expertise unique dans la compréhension des cultures nordiques 
                        et leur application au business global.
                    </p>

                    <p class="text-neutral-600 leading-relaxed">
                        Cette spécialisation me permet d'identifier rapidement les opportunités commerciales 
                        et de vous faire économiser un temps précieux dans vos projets d'expansion internationale.
                    </p>

                    <p class="text-neutral-600 leading-relaxed">
                        Ma pratique des cultures nordiques et de la communication globale constitue la 
                        base de ce que je peux vous offrir : une analyse culturelle qui se transforme 
                        en avantage concurrentiel.
                    </p>
                </div>

                <!-- Values -->
                <div class="flex flex-wrap gap-4">
                    <div class="flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full">
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                        </svg>
                        <span class="text-sm font-medium text-blue-700">Stratégie</span>
                    </div>
                    <div class="flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full">
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-sm font-medium text-blue-700">Culture</span>
                    </div>
                    <div class="flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full">
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        <span class="text-sm font-medium text-blue-700">Innovation</span>
                    </div>
                    <div class="flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full">
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 3H4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M17 13v4a2 2 0 01-2 2H9a2 2 0 01-2-2v-4m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                        </svg>
                        <span class="text-sm font-medium text-blue-700">Résultats</span>
                    </div>
                    <div class="flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full">
                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span class="text-sm font-medium text-blue-700">Partenariat</span>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="flex gap-4">
                    <a href="#" class="btn-secondary">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                        LinkedIn
                    </a>
                    <a href="#" class="btn-secondary">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Mes Vidéos
                    </a>
                </div>
            </div>

            <div class="relative">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/global-market.jpg"
                    alt="Vision globale des marchés internationaux"
                    class="w-full rounded-2xl shadow-xl"
                />
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <div class="text-center space-y-3">
                <div class="stat-number">25+</div>
                <div class="font-semibold text-neutral-800">Marchés étudiés</div>
                <p class="text-sm text-neutral-600 leading-relaxed">
                    Analyses approfondies des marchés nordiques et internationaux
                </p>
            </div>
            <div class="text-center space-y-3">
                <div class="stat-number">100+</div>
                <div class="font-semibold text-neutral-800">Projets menés</div>
                <p class="text-sm text-neutral-600 leading-relaxed">
                    Accompagnements réussis d'entreprises vers l'international
                </p>
            </div>
            <div class="text-center space-y-3">
                <div class="stat-number">15+</div>
                <div class="font-semibold text-neutral-800">Années d'expertise</div>
                <p class="text-sm text-neutral-600 leading-relaxed">
                    Développement continu de l'expertise culturelle nordique
                </p>
            </div>
            <div class="text-center space-y-3">
                <div class="stat-number">50+</div>
                <div class="font-semibold text-neutral-800">Entreprises conseillées</div>
                <p class="text-sm text-neutral-600 leading-relaxed">
                    De la startup à la multinationale
                </p>
            </div>
        </div>

        <!-- Quote -->
        <div class="bg-blue-50 rounded-2xl p-8 lg:p-12 text-center">
            <svg class="w-12 h-12 text-blue-600 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
            </svg>
            <blockquote class="text-xl lg:text-2xl text-neutral-800 font-medium leading-relaxed mb-6 max-w-4xl mx-auto">
                "Dans un monde de plus en plus connecté, la compréhension culturelle devient le 
                facteur différenciant pour réussir à l'international. Mon objectif est de 
                transformer cette expertise en avantage concurrentiel durable pour vos projets."
            </blockquote>
            <cite class="text-lg font-semibold text-blue-600">— Thierry Robert</cite>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-neutral-50">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Left Content -->
            <div class="space-y-8">
                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-neutral-800 mb-6">
                        Travaillons Ensemble
                    </h2>
                    <p class="text-xl text-neutral-600 leading-relaxed">
                        Prêt à transformer votre vision internationale en succès commercial ? 
                        Discutons de votre projet.
                    </p>
                </div>

                <!-- Contact Methods -->
                <div class="space-y-6">
                    <div class="flex items-center gap-4 p-4 bg-white rounded-lg shadow-sm">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-semibold text-neutral-800">Email</div>
                            <a href="mailto:thierry@thierry-robert.eu" class="text-blue-600 hover:text-blue-700">
                                thierry@thierry-robert.eu
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 p-4 bg-white rounded-lg shadow-sm">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-semibold text-neutral-800">LinkedIn</div>
                            <a href="#" class="text-blue-600 hover:text-blue-700">
                                Thierry Robert
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 p-4 bg-white rounded-lg shadow-sm">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-semibold text-neutral-800">Zone d'intervention</div>
                            <span class="text-neutral-600">Europe / Pays Nordiques</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="bg-blue-50 rounded-lg p-6">
                    <h4 class="font-semibold text-neutral-800 mb-4">Pourquoi me choisir ?</h4>
                    <div class="grid grid-cols-2 gap-4 text-center">
                        <div>
                            <div class="text-2xl font-bold text-blue-600">24h</div>
                            <div class="text-sm text-neutral-600">Réponse garantie</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-blue-600">15+</div>
                            <div class="text-sm text-neutral-600">Ans d'expertise</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Content - Contact Form -->
            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <h3 class="text-2xl font-semibold text-neutral-800 mb-6">
                    Démarrons la conversation
                </h3>
                
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-neutral-700 mb-2">
                                Prénom *
                            </label>
                            <input
                                type="text"
                                id="firstName"
                                name="firstName"
                                required
                                class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Votre prénom"
                            />
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-neutral-700 mb-2">
                                Nom *
                            </label>
                            <input
                                type="text"
                                id="lastName"
                                name="lastName"
                                required
                                class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Votre nom"
                            />
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-neutral-700 mb-2">
                            Email *
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            required
                            class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="votre@email.com"
                        />
                    </div>

                    <div>
                        <label for="company" class="block text-sm font-medium text-neutral-700 mb-2">
                            Entreprise
                        </label>
                        <input
                            type="text"
                            id="company"
                            name="company"
                            class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Nom de votre entreprise"
                        />
                    </div>

                    <div>
                        <label for="project" class="block text-sm font-medium text-neutral-700 mb-2">
                            Type de projet
                        </label>
                        <select
                            id="project"
                            name="project"
                            class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        >
                            <option value="">Sélectionnez votre besoin</option>
                            <option value="audit">Audit de marché international</option>
                            <option value="strategy">Stratégie d'expansion nordique</option>
                            <option value="communication">Conseil en communication globale</option>
                            <option value="other">Autre</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-neutral-700 mb-2">
                            Message *
                        </label>
                        <textarea
                            id="message"
                            name="message"
                            rows="4"
                            required
                            class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Décrivez votre projet et vos objectifs..."
                        ></textarea>
                    </div>

                    <button type="submit" class="w-full btn-primary py-4">
                        Envoyer le message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>