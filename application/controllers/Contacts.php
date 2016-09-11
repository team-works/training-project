<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends K_Controller {
    
    public $template = 'one_column'; // two_cols | one_column
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        echo "Контакти";
    }
    
}

