<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Smarty Class
 *
 * @package	CodeIgniter
 * @subpackage	Libraries
 * @category	Smarty
 * @author	Kepler Gelotte
 * @link	http://www.coolphptools.com/codeigniter-smarty
 */
require_once( APPPATH . 'libraries/smarty/libs/Smarty.class.php' );

class Tpl extends Smarty {

    const EXT = '.tpl';

    function __construct() {
        parent::__construct();

        $this->compile_dir = APPPATH . "views/templates_c";
        $this->template_dir = APPPATH . "views/";
        $this->left_delimiter = "[-";
        $this->right_delimiter = "-]";

        $this->assign('APPPATH', APPPATH);
        $this->assign('BASEPATH', BASEPATH);

        // Assign CodeIgniter object by reference to CI
        if (method_exists($this, 'assignByRef')) {
            $ci = & get_instance();
            $this->assignByRef("ci", $ci);
        }

        log_message('debug', "Smarty Class Initialized");
    }
}
