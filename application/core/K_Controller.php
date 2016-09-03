<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_Controller extends CI_Controller {
        
    public $template = 'two_cols'; // two_cols | one_column | admin

    public function __construct() {
            parent::__construct();
            
        }    
    
	protected function view($data = '') {
            $data['template'] = $this->template;
            $this->layout->output($data);
        }
}
