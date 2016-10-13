<?php

class Contents_model extends Base_model {

    public $table = 'contents';
    public $primaryKey = 'contentID';
    public $tableFields = array(
        'contentID',
        'contentNameUA',
        'contentNameRU',
        'contentTextUA',
        'contentTextRU',
        'contentStatus',
        'contentOrder',
        'contentType'
    );
    
    const CONTENT_PAGE = 0;
    const ON_MAIN = 1;

    function __construct() {
        parent::__construct();
    }
    
    function dsAdminContentsPageList() {
        return $this->db
                ->order_by('contentOrder', 'ASC')
                ->get($this->table, $this->limit, $this->offset)
                ->result();
    }
    
    // блок "Про компанію" на головній
    function getAboutCompanyOnMain() {
        return $this->db->select('contentTextUA, contentTextRU, contentStatus')
                ->where('contentType', self::ON_MAIN)
                ->get($this->table)
                ->row();
    }
    
    function getPage($id) {
        $res = $this->db->where($this->primaryKey, $id)
                ->get($this->table)
                ->row();
        
        if(!$res) {
            redirect(404);
        }
        
        return $res;
    }

}
