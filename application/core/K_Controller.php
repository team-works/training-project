<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_Controller extends CI_Controller {
        
    public $template = 'two_cols'; // two_cols | one_column | admin
    public $model;

    public function __construct() {
        parent::__construct();
        
        if($this->model !== '') {
            $this->load->model($this->model, 'obj');
        }
        // визначаэмо мову сайту
        $this->check_lang();        
            
    }
    
    protected function check_lang() {
        $lang = $this->config->item('language_site'); /* получаем языки сайта из конфига */

        if (file_exists(APPPATH . 'controllers/Lang.php')) {
            $uri_string = $this->uri->uri_string(); /* получаем строку нашего url */
            /* Если мы не находим язык по первому сегменту в нашем url
             * то переадресовываем пользователя на такую же ссылку только
             * добавляем в начало, язык сайта по-умолчанию.
             */
            if (!isset($lang[$this->uri->segment(1)])) {
                redirect($lang['default'] . '/' . $uri_string, 'location', 301);
            }
        }
    }
    
    protected function view($data = '') {
        $data['template'] = $this->template;
        $this->layout->output($data);
    }
}
