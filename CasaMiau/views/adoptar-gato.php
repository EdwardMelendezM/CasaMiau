<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include "./cache/PHPMailer.php";
include "./cache/Exception.php";

$new_sentence = str_replace('CasaMiau/', '', $_GET['r']);
$gato = new GatoController();
$dato_gato = $gato->get($_POST['id_gato']);

if (empty($dato_gato)) {
    $template = '
    <div class="container">
        <h1>No se encontro el gatito</h1>
    </div>
    ';
    print $template;
} else if (empty($_POST['enviado']) && !empty($dato_gato)) {
    $template = '
    <div class="container">
        <h1>ADOPTAME</h1>
        <div class="adoptame">
            <div class="componente" id="componente">
                <img src="%s" alt="gatito" width="300px">
                <h2>%s</h2>
                <h3>%s</h3>
                <h3>Nacimiento: %s</h3>
                <h3>Raza: %s</h3>
                <h3>Sexo: %s</h3>
                <h3>Caracter: %s</h3>
            </div>
            
            <div class="email">
                <h1>CONTACTO</h1>
                <form method="post">
                    <input type="text" name="gato_nombre" placeholder="%s" readonly="readonly">
                    <input type="text" name="correo" placeholder="Correo" required>
                    <input type="text" name="telefono" placeholder="Telefono" required>
                    <input type="text" name="motivo" placeholder="Motivo" class="texto_grande" required>

                    <input type="hidden" name="r" value="adoptar-gato">
                    <input type="hidden" name="id_gato" value="%s">
                    <input type="hidden" name="enviado" value="true">
                    <input type="submit" value="Enviar" class="button">
                </form>
            </div>
        </div>
        
    </div>  
    ';
    printf(
        $template,
        $dato_gato[0]['plot'],
        $dato_gato[0]['nombre'],
        $dato_gato[0]['edad'],
        $dato_gato[0]['nacimiento'],
        $dato_gato[0]['raza'],
        $dato_gato[0]['sexo'],
        $dato_gato[0]['caracter'],
        $dato_gato[0]['nombre'],
        $dato_gato[0]['id'],
    );

}
else if(!empty($dato_gato) && ($_POST['enviado'])=="true"){
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $motivo=$_POST['motivo'];

    //(email,telefono,motivo)
    
    $array_adoptor= array(
        'email'=>$correo,
        'telefono'=>$telefono,
        'motivo'=>$motivo
    );
    $controller= new Usuario_AdoptorModel();
    $new_usuario=$controller->set($array_adoptor);

    $destinatario="192666@unsaac.edu.pe";
    $asunto="ADOPTAME";
    $contenido="Datos Enviados:\nCorreo ".$correo."\nTelefono ".$telefono."\nAdopar a:".$dato_gato[0]['nombre']." con identificacion:".$dato_gato[0]['id'];

    $mail = new PHPMailer();
    $mail->setFrom($correo);
    $mail->addAddress($destinatario,"SITIO WEB");
    $mail->msgHTML($contenido);
    $mail->AltBody=($contenido);

    $respuesta=$mail->send();

    if($respuesta){
        echo '
        <script>
            alert("Envio exitoso")
        </script>';
    }
    else{
        echo '
        <script>
            alert("El envio ha fallado")
        </script>';
    }
    $controller= new ViewController();
    $controller->load_view("home");
}
else{
    $controller= new ViewController();
    $controller->load_view('error401');
}?>
