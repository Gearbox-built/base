<?php

namespace App;

trait Blocks
{
    public static $blocks;

    public function __construct()
    {
        self::$blocks = get_field('blocks');
    }

    public function blocks()
    {
        return self::$blocks;
    }

    public static function getBlockData()
    {
        if (empty(self::$blocks)) {
            return;
        }

        $defaults = [];
        $data = self::$blocks[get_row_index() - 1];

        if (!empty($defaults[get_row_layout()])) {
            $data = array_merge($defaults[get_row_layout()], $data);
        }

        $data = self::setupBlockController($data);

        return $data;
    }

    private static function setupBlockController($data)
    {
        $layout = $data['acf_fc_layout'];
        $block = str_replace('_', '', ucwords($layout, '_'));
        $blocks_path = dirname(get_template_directory()) . "/app/contollers/blocks/";
        $controller_path = "{$blocks_path}/{$block}.php";
        $class = __NAMESPACE__ . '\\' . $block;

        if (file_exists($controller_path)) {
            require_once $controller_path;
        }

        if (class_exists($class)) {
            $controller = new $class();
            $controller->__setup();

            // Class alais
            if (!class_exists($block)) {
                class_alias($class, $block);
            }

            // Merge all the data together
            $data = array_merge($data, $controller->__getData());
        }

        return $data;
    }
}
