<?php

class Article_model extends Base_model {
    
    public $table = 'articles';
    public $primaryKey = 'articleID';
    
    const ACTIVE_STATUS = 0;

    function __construct() {
        parent::__construct();
    }
    
    function getArticles() {
        return $this->db->order_by('articleTime', 'DESC')
                ->where('articleStatus', self::ACTIVE_STATUS)
                ->get($this->table)
                ->result();
    }
    
    function getArticle($id) {
        return $this->db->order_by('articleTime', 'DESC')
                ->where($this->primaryKey, $id)
                ->get($this->table)
                ->row();
    }
}

