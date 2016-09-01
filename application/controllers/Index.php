<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends K_Controller {
    
        public function __construct() {
            parent::__construct();
        }    
    
	public function index()
	{
            //$test = "Test Smarty";
            //$this->tpl->assign('test', $test);
            //$this->tpl->display('index.tpl');
            
            // слайдер
            $data['workspace'] = $this->sliderOnMain();
            
            // блок "МИ ПРОПОНУЄМО" - каталог категорій
            $data['workspace'] .= $this->getPropositionBlock();
            
            // блок "МИ ГАРАНТУЄМО" - незмінний контент html
            $data['workspace'] .= $this->getGarantyBlock();
            
            // render data
            $this->view($data);
	}
        
        private function sliderOnMain() {
            return;
        }
        
        private function getPropositionBlock() {
            return $this->tpl->fetch('categories-on-main.tpl');
        }
        
        private function getGarantyBlock() {
            return $this->tpl->fetch('garanty-block.tpl');
        }
}

