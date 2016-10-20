<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'libraries/Tpl.php' );

class Tables {
    
    private $data;           // дані передані з контролера
    private $content = '';   // готова HTML таблиця
    
    function __construct() {
        $this->tpl = new Tpl();
    }
    
    public function dataview($obj, $dsName, $view, $head) {
        $this->settings($obj, $dsName, $view, $head);
        
        // creating table
        $this->start();
        $this->setHead();
        $this->end();
        
        // return string: html-content
        return $this->content;
    }
    
    private function settings($obj, $dsName, $view, $head) {
        $this->obj = $obj;
        $this->data = $this->obj->{$dsName}();
        $this->view = 'dataview/' . $view . '.tpl';
        $this->head = $head;
    }
    
    private function start() {
        $this->content .= '<div class="table-dataview-container">';
        $this->content .= '<table class="dataview-table table table-hover" celspacing="0" cellspacing="0"><tbody>';
    }
    
    // формує з масиву заголовки таблиці, де значення масиву, ключ елементу у views_lang
    private function setHead() {
        $head = '<tr>';

        foreach ($this->head as $key) {
            $head .= '<th>';
            $head .= lang($key);
            $head .= '</th>';
        }

        $head .= '</tr>';

        $this->content .= $head;
    }
    
    private function end() {
        $this->content .= '</tbody></table>';
        $this->content .= '</div>';
    }
}