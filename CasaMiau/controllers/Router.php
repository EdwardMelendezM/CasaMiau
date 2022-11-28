<?php
class Router{
    public $router;
    public function __construct($router){
        $session_options=array(
            'use_only_cookies'=>1,
            'read_and_close'=>false
        );
        $this->route=isset($_GET['r']) ? $_GET['r'] : 'home';
        $controller = new ViewController();

        $new_sentence = str_replace('CasaMiau/','',$this->route);

        switch ($new_sentence) { 
            case 'home':
                $controller->load_view('home');
                break;

            case 'adoptar':
                if(!isset($_POST['r'])) $controller->load_view('adoptar');
                else if($_POST['r']=='adoptar-gato') $controller->load_view('adoptar-gato');
                break;

            case 'apoyo':
                if(!isset($_POST['r'])) $controller->load_view('apoyo');
                break;

            case 'contactos':  
                if(!isset($_POST['r'])) $controller->load_view('contactos');
                break;

            default:
            $controller->load_view('error404');
                break;
        }
    }
    public function __destruct(){
        $this;
    }
}