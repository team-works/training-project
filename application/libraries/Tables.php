<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'libraries/Tpl.php' );

class Tables {
    
    function __construct() {
        $this->tpl = new Tpl();
    }
    
    public function dataview() {
        echo "Fuck!!!";
    }
}