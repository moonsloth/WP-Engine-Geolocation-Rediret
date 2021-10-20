<?php

function city_geo_redirect() {

// Grab Current City and State Location
$city = getenv( 'HTTP_GEOIP_CITY' );
$state = getenv( 'HTTP_GEOIP_REGION' );

// Concatenate into City, State format
$city_state = getenv( 'HTTP_GEOIP_CITY' ) . ", " . $state;

// List Cities you want to trigger redirect
$city_list = array("Hancock, WV", "Brooke, WV", "Ohio, WV", "Marshall, WV", "Wetzel, WV", "Monongalia, WV", "Preston, WV", "Marion, WV", "Taylor, WV", "Harrison, WV", "Tyler, WV", "Doddridge, WV", "Pleasants, WV", "Barbour, WV", "Tucker, WV", "Grant, WV", "Mineral, WV", "Hardy, WV", "Hampshire, WV", "Pendleton, WV");

//Check if the visitor's city & state match any item in the array and redirect
if (in_array( $city_state, $city_list) ) {

    wp_redirect( 'https://pittsburgh.bachmansroofing.com', 302 );
    exit;

}

}

add_action('init', 'city_geo_redirect');