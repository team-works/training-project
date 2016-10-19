<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends K_Controller {
    
    public $template = 'admin'; // two_cols | one_column
    
    public function __construct() {
        parent::__construct();

        $this->load->library('table');
    }
    
    public function index() {
        // Хлібні крихти
        $data['breadcrumbs'] = $this->getBreads();
        
        // render data
        $this->view($data);
    }
    
    private function getBreads() {
        $breads[lang('catalogManage')] = 'admin/catalog/';

        return initBreadcrumbs($breads);
    }
}

