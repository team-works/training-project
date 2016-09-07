<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends K_Controller {
        
    public $template = 'one_column'; // two_cols | one_column


    public function __construct() {
            parent::__construct();
        }    
    
	public function index()
	{      
            // слайдер
            $data['workspace'] = $this->sliderOnMain();
            
            // блок "МИ ПРОПОНУЄМО" - каталог категорій
            $data['workspace'] .= $this->getPropositionBlock();
            
            // блок "МИ ГАРАНТУЄМО" - незмінний контент html
            $data['workspace'] .= $this->getGarantyBlock();
            
            // блок "Наші переваги" - змінний контент
            $data['workspace'] .= $this->getAdvantagesBlock();
            
            // блок "Як ми працюємо" - незмінний контент
            $data['workspace'] .=$this->getWorkingBlock();
            
            // блок "Зворотній зв'язок"
            $data['workspace'] .=$this->getFeedbackFormBlock();
            
            // render data
            $this->view($data);
	}
        
        private function sliderOnMain() {
            return $this->tpl->fetch('slider.tpl');
        }
        
        private function getPropositionBlock() {
            return $this->tpl->fetch('categories-on-main.tpl');
        }
        
        private function getGarantyBlock() {
            return $this->tpl->fetch('garanty-block.tpl');
        }
        
        private function getAdvantagesBlock() {
            return $this->tpl->fetch('advantages.tpl');
        }
        
        private function getWorkingBlock() {
            return $this->tpl->fetch('working-block.tpl');
        }
        
        private function getFeedbackFormBlock() {
            return $this->tpl->fetch('feedbackform.tpl');
        }
}

