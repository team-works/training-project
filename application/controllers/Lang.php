<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lang extends K_Controller {

    private $_controller;

    public function __construct() {
        parent::__construct();
        /* Если не выбран язык, то ставим язык по-умолчанию,
         * переадресовывая пользователя на правильный URL
         */
        $this->check_lang();
    }
    // потрібна ф-я index, без неї не працює редірект на дефолтну мову(якщо в урлі нема)
    function index() {
        
    }
}

/* End of file Lang.php */
/* Location: ./application/controllers/Lang.php */