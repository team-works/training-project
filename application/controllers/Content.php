<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends K_Controller {
    
    public $template = 'one_column'; // two_cols | one_column
    public $resource = 'common';
    public $model = 'Contents_model';
    private $page;
    public $title;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $pageID = getArgument(3, 'int');
        if (isset($pageID) && $pageID) {
            $this->page = $this->obj->getPage($pageID);
        } else {
            redirect(404) ;
        }
        
        // Хлібні крихти
        $data['breadcrumbs'] = $this->getBreads();

        // Name of content page
        $this->heading = $this->getPageHeader();

        // Каталог категорій
        $data['workspace'] = $this->getPageContent();

        // render data
        $this->view($data);
    }
    
    private function getPageHeader() {
        return multyLang($this->page->contentNameUA, $this->page->contentNameRU, TRUE);
    }
    
    private function getPageContent() {
        $contentText = multyLang($this->page->contentTextUA, $this->page->contentTextRU, TRUE);
        
        $this->tpl->assign('contentText', $contentText);
        return $this->tpl->fetch('content-page.tpl');
    }
    
    private function getBreads() {
        $breads[$this->getPageHeader()] = 'page';
        return initBreadcrumbs($breads);
    }
    
}

