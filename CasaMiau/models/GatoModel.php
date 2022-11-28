<?php
class GatoModel extends Model{
    public function set($gato_data=Array()){
        foreach($gato_data as $key=>$value){
            $$key=$value;
        }
        $this->query="REPLACE INTO gato (id,nombre,edad,nacimiento,raza,sexo,caracter,plot)
                            VALUES ('$id','$nombre','$edad',$nacimiento,'$raza','$sexo','$caracter','$plot')";
        $this->set_query();
    }
    public function get($gato_id=''){
        $this->query=($gato_id == ''
        ?"SELECT * FROM gato"
        :"SELECT * FROM gato WHERE id = $gato_id");
        $this->get_query();
        return $this->rows;
    }
    public function del($gato_id=''){
        $this->query=("DELETE FROM gato WHERE id = $gato_id");
        $this->set_query();
    }
    public function __destruct(){
        $this;
    }
}

?>