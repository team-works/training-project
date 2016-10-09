<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends K_Controller {
    
    public $template = 'one_column'; // two_cols | one_column
    public $model = 'Article_model';
    
    public function __construct() {
        parent::__construct();
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
}

