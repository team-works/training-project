<?php


class Catalog_model extends CI_Model {
    
    public $table = 'catalogs';
    
    function __construct() {
        parent::__construct();
    }
    
    public function getCategoriesOnMain($parentCatID = 0) {
        return $this->db->where('catalogParentID', $parentCatID)
                        ->where_not_in('catalogStatus', 1)
                        ->order_by('catalogID', 'ASC')
                        ->get($this->table)
                        ->result();
    }
    
}
