<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH . 'libraries/Tpl.php');

class Layout {
    
    public $template;
    // meta data
    public $title;
    public $breadCrumbs;
    
    const EXT = '.tpl';
    
    public function __construct() {
        $this->tpl = new Tpl();
        
    }

    public function output($data = NULL){
        
        if($data != NULL) {
            foreach ($data as $name => $value)
                $this->tpl->assign($name, $value);
        }
        $pathTpl = 'layouts/' . $data['template'] . self::EXT;
        $this->tpl->display($pathTpl);
    }

    
}
