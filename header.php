<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-neutral-200">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <span class="text-xl font-semibold text-neutral-800">
                    <?php bloginfo('name'); ?>
                </span>
            </div>

            <!-- Navigation Desktop -->
            <nav class="hidden md:flex items-center gap-8">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'flex items-center gap-8',
                    'fallback_cb' => function() {
                        echo '<a href="#about" class="nav-link">À Propos</a>';
                        echo '<a href="#expertise" class="nav-link">Expertise</a>';
                        echo '<a href="#services" class="nav-link">Services</a>';
                        echo '<a href="#contact" class="nav-link">Contact</a>';
                    }
                ));
                ?>
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="#contact" class="btn-primary">
                    Discutons ensemble
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden p-2 rounded-lg hover:bg-neutral-100 transition-colors" id="mobile-menu-toggle">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden border-t border-neutral-200 py-4 hidden" id="mobile-menu">
            <nav class="flex flex-col gap-4">
                <a href="#about" class="nav-link">À Propos</a>
                <a href="#expertise" class="nav-link">Expertise</a>
                <a href="#services" class="nav-link">Services</a>
                <a href="#contact" class="nav-link">Contact</a>
                <a href="#contact" class="btn-primary mt-4">
                    Discutons ensemble
                </a>
            </nav>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('mobile-menu');
    
    toggle?.addEventListener('click', function() {
        menu?.classList.toggle('hidden');
    });
});
</script>