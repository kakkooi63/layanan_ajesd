<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('assets_url')) {
    function assets_backend($uri = '', $group = FALSE) {
        $CI = & get_instance();
        if (!$dir = $CI->config->item('assets_path'))
            $dir = 'assets/backend/'; 

        if ($group) return $CI->config->base_url($dir . $group . '/' . $uri);
        return $CI->config->base_url($dir . $uri);
    }
}