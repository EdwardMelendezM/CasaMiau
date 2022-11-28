<?php
class Usuario_adoptorController{
    private $model;
    public function __construct(){
        $this->model = new Usuario_adoptorModel();
    }
    public function set($gmail=array()){
        return $this->model->set($gmail);
    }
    public function get($gmail=''){
        return $this->model->get($gmail);
    }
    public function del($gmail=''){
        return $this->model->del($gmail);
    }
    public function __destruct(){
        $this;
    }
}