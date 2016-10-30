<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends K_Controller {

    public $template = 'one_column'; // two_cols | one_column
    //public $resource = 'common';
    public $model = 'Contacts_model';
    public $title;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
        // Хлібні крихти
        $data['breadcrumbs'] = initBreadcrumbs( array(lang('contacts') => 'contacts/') );

        // Names of page
        $this->heading = lang('contacts');
        $this->title = lang('contacts');

        // Каталог категорій
        $data['workspace'] = $this->getPageContent();

        // render data
        $this->view($data);
    }

    private function getPageContent() {
        
//        $this->tpl->assign('contentText', $contentText);
        return $this->tpl->fetch('contacts-page.tpl');
    }

    private function getBreads() {
        $breads[$this->getPageHeader()] = 'page';
        return initBreadcrumbs($breads);
    }

}
