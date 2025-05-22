<?php
// Enqueue theme styles and custom inline CSS
function online_education_enqueue_styles() {
    wp_enqueue_style('online-education-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'online_education_enqueue_styles');

// Custom Header Support
add_theme_support('custom-header', array(
    'width'              => 1920,
    'height'             => 400,
    'flex-height'        => true,
    'flex-width'         => true,
    'header-text'        => true,
    'default-text-color' => '000000',
    'wp-head-callback'   => 'online_education_classes_header_style',
));

// Custom Background
add_theme_support('custom-background', array(
    'default-color' => 'ffffff',
));

// Style the Header
function online_education_classes_header_style() {
    $header_image = get_header_image();
    $header_text_color = get_header_textcolor();
    $default_text_color = get_theme_support('custom-header', 'default-text-color');

    $custom_css = '';

    if ($default_text_color !== $header_text_color || !empty($header_image)) {
        if (!empty($header_image)) {
            $custom_css .= "
                #custom-header {
                    background-image: url(" . esc_url($header_image) . ");
                    background-repeat: no-repeat;
                    background-position: 50% 50%;
                    background-size: cover;
                }
            ";
        }

        if ('blank' === $header_text_color || '' !== $header_text_color) {
            $custom_css .= "
                .site-title a, .site-description {
                    color: #" . esc_attr($header_text_color) . ";
                }
            ";
        }

        wp_add_inline_style('online-education-style', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'online_education_classes_header_style');

// Remove Customizer Header Text Checkbox
function online_education_classes_remove_header_text_display_checkbox($wp_customize) {
    $wp_customize->remove_control('display_header_text');
}
add_action('customize_register', 'online_education_classes_remove_header_text_display_checkbox', 11);

// Custom Logo
function online_education_classes_logo_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 65,
        'width'       => 350,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'online_education_classes_logo_setup');

// Logo Dynamic CSS
function online_education_classes_logo_dynamic_css() {
    $logo_width = get_theme_mod('online_education_classes_logo_width', 150);

    $custom_css = "
        .logo .custom-logo {
            max-width: {$logo_width}px;
            height: auto;
        }
    ";

    wp_add_inline_style('online-education-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'online_education_classes_logo_dynamic_css');

// Button Styling
function online_education_classes_custom_button_styles() {
    $radius = get_theme_mod('online_education_classes_button_border_radius', '0px');
    $padding = get_theme_mod('online_education_classes_button_padding', '10px 35px');

    $custom_css = "
        .btn,
        .button,
        button,
        input[type='submit'],
        .wp-block-button__link,
        #blog-section .read-more a,
        .read-more a,
        a.btn-slid.btn {
            border-radius: {$radius};
            padding: {$padding};
        }
    ";

    wp_add_inline_style('online-education-style', $custom_css);
}
add_action('wp_enqueue_scripts', 'online_education_classes_custom_button_styles');

// Font Customization
function online_education_classes_customize_fonts() {
    $body_font = get_theme_mod('online_education_classes_body_font_family', 'Poppins, sans-serif');
    $heading_font = get_theme_mod('online_education_classes_heading_font_family', 'Poppins, sans-serif');

    $body_font_name = trim(explode(',', $body_font)[0]);
    $heading_font_name = trim(explode(',', $heading_font)[0]);

    $google_fonts_url = 'https://fonts.googleapis.com/css2?family=' . urlencode($body_font_name) . '&family=' . urlencode($heading_font_name) . '&display=swap';

    wp_enqueue_style('online-education-classes-fonts', $google_fonts_url, array(), null);

    $custom_css = "
        body, p, span, label, div {
            font-family: {$body_font};
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: {$heading_font};
        }
    ";

    wp_add_inline_style('online-education-classes-fonts', $custom_css);
}
add_action('wp_enqueue_scripts', 'online_education_classes_customize_fonts');
