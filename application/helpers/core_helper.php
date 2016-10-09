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

if (!function_exists('multyLang')) {

    function multyLang($ua, $ru, $return = false) {
        if ($return) {
            return getCurrentLang() == 'ua' ? $ua : $ru;
        } else {
            echo getCurrentLang() == 'ua' ? $ua : $ru;
        }
    }

}

if (!function_exists('switchLang')) {

    function switchLang() {
        $lang = getCurrentLang();
        $url = $_SERVER['REQUEST_URI'];

        $urlUA = str_replace('/ru', '/ua', $url);
        $urlRU = str_replace('/ua', '/ru', $url);

        $l = '';
        $l .= ($lang == 'ua') ? "<a class='active'>Укр</a>" : "<a href='$urlUA'>Укр</a>";
        $l .= " | ";
        $l .= ($lang == 'ru') ? "<a class='active'>Рус</a>" : "<a href='$urlRU'>Рус</a>";

        return $l;
    }
    
}
