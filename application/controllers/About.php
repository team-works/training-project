<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends K_Controller {
    
    public $template = 'one_column'; // two_cols | one_column
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        // блок "Про компанію"
        $data['workspace'] = $this->getAboutCompany();
        
        // render data
        $this->view($data);
    }
    
    private function getAboutCompany() {
        return $this->tpl->fetch('delivery.tpl');
    }
    
}
