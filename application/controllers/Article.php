<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends K_Controller {
    
    public $title;
    public $template = 'one_column'; // two_cols | one_column
    public $model = 'Article_model';
    public $heading;
    
    public function __construct() {
        parent::__construct();
        // set meta for page
        $this->title = $this->getArticleName();
        $this->heading = $this->getArticleName();
    }
    
    public function index() {

        // page content
        $data['workspace'] = $this->getOneArticle();

        // render data
        $this->view($data);
    }
    
    private function getOneArticle() {
        $articleID = getArgument(3);
        $articles = $this->obj->getArticle($articleID);
        if (!$articles) {
            redirect(404);
        }
        
        $this->tpl->assign('item', $articles);
        return $this->tpl->fetch('article.tpl');
    }
    
    private function getArticleName() {
        $articleID = getArgument(3);
        
        return $this->obj->getArticleName($articleID);
    }
}

