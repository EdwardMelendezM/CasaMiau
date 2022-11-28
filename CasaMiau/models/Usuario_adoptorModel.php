<?php
class Usuario_adoptorModel extends Model{

    public function set($adoptor_data=Array()){
        foreach($adoptor_data as $key=>$value){
            $$key=$value;
        }
        $this->query="REPLACE INTO usuario_adoptor (email,telefono,motivo)
                            VALUES ('$email','$telefono','$motivo')";
        $this->set_query();
    }
    public function get($email=''){
        $this->query=($email == ''
        ?"SELECT * FROM usuario_adoptor"
        :"SELECT * FROM usuario_adoptor WHERE id = $email");
        $this->get_query();
        return $this->rows;
    }
    public function del($email=''){
        $this->query=("DELETE FROM usuario_adoptor WHERE id = $email");
        $this->set_query();
    }
    public function __destruct(){
        $this;
    }
}

?>