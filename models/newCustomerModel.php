<?php

include_once 'entities/customer.php';

class newCustomerModel extends Model{

    public function __consctruct(){
        parent::__consctruct();
    }

    public function getAgentCode(){
        $data = [];
        try{
            $query = $this->db->connect()->query("SELECT AGENT_CODE FROM customer");
            while($row = $query->fetch()){
                array_push($data,$row[0]);
            }
            return $data;
        }catch(PDOException $e){
            return [];
        }
    }
    
    public function insert($data){
        $query = $this->db->connect()->prepare('INSERT INTO customer(CUST_NAME, CUST_CITY,	AGENT_CODE) VALUES (:cust_name, :city, :agent_code)');
        $query->execute(['cust_name'=>$data['cust_name'], 'city'=>$data['city'],  'agent_code'=>$data['agent_code'] ]);
    }
}
?>