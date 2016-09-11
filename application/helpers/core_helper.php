<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('site_name')) {

    function site_name() {
        $url = str_replace('http://', '', base_url());
        return str_replace('/', '', $url);
    }

}

if (!function_exists('base_lang_url')) {

    function base_lang_url() {
        return base_url() . getCurrentLang() . '/';
    }

}

if (!function_exists('getCurrentLang')) {

    function getCurrentLang() {
        return get_instance()->uri->segment(1);
    }

}
