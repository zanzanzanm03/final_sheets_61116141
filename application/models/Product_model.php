<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class Product_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }


    public function findOne($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->getOne('products');
        $data = $this->mongo_db->row_array($result);
        return  $data;
    }

    public function findAll($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('products');
        return  $result;
    }
    public function insert($data)
    {
        $insertID = $this->mongo_db->insert('products', $data);
        return $insertID;
    } 
}
