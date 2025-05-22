<?php
/**
 * Online Education Classes Theme Customizer Data Sanitization
 *
 * @package Online Education Classes
 */


/**
 * Sanitize checkbox.
 *
 * @param bool $checked Whether the checkbox is checked.
 * @return bool Whether the checkbox is checked.
 */
if ( ! function_exists( 'online_education_classes_sanitize_checkbox' ) ) :
function online_education_classes_sanitize_checkbox( $checked ) {
    // Boolean check.
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}
endif;


/**
 * String sanitization.
 *
 * @see sanitize_text_field() https://developer.wordpress.org/reference/functions/sanitize_text_field/
 *
 * @param string $str to sanitize.
 * @return string Sanitized string.
 */
if ( ! function_exists( 'online_education_classes_sanitize_text_field' ) ) :
function online_education_classes_sanitize_text_field( $str ) {
    return sanitize_text_field( $str );
}
endif;


/**
 * Number sanitization.
 *
 * @see absint() https://developer.wordpress.org/reference/functions/absint/
 *
 * @param mixed $str to sanitize.
 * @return int, A non-negative integer.
 */
if ( ! function_exists( 'online_education_classes_sanitize_number' ) ) :
function online_education_classes_sanitize_number( $str ) {
    return absint( $str );
}
endif;

/**
 * Multiline String sanitization.
 *
 * @see sanitize_textarea_field() https://developer.wordpress.org/reference/functions/sanitize_textarea_field/
 *
 * @param string $str to sanitize.
 * @return string Sanitized string.
 */
if ( ! function_exists( 'online_education_classes_sanitize_textarea_field' ) ) :
function online_education_classes_sanitize_textarea_field( $str ) {
    return sanitize_textarea_field( $str );
}
endif;


/**
 * Select sanitization.
 */
if ( ! function_exists( 'online_education_classes_sanitize_select' ) ) :
function online_education_classes_sanitize_select( $input, $setting ) {
	// Ensure input is a slug.
	$input = sanitize_key( $input );
	// Get list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;
	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}
endif;

/**
 * Title sanitization.
 */
if ( ! function_exists( 'online_education_classes_sanitize_title' ) ) :
function online_education_classes_sanitize_title( $str ) {
	return sanitize_title( $str );	
}
endif;


/**
 * Sanitize image.
 *
 * @param string               $image   Image filename.
 * @param WP_Customize_Setting $setting Setting instance.
 * @return string The image filename if the extension is allowed; otherwise, the setting default.
 */
if ( ! function_exists( 'online_education_classes_sanitize_image' ) ) :
function online_education_classes_sanitize_image( $image, $setting ) {
    /*
     * Array of valid image file types.
     *
     * The array includes image mime types that are included in wp_get_mime_types()
     */
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );
    // Return an array with file extension and mime_type.
    $file = wp_check_filetype( $image, $mimes );
    // If $image has a valid mime_type, return it; otherwise, return the default.
    return ( $file['ext'] ? $image : $setting->default );
}
endif;