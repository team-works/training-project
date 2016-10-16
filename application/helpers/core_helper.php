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
if (!function_exists('initPagination')) {

    function initPagination($total) {
        $CI = & get_instance();
        $CI->load->library('pagination');

        $config['base_url'] = $_SERVER['PATH_INFO'];
//        $config['base_url'] = site_url();
        $config['total_rows'] = $total;

        $CI->pagination->initialize($config);

        return $CI->pagination->create_links();
    }

}

if (!function_exists('initBreadcrumbs')) {

    function initBreadcrumbs($breadArray) {
        $CI = & get_instance();

        // load Breadcrumbs
        $CI->load->library('breadcrumbs');
        // add breadcrumbs
        return $CI->breadcrumbs->run($breadArray);
    }

}

if (!function_exists('switchLang')) {

    function switchLang() {
        $lang = getCurrentLang();
        $url = $_SERVER['REQUEST_URI'];

        $urlUA = str_replace('/ru', '/ua', $url);
        $urlRU = str_replace('/ua', '/ru', $url);

        $l = '';
        $l .= ($lang == 'ua') ? "<a class='active'>Укр </a>" : "<a href='$urlUA'>Укр</a>";
        $l .= "<span class='lang-delimiter'></span>";
        $l .= ($lang == 'ru') ? "<a class='active'> Рус</a>" : "<a href='$urlRU'>Рус</a>";

        return $l;
    }

    if (!function_exists('formSelect')) {
        /* param $array == result_array()
         * param $activeOpt int
         */

        function formSelect($array, $activeOpt = 0, $selectName, $select = 'selectOption') {
            $res = '<select name="' . $selectName . '" >';
            $res .= '<option value="0">' . lang($select) . '</option>';

            foreach ($array as $key => $name) {
                $selected = ( $key == $activeOpt ) ? 'selected' : '';
                $res .= '<option value="' . $key . '" ' . $selected . ' >' . $name[getCurrentLang()] . '</option>';
            }

            $res .= '</select>';
            return $res;
        }

    }
}

if (!function_exists('getContacts')) {

    function getContacts() {
        $CI = & get_instance();
        $CI->load->model('Contacts_model', 'contacts');
        
        return $CI->contacts->pageContacts();
    }

}

if (!function_exists('isAdmin')) {

    function isAdmin() {
        $CI = & get_instance();
        if ($CI->ion_auth->is_admin()) {
            return TRUE;
        }
        return FALSE;
    }

}

if (!function_exists('getBasketCount')) {

    function getBasketCount() {
        $CI = & get_instance();
        $CI->load->model('Basket_model', 'basket');
        
        $uid = isset($_COOKIE[BASKET_UID]) ? $_COOKIE[BASKET_UID] : 0;
        $lng = get_instance()->uri->segment(1);
        $txt = ($lng == 'ua') ? 'товарів' : 'товаров' ;
        
        $res = $CI->basket->getBasketVal($uid);
        $html = sprintf('<div class="basket" id="basket">
                            <div class="ico"></div>
                            <span class="count" id="count">%d</span>
                            <span class="text">%s,</span>
                            <span class="cost" id="cost">%d</span>
                            <span class="text">грн</span>
                        </div>'
                , $res['count']
                , $txt
                , $res['cost'] );
        
        echo $html;
    }

}