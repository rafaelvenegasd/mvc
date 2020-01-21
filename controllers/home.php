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
    }

?> 