<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contents extends K_Controller {

    public $title;
    public $description;
    public $template = 'admin'; // two_cols | one_column
    public $resource = 'admin'; // two_cols | one_column
    public $buttons = array();
    public $model = 'Contents_model';

    public function __construct() {
        parent::__construct();

        // set meta for page
        $this->title = lang('contentPages');
        $this->heading = lang('contentPages');

        $this->load->library('tables');
    }

    public function index() {
        // Хлібні крихти
        $data['breadcrumbs'] = $this->getBreads();

        // inline lang для заголовків таблиці
        $tableHead = array(
            'name', 'manage', 'manage'
        );

        $data['workspace'] = $this->tables->dataview(
                $this->obj, 'dsAdminContentsPageList', 'admin-content-pages', $tableHead, $this->interfaces()
        );

        // render data
        $this->view($data);
    }

    private function interfaces() {
        return array(
            'addContentPage' => array(
                'title' => lang('add'),
                'form' => 'updatecontent',
                'class' => 'success',
                'visible' => 'hidden',
                'onclick' => array(
                    'method' => 'doAction',
                    'argument' => 'updatecontent'
                )
            )
        );
    }

    private function getBreads() {
        $breads[lang('contentPages')] = 'admin/contents';

        return initBreadcrumbs($breads);
    }

}
