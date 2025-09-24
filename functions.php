<?php
/**
 * Theme Name: Thierry Robert - Marketing International
 * Description: Thème WordPress professionnel pour expert en marketing international et stratégie culturelle nordique
 * Version: 1.0
 * Author: Thierry Robert
 */

// Empêcher l'accès direct
if (!defined('ABSPATH')) {
    exit;
}

// Constantes du thème
define('THEME_VERSION', '1.0');
define('THEME_PATH', get_template_directory());
define('THEME_URI', get_template_directory_uri());

/**
 * Configuration du thème
 */
function thierry_theme_setup() {
    // Support pour les titres automatiques
    add_theme_support('title-tag');
    
    // Support pour les images à la une
    add_theme_support('post-thumbnails');
    
    // Support pour les menus
    add_theme_support('menus');
    
    // Support pour les extraits sur les pages
    add_post_type_support('page', 'excerpt');
    
    // Support pour l'éditeur de blocs
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    
    // Support pour les couleurs personnalisées
    add_theme_support('custom-background');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Enregistrement des menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'thierry-theme'),
        'footer'  => __('Menu Footer', 'thierry-theme'),
    ));
    
    // Tailles d'images personnalisées
    add_image_size('hero-image', 800, 600, true);
    add_image_size('service-card', 400, 300, true);
    add_image_size('blog-thumbnail', 350, 250, true);
}
add_action('after_setup_theme', 'thierry_theme_setup');

/**
 * Enregistrement des styles et scripts
 */
function thierry_theme_assets() {
    // Styles principaux
    wp_enqueue_style(
        'thierry-theme-style',
        get_stylesheet_uri(),
        array(),
        THEME_VERSION
    );
    
    // Styles WordPress spécifiques
    wp_enqueue_style(
        'thierry-wordpress-theme',
        THEME_URI . '/assets/css/wordpress-theme.css',
        array('thierry-theme-style'),
        THEME_VERSION
    );
    
    // Styles des blocs WordPress
    wp_enqueue_style(
        'thierry-wordpress-blocks',
        THEME_URI . '/assets/css/wordpress-blocks.css',
        array('thierry-wordpress-theme'),
        THEME_VERSION
    );
    
    // Google Fonts
    wp_enqueue_style(
        'thierry-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );
    
    // Scripts
    wp_enqueue_script(
        'thierry-theme-script',
        THEME_URI . '/assets/js/main.js',
        array('jquery'),
        THEME_VERSION,
        true
    );
    
    // Localisation pour AJAX
    wp_localize_script('thierry-theme-script', 'thierry_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('thierry_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'thierry_theme_assets');

/**
 * Enregistrement des zones de widgets
 */
function thierry_theme_widgets() {
    register_sidebar(array(
        'name'          => __('Sidebar Principal', 'thierry-theme'),
        'id'            => 'main-sidebar',
        'description'   => __('Zone de widgets principal', 'thierry-theme'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 1', 'thierry-theme'),
        'id'            => 'footer-1',
        'description'   => __('Première colonne du footer', 'thierry-theme'),
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 2', 'thierry-theme'),
        'id'            => 'footer-2',
        'description'   => __('Deuxième colonne du footer', 'thierry-theme'),
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 3', 'thierry-theme'),
        'id'            => 'footer-3',
        'description'   => __('Troisième colonne du footer', 'thierry-theme'),
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'thierry_theme_widgets');

/**
 * Personnalisation de l'éditeur Gutenberg
 */
function thierry_theme_editor_styles() {
    add_editor_style('assets/css/editor-style.css');
}
add_action('admin_init', 'thierry_theme_editor_styles');

/**
 * Ajout de classes CSS personnalisées pour Gutenberg
 */
function thierry_theme_block_styles() {
    // Style pour les groupes
    register_block_style('core/group', array(
        'name'  => 'card',
        'label' => __('Carte', 'thierry-theme'),
    ));
    
    register_block_style('core/group', array(
        'name'  => 'highlight',
        'label' => __('Mise en évidence', 'thierry-theme'),
    ));
    
    // Style pour les boutons
    register_block_style('core/button', array(
        'name'  => 'primary',
        'label' => __('Primaire', 'thierry-theme'),
    ));
    
    register_block_style('core/button', array(
        'name'  => 'secondary',
        'label' => __('Secondaire', 'thierry-theme'),
    ));
}
add_action('init', 'thierry_theme_block_styles');

/**
 * Palette de couleurs personnalisées pour l'éditeur
 */
function thierry_theme_editor_color_palette() {
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => __('Primaire', 'thierry-theme'),
            'slug'  => 'primary',
            'color' => '#2563eb',
        ),
        array(
            'name'  => __('Secondaire', 'thierry-theme'),
            'slug'  => 'secondary',
            'color' => '#64748b',
        ),
        array(
            'name'  => __('Accent', 'thierry-theme'),
            'slug'  => 'accent',
            'color' => '#f97316',
        ),
        array(
            'name'  => __('Neutre 800', 'thierry-theme'),
            'slug'  => 'neutral-800',
            'color' => '#1f2937',
        ),
        array(
            'name'  => __('Neutre 600', 'thierry-theme'),
            'slug'  => 'neutral-600',
            'color' => '#4b5563',
        ),
        array(
            'name'  => __('Neutre 50', 'thierry-theme'),
            'slug'  => 'neutral-50',
            'color' => '#f9fafb',
        ),
    ));
}
add_action('after_setup_theme', 'thierry_theme_editor_color_palette');

/**
 * Sécurité et optimisations
 */
// Retirer la version WordPress des headers
remove_action('wp_head', 'wp_generator');

// Désactiver l'API REST pour les non-connectés (optionnel)
add_filter('rest_authentication_errors', function($result) {
    if (!empty($result)) {
        return $result;
    }
    if (!is_user_logged_in()) {
        return new WP_Error('rest_not_logged_in', 'Vous devez être connecté pour accéder à l\'API REST.', array('status' => 401));
    }
    return $result;
});

/**
 * Optimisations de performance
 */
// Désactiver les emojis WordPress
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Nettoyer le header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');

/**
 * Fonctions utilitaires
 */
function thierry_get_excerpt($limit = 150) {
    $excerpt = get_the_excerpt();
    if (strlen($excerpt) > $limit) {
        $excerpt = substr($excerpt, 0, $limit) . '...';
    }
    return $excerpt;
}

function thierry_reading_time($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    $content = get_post_field('post_content', $post_id);
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // 200 mots par minute
    return $reading_time;
}

/**
 * Gestion des formulaires de contact
 */
function thierry_handle_contact_form() {
    if (!wp_verify_nonce($_POST['thierry_contact_nonce'], 'thierry_contact_form')) {
        wp_die('Erreur de sécurité');
    }
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $company = sanitize_text_field($_POST['company']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Validation basique
    if (empty($name) || empty($email) || empty($message)) {
        wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
        exit;
    }
    
    // Envoi de l'email
    $to = get_option('admin_email');
    $subject = 'Nouveau message de contact - ' . get_bloginfo('name');
    $body = "Nom: {$name}\n";
    $body .= "Email: {$email}\n";
    $body .= "Entreprise: {$company}\n\n";
    $body .= "Message:\n{$message}";
    
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <' . get_option('admin_email') . '>',
        'Reply-To: ' . $name . ' <' . $email . '>'
    );
    
    if (wp_mail($to, $subject, $body, $headers)) {
        wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
    } else {
        wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
    }
    exit;
}
add_action('wp', 'thierry_handle_contact_form');

/**
 * Métadonnées SEO basiques
 */
function thierry_seo_meta() {
    if (is_front_page()) {
        echo '<meta name="description" content="Expert en marketing international et stratégie culturelle nordique. Spécialisation unique dans les cultures scandinaves pour votre expansion internationale.">' . "\n";
        echo '<meta name="keywords" content="marketing international, stratégie culturelle, cultures nordiques, expansion internationale, développement commercial">' . "\n";
    } elseif (is_single() || is_page()) {
        $excerpt = get_the_excerpt();
        if ($excerpt) {
            echo '<meta name="description" content="' . esc_attr($excerpt) . '">' . "\n";
        }
    }
    
    // Open Graph
    echo '<meta property="og:site_name" content="' . get_bloginfo('name') . '">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:url" content="' . get_permalink() . '">' . "\n";
    
    if (has_post_thumbnail()) {
        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
        echo '<meta property="og:image" content="' . $thumbnail[0] . '">' . "\n";
    }
}
add_action('wp_head', 'thierry_seo_meta');

/**
 * Ajout de données structurées JSON-LD
 */
function thierry_structured_data() {
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            'name' => 'Thierry Robert',
            'jobTitle' => 'Expert en Marketing International et Stratégie Culturelle',
            'description' => 'Expert en marketing international avec spécialisation dans les cultures nordiques',
            'url' => home_url(),
            'sameAs' => array(
                // Ajouter les liens sociaux ici
            ),
            'knowsAbout' => array(
                'Marketing International',
                'Cultures Nordiques',
                'Développement Commercial',
                'Stratégie Culturelle'
            ),
            'areaServed' => array(
                'Europe',
                'Pays Nordiques',
                'Scandinavie'
            )
        );
        
        echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }
}
add_action('wp_head', 'thierry_structured_data');