<?php

namespace App;

// Options page
if(function_exists('acf_add_options_page')) {
    $settings = acf_add_options_page([
        'page_title' => 'Theme Settings',
    ]);

    acf_add_options_sub_page([
        'page_title'    => 'Theme Content',
        'parent_slug'   => $settings['menu_slug']
    ]);
}
