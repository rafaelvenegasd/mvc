<?php

    class Home extends Controller{
        function __construct(){
            parent::__construct();
        }

        function render(){
            $data = $this->model->get();
            $this->view->customers =$data;
            $this->view->render('home/index');
        }

        function newCustomer(){
            $code=$_POST['CUST_CODE'];
            $name=$_POST['CUST_NAME'];
            $city=$_POST['CUST_CITY'];
            $agent_code=$_POST['AGENT_CODE'];
            $this->model->createPost(['CUST_CODE'=>$code, 'CUST_NAME'=>$name, 'CUST_CITY'=>$city, 'AGENT_CODE'=>$agent_code]);
        }
    }

?> 