<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends K_Controller {
    
    public $template = 'one_column'; // two_cols | one_column
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        // блок "Про компанію"
        $data['workspace'] = $this->getContacts();
        
        // render data
        $this->view($data);
    }
    
    private function getContacts() {
        return $this->tpl->fetch('contacts.tpl');
    }
    
}

