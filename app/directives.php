<?php

namespace App;

/**
 * ACF Blade directives
 */
add_action('after_setup_theme', function () {

    /**
     * Create field directive for get_field
     *
     * @param string $field
     * @param mixed  $post (optional)
     * @return mixed
     */
    sage('blade')->compiler()->directive('field', function ($arguments) {
        list($field, $post) = explode(',',str_replace(['(',')',' ', "'"], '', $arguments));

        if($field) {
            return get_field($field, $post);
        }
    });

    /**
     * Create subfield directive for get_sub_field
     *
     * @param string $field
     * @param mixed  $post (optional)
     * @return mixed
     */
    sage('blade')->compiler()->directive('subfield', function ($arguments) {
        list($field, $post) = explode(',',str_replace(['(',')',' ', "'"], '', $arguments));

        if($field) {
            return get_sub_field($field, $post);
        }
    });
});
