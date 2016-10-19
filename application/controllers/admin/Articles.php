<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends K_Controller {
    
    public $template = 'admin'; // two_cols | one_column
    public $model = 'Article_model';
    
    public function __construct() {
        parent::__construct();
        
        $this->load->library('table');
    }
    
    public function index() {
        // Хлібні крихти
        $data['breadcrumbs'] = initBreadcrumbs(array(lang('article') => 'admin/articles/'));
        
        // inline lang для заголовків таблиці
        $tableHead = array(
            'name', 'manage'
        );
        
        $data['workspace'] = $this->table->dataview(
                $this->obj, 'dsAdminArticleList', 'admin-article-list', $tableHead, $this->interfaces()
        );

        // render data
        $this->view($data);
    }
    
    private function interfaces() {
        return array(
        );
    }
}

