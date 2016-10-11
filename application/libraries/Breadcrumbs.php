<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Breadcrumbs {
    
    private $breadcrumbs = array();

    public function __construct() {
        $this->ci = & get_instance();
        
        // Load config file
        $this->ci->load->config('breadcrumbs');
        
        // Get breadcrumbs display options
        $this->tag_open         = $this->ci->config->item('tag_open');
        $this->tag_close        = $this->ci->config->item('tag_close');
        $this->separated        = $this->ci->config->item('separated');
        $this->crumb_open       = $this->ci->config->item('crumb_open');
        $this->crumb_close      = $this->ci->config->item('crumb_close');
        $this->crumb_last_open  = $this->ci->config->item('crumb_last_open');
        $this->crumb_divider    = $this->ci->config->item('crumb_divider');
        
        $this->lang = getCurrentLang();

        log_message('debug', "Breadcrumbs Class Initialized");
    }
    
    public function run($breads = array()) {
        // перевіряємо чи дані передано
        if(!is_array($breads) && empty($breads)) {
            return '';
        }
        
        $this->prepend();
        
        foreach ($breads as $page => $href) {
            $this->push($page, $href);
        }
        
        return $this->output();
    }
    // --------------------------------------------------------------------
    /**
     * Append crumb to stack
     *
     * @access	public
     * @param	string $page
     * @param	string $href
     * @return	void
     */
    private function push($page, $href) {
        // no page or href provided
        if ( !$page || !$href )
            return;

        // Prepend site url
        $href = $this->lang . '/' . $href;
        $href = site_url($href);

        // push breadcrumb
        $this->breadcrumbs[$href] = array('page' => $page, 'href' => $href);
    }

    // --------------------------------------------------------------------
    /**
     * Prepend crumb to stack
     *
     * @access	public
     * @param	string $page
     * @param	string $href
     * @return	void
     */
    private function prepend($page='', $href='') {
        // no crumb provided
        if (!$page || !$href) {
            // add home page
            $page = lang('home');
            $href = base_url() . $this->lang;
            $this->breadcrumbs[$href] =  array('page' => $page, 'href' => $href);
            
            return;
        }

        // Prepend site url
        $href .= $this->lang . '/' . $href;
        $href = site_url($href);

        // add at firts
        array_unshift($this->breadcrumbs[$href], array('page' => $page, 'href' => $href));
    }

    // --------------------------------------------------------------------
    /**
     * Generate breadcrumb
     *
     * @access	public
     * @return	string
     */
    private function output() {
        if ($this->breadcrumbs) {

            // set output variable
            $output = $this->tag_open;

            // construct output
            foreach ($this->breadcrumbs as $key => $crumb) {
                $keys = array_keys($this->breadcrumbs);
                if (end($keys) == $key) {
                    $output .= $this->crumb_last_open . '' . $crumb['page'] . '' . $this->crumb_close;
                } else {
                    $output .= $this->crumb_open . '<a href="' . $crumb['href'] . '">' . $crumb['page'] . '</a> ' . $this->crumb_divider . $this->crumb_close;
                }
            }

            // return output
            return $output . $this->tag_close . PHP_EOL;
        }

        // no crumbs
        return '';
    }

}

// END Breadcrumbs Class
/* End of file Breadcrumbs.php */
/* Location: ./application/libraries/Breadcrumbs.php */