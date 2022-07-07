<?php

class Controller{
    public function view($view, $data = []){
        session_start();
        if (!isset($session['nama'])){
            require_once 'app/views/login/index.php';
        }
        else{
            require_once 'app/views/'. $view . '.php';
        }
        
    }
    public function model($model){
        require_once 'app/models/'. $models . '.php';
        return new $model;
    }
}