<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_Controller extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
            
        }    
    
	protected function view($data = '') {
            $data['template'] = 'one_column';
            $this->layout->output($data);
        }
}
