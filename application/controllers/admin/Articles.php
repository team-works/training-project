<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends K_Controller {
    
    public $template = 'admin'; // two_cols | one_column
    public $model = 'Article_model';
    
    public function __construct() {
        parent::__construct();
        
        // set meta for page
        $this->title = lang('article');
        $this->heading = lang('article');
        
        $this->load->library('tables');
    }
    
    public function index() {
        // Хлібні крихти
        $data['breadcrumbs'] = initBreadcrumbs(array(lang('article') => 'admin/articles/'));
        
        // inline lang для заголовків таблиці
        $tableHead = array(
            'name', 'manage'
        );
        
        $data['workspace'] = $this->tables->dataview(
                $this->obj, 'dsAdminArticleList', 'admin-article-list', $tableHead, $this->interfaces()                
        );

        // render data
        $this->view($data);
    }
    
    private function interfaces() {
        return array(
            'addCatalog' => array(
                'title' => lang('add'),
                'form' => 'updatearticle',
                'class' => 'success',
                'onclick' => array(
                    'method' => 'doAction',
                    'argument' => 'updatearticle'
                )
            )
        );
    } 
    
}

