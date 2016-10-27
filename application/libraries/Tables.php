<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'libraries/Tpl.php' );

class Tables {
    
    private $data;           // дані передані з контролера
    private $content = '';   // готова HTML таблиця
    private $view;           // tpl-файл, містить інф. про рядок таблиці
    private $toolbar;        // тулбар
    
    function __construct() {
        $this->tpl = new Tpl();
    }
    
    public function dataview($obj, $dsName, $view, $head, $toolbar = FALSE) {
        $this->settings($obj, $dsName, $view, $head, $toolbar);
        
        // creating table
        $this->toolbar();
        $this->start();
        $this->setHead();
        $this->setRows();
        $this->end();
        
        // return string: html-content
        return $this->content;
    }
    
    private function settings($obj, $dsName, $view, $head, $toolbar) {
        $this->obj = $obj;
        $this->data = $this->obj->{$dsName}();
        $this->view = 'dataview/' . $view . '.tpl';
        $this->head = $head;
        $this->toolbar = $toolbar;
    }
    
    private function toolbar() {
        if($this->toolbar == FALSE) {
            return $this->content; 
        }
        
        $out = '<div class="vf-toolbar buttons">';
        
        $title = '';
        $name = '';
        $form = '';
        $class = '';
        $multy = '';
        $method = '';
        $visible = '';
        $onclick = '';
        
        foreach ($this->toolbar as $button => $props) {
            $class = isset($props['class']) ? $props['class'] : '';
            $title = isset($props['title']) ? $props['title'] : '';
            $visible = isset($props['visible']) ? $props['visible'] : '';
            if (!empty($props['onclick'])) {
//                $onclick = "onclick='" . $props["onclick"]["method"] . "(" . "'" . $props["onclick"]["argument"] . "'" . ");";
                $onclick = 'onclick="' . $props["onclick"]["method"] . '(\'' . $props["onclick"]["argument"] . '\');"';
            }

            $out .= "<a class='$class $visible' id='$button' $onclick>$title</a>";
        }
        
        $out .= '</div>';
        $this->content .= $out;
    }
    
    private function start() {
        $this->content .= '<div class="table-dataview-container">';
        $this->content .= '<table class="dataview-table table table-hover" celspacing="0" cellspacing="0"><tbody>';
    }
    
    // формує з масиву заголовки таблиці, де значення масиву, ключ елементу у views_lang
    private function setHead() {
        $head = '<tr>';

        foreach ($this->head as $key) {
            $head .= '<th>';
            $head .= lang($key);
            $head .= '</th>';
        }

        $head .= '</tr>';

        $this->content .= $head;
    }
    
    private function setRows() {
        $rows = '';
        foreach ($this->data as $row) {
                $rows .= "<tr>";
                $this->tpl->assign('item', $row);
                $rows .= $this->tpl->fetch($this->view);
                $rows .= "</tr>";
        }

        $this->content .= $rows;
    }
    
    private function end() {
        $this->content .= '</tbody></table>';
        $this->content .= '</div>';
    }
}