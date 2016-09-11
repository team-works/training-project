<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends K_Controller {
    
    public $template = 'one_column'; // two_cols | one_column
    public $model = 'Catalog_model';
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        
        // блок "МИ ПРОПОНУЄМО" - каталог категорій
        $data['workspace'] = $this->getPropositionBlock();
        
        // render data
        $this->view($data);
    }
    
    private function getPropositionBlock() {
        $categories = $this->obj->getCategoriesOnMain();
        $this->tpl->assign('categories', $categories);
            
        return $this->tpl->fetch('categories-on-main.tpl');
    }
}

