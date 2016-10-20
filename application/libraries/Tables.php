<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'libraries/Tpl.php' );

class Tables {
    
    private $content = '';   // готова HTML таблиця
    
    function __construct() {
        $this->tpl = new Tpl();
    }
    
    public function dataview($obj, $dsName, $view, $head) {
        
        $this->content = "<div><a>qqqqqqqqqqqqqqqqqqqq</a></div>";
        // return string: html-content
        return $this->content;
    }
}