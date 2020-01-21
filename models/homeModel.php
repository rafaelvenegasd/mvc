<?php

include_once 'entities/customer.php';

class homeModel extends Model{

    public function __consctruct(){
        parent::__consctruct();
    }

    public function get(){
        //to get the posts from DB
        $data = [];
        try{
            $query = $this->db->connect()->query("SELECT*FROM customer");
            while($row = $query->fetch()){
                $item = new Customer();
                $item->code = $row['CUST_CODE'];
                $item->name = $row['CUST_NAME'];
                $item->city = $row['CUST_CITY'];
                $item->agent_code = $row['AGENT_CODE'];
                array_push($data, $item);
            }
            return $data;
        }catch(PDOException $e){
            return [];
        }
    }
}
?>