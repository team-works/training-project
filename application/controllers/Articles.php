<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends K_Controller {
    
    public $title;
    public $template = 'one_column'; // two_cols | one_column
    public $model = 'Article_model';
    
    public function __construct() {
        parent::__construct();
        // set meta for page
        $this->title = lang('article');
        $this->heading = lang('article');
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
