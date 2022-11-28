<?php
class GatoController{
    private $model;
    public function __construct(){
        $this->model = new GatoModel();
    }
    public function set($gato_data=array()){
        return $this->model->set($gato_data);
    }
    public function get($gato_id=''){
        return $this->model->get($gato_id);
    }
    public function del($gato_id=''){
        return $this->model->del($gato_id);
    }
    public function __destruct(){
        $this;
    }
}