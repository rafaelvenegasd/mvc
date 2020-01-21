<?php

    class newCustomer extends Controller{
        function __construct(){
            parent::__construct();
        }

        function render(){
            $data = $this->model->getAgentCode();
            $this->view->agents_codes = $data;
            $this->view->render('new/index');
        }

        function createNewCustomer(){
            $cust_name=$_POST['cust_name'];
            $city=$_POST['city'];
            $agent_code=$_POST['agent_code'];
            $this->model->insert(['cust_name'=>$cust_name, 'city'=>$city, 'agent_code'=>$agent_code]);
            $this->view->render('new/index');
        }
    }

?> 