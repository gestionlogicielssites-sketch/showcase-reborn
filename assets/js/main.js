/**
 * Script principal pour le thème Thierry Robert
 * Gestion des interactions et animations
 */

(function($) {
    'use strict';

    // Variables globales
    let isScrolling = false;
    let lastScrollTop = 0;

    /**
     * Initialisation au chargement du DOM
     */
    $(document).ready(function() {
        initNavigation();
        initScrollEffects();
        initContactForm();
        initAnimations();
        initAccessibility();
    });

    /**
     * Gestion de la navigation
     */
    function initNavigation() {
        // Navigation mobile
        const mobileToggle = $('#mobile-menu-toggle');
        const mobileMenu = $('#mobile-menu');

        if (mobileToggle.length && mobileMenu.length) {
            mobileToggle.on('click', function(e) {
                e.preventDefault();
                mobileMenu.toggleClass('hidden');
                $(this).attr('aria-expanded', !mobileMenu.hasClass('hidden'));
            });
        }

        // Navigation smooth scroll
        $('a[href^="#"]').on('click', function(e) {
            const target = $(this.getAttribute('href'));
            
            if (target.length) {
                e.preventDefault();
                const offsetTop = target.offset().top - 80; // Compensation pour header fixe

                $('html, body').animate({
                    scrollTop: offsetTop
                }, 800, 'easeInOutCubic');

                // Fermer le menu mobile si ouvert
                if (!mobileMenu.hasClass('hidden')) {
                    mobileMenu.addClass('hidden');
                    mobileToggle.attr('aria-expanded', false);
                }
            }
        });

        // Header scroll effects
        $(window).on('scroll', throttle(function() {
            const scrollTop = $(window).scrollTop();
            const header = $('header');

            if (scrollTop > 100) {
                header.addClass('scrolled');
            } else {
                header.removeClass('scrolled');
            }

            // Auto-hide header on scroll down
            if (scrollTop > lastScrollTop && scrollTop > 200) {
                header.addClass('hidden');
            } else {
                header.removeClass('hidden');
            }

            lastScrollTop = scrollTop;
        }, 100));
    }

    /**
     * Effets de scroll et parallax
     */
    function initScrollEffects() {
        // Intersection Observer pour les animations
        if ('IntersectionObserver' in window) {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observer les éléments à animer
            $('.service-card, .wp-block-group.is-style-card, .stat-number').each(function() {
                observer.observe(this);
            });
        }

        // Parallax simple pour les images
        $(window).on('scroll', throttle(function() {
            const scrolled = $(window).scrollTop();
            const parallaxElements = $('.parallax-element');

            parallaxElements.each(function() {
                const rate = scrolled * -0.5;
                $(this).css('transform', 'translateY(' + rate + 'px)');
            });
        }, 16));
    }

    /**
     * Gestion du formulaire de contact
     */
    function initContactForm() {
        const contactForm = $('#contact-form');
        
        if (contactForm.length) {
            contactForm.on('submit', function(e) {
                e.preventDefault();
                
                const formData = new FormData(this);
                const submitButton = $(this).find('button[type="submit"]');
                const originalText = submitButton.text();

                // Animation de chargement
                submitButton.text('Envoi...').prop('disabled', true);

                // Simulation d'envoi (remplacer par vraie logique AJAX)
                setTimeout(function() {
                    showNotification('Message envoyé avec succès !', 'success');
                    contactForm[0].reset();
                    submitButton.text(originalText).prop('disabled', false);
                }, 2000);
            });

            // Validation en temps réel
            contactForm.find('input, textarea').on('blur', function() {
                validateField($(this));
            });
        }

        // Gestion des paramètres URL pour le feedback
        const urlParams = new URLSearchParams(window.location.search);
        const contactStatus = urlParams.get('contact');
        
        if (contactStatus === 'success') {
            showNotification('Votre message a été envoyé avec succès !', 'success');
        } else if (contactStatus === 'error') {
            showNotification('Une erreur est survenue. Veuillez réessayer.', 'error');
        }
    }

    /**
     * Animations et transitions
     */
    function initAnimations() {
        // Animation des statistiques
        animateCounters();

        // Animation des cartes au hover
        $('.service-card').on('mouseenter', function() {
            $(this).addClass('hover');
        }).on('mouseleave', function() {
            $(this).removeClass('hover');
        });

        // Animation des boutons
        $('.btn-primary, .btn-secondary').on('click', function(e) {
            createRippleEffect(e, $(this));
        });
    }

    /**
     * Amélioration de l'accessibilité
     */
    function initAccessibility() {
        // Gestion du focus au clavier
        $(document).on('keydown', function(e) {
            // Échapper ferme les menus
            if (e.key === 'Escape') {
                const mobileMenu = $('#mobile-menu');
                if (!mobileMenu.hasClass('hidden')) {
                    mobileMenu.addClass('hidden');
                    $('#mobile-menu-toggle').attr('aria-expanded', false).focus();
                }
            }
        });

        // Skip links
        $('.skip-link').on('click', function(e) {
            const target = $($(this).attr('href'));
            if (target.length) {
                target.attr('tabindex', '-1').focus();
            }
        });

        // Amélioration du contraste au focus
        $('a, button, input, textarea, select').on('focus', function() {
            $(this).addClass('focus-visible');
        }).on('blur', function() {
            $(this).removeClass('focus-visible');
        });
    }

    /**
     * Fonctions utilitaires
     */

    // Throttle pour optimiser les performances
    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }

    // Animation des compteurs
    function animateCounters() {
        $('.stat-number').each(function() {
            const $this = $(this);
            const finalValue = parseInt($this.text().replace(/\D/g, ''));
            const suffix = $this.text().replace(/\d/g, '');
            
            if (finalValue > 0) {
                $({ countNum: 0 }).animate({
                    countNum: finalValue
                }, {
                    duration: 2000,
                    easing: 'easeOutCubic',
                    step: function() {
                        $this.text(Math.floor(this.countNum) + suffix);
                    },
                    complete: function() {
                        $this.text(finalValue + suffix);
                    }
                });
            }
        });
    }

    // Validation des champs de formulaire
    function validateField($field) {
        const value = $field.val().trim();
        const type = $field.attr('type');
        const isRequired = $field.prop('required');
        let isValid = true;
        let message = '';

        // Vérification des champs requis
        if (isRequired && !value) {
            isValid = false;
            message = 'Ce champ est requis';
        }

        // Validation de l'email
        if (type === 'email' && value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                isValid = false;
                message = 'Veuillez entrer une adresse email valide';
            }
        }

        // Affichage du feedback
        $field.removeClass('invalid valid');
        $field.siblings('.field-error').remove();

        if (!isValid) {
            $field.addClass('invalid');
            $field.after('<span class="field-error">' + message + '</span>');
        } else if (value) {
            $field.addClass('valid');
        }

        return isValid;
    }

    // Affichage des notifications
    function showNotification(message, type = 'info') {
        const notification = $('<div class="notification notification-' + type + '">' + message + '</div>');
        
        $('body').append(notification);
        
        setTimeout(function() {
            notification.addClass('show');
        }, 100);

        setTimeout(function() {
            notification.removeClass('show');
            setTimeout(function() {
                notification.remove();
            }, 300);
        }, 5000);
    }

    // Effet ripple pour les boutons
    function createRippleEffect(e, $button) {
        const ripple = $('<span class="ripple"></span>');
        const rect = $button[0].getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;

        ripple.css({
            width: size,
            height: size,
            left: x,
            top: y
        });

        $button.append(ripple);

        setTimeout(function() {
            ripple.remove();
        }, 600);
    }

    // Easing personnalisé
    $.easing.easeInOutCubic = function(x) {
        return x < 0.5 ? 4 * x * x * x : 1 - Math.pow(-2 * x + 2, 3) / 2;
    };

    $.easing.easeOutCubic = function(x) {
        return 1 - Math.pow(1 - x, 3);
    };

})(jQuery);

/**
 * Code vanilla JS pour les fonctionnalités critiques
 */
document.addEventListener('DOMContentLoaded', function() {
    // Lazy loading des images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    observer.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(function(img) {
            imageObserver.observe(img);
        });
    }

    // Préchargement des ressources critiques
    const criticalResources = [
        '/wp-content/themes/thierry-theme/assets/css/wordpress-theme.css',
        '/wp-content/themes/thierry-theme/assets/css/wordpress-blocks.css'
    ];

    criticalResources.forEach(function(resource) {
        const link = document.createElement('link');
        link.rel = 'preload';
        link.href = resource;
        link.as = 'style';
        document.head.appendChild(link);
    });
});