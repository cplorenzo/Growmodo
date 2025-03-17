<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style','hello-elementor-header-footer' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

// BEGIN ADD BOOTSTRAP
function enqueue_bootstrap_styles() {
	wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_styles');
// END ADD BOOTSTRAP

// BEGIN INITIALIZE SLICK SLIDER
function initialize_slick_slider() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.faq-slider').slick({
                autoplay: true,
                autoplaySpeed: 3000,
                dots: false,
                arrows: false,
                infinite: true,
                speed: 500,
                fade: false,
                slidesToShow: 3,  // Show 3 items per slide
                slidesToScroll: 1,
            });

            function equalizeFAQHeight() {
                $('.faq-slider-wrapper .row').each(function() {
                    let maxHeight = 0;

                    // Reset height before recalculating
                    $(this).find('.faq-item').css('height', 'auto');

                    // Find the tallest item
                    $(this).find('.faq-item').each(function() {
                        let thisHeight = $(this).outerHeight();
                        if (thisHeight > maxHeight) {
                            maxHeight = thisHeight;
                        }
                    });

                    // Apply max height to all items in this row
                    $(this).find('.faq-item').css('height', maxHeight + 'px');
                });
            }

            // Run on page load & when window resizes
            equalizeFAQHeight();
            $(window).resize(equalizeFAQHeight);
        });
    </script>
    <?php
}
add_action('wp_footer', 'initialize_slick_slider');
// END INITIALIZE SLICK SLIDER

// BEGIN SHORTCODE FOR DISPLAYING FAQS
function show_faqs_func( $atts ) {
    $query = new WP_Query( array(
        'post_type'      => 'faq', 
        'post_status'    => 'publish', 
        'posts_per_page' => 9 // Ensures enough items for a 3-column layout
    ) );

    if ( $query->have_posts() ) :
        $string = '<div class="faq-slider-wrapper container-fluid text-center">';
        $string .= '<div class="faq-slider row d-flex align-items-stretch">'; 
        
        while ( $query->have_posts() ) : $query->the_post();
            $string .= '<div class="faq-item col-md-4 col-sm-12 d-flex align-items-stretch">'; 
                $string .= '<div class="faq-card w-100 d-flex flex-column">'; 
                
                if ( get_field('question') ): 
                    $string .= '<h3 class="faq-question">' . esc_html( get_field('question') ) . '</h3>';
                endif;

                if ( get_field('excerpt_answer') ): 
                    $string .= '<h4 class="faq-excerpt-answer">Priced From ' . esc_html( get_field('excerpt_answer') ) . '</h4>';
                endif;

                $string .= '<div class="mt-auto">'; // Pushes the button to the bottom
                $string .= '<p class="learn-more-wrapper"><a class="btn learn-more" href="#" role="button">Read More</a></p>';
                $string .= '</div>'; // End button wrapper
                
                $string .= '</div>'; // End faq-card
            $string .= '</div>'; // End faq-item
        endwhile;

        $string .= '</div>'; // End faq-slider row
        $string .= '</div>'; // End faq-slider-wrapper
    endif;

    wp_reset_postdata();
    return $string;
}
add_shortcode('show_faqs', 'show_faqs_func');
// END SHORTCODE FOR DISPLAYING FAQS

