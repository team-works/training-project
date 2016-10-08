<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends K_Controller {
    
    public $template = 'one_column'; // two_cols | one_column
    public $model = 'Article_model';
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        
        // page content
        $data['workspace'] = $this->getArticleList();
        
        // render data
        $this->view($data);   
    }
    
    private function getArticleList() {
        $articles = $this->obj->getArticles();
        
        $this->tpl->assign('articles', $articles);
        return $this->tpl->fetch('articles-list.tpl');
    }
    
}
