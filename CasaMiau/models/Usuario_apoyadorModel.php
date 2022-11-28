<?php
class Usuario_apoyadorModel extends Model{
    public function set($apoyador_data=Array()){
        foreach($apoyador_data as $key=>$value){
            $$key=$value;
        }
        $this->query="REPLACE INTO usuario_apoyador (email,nombre,plot)
                            VALUES ('$email','$nombre','$plot')";
        $this->set_query();
    }

    public function get($email=''){
        $this->query=($email == ''
        ?"SELECT * FROM usuario_apoyador"
        :"SELECT * FROM usuario_apoyador WHERE id = $email");
        $this->get_query();
        return $this->rows;
    }
    public function del($email=''){
        $this->query=("DELETE FROM usuario_apoyador WHERE id = $email");
        $this->set_query();
    }
    public function __destruct(){
        $this;
    }
}

?>