<?php
$new_sentence = str_replace('CasaMiau/', '', $_GET['r']);
$usuario_controller = new Usuario_apoyadorController();
$usuarios = $usuario_controller->get();


if (empty($usuarios)) {
    print('
        <div class="container">
            <p class="item error">No hay apoyadores</p>
        </div>
        ');
}
else {
echo '
<div class="container">
    <h1>APOYADORES</h1>
    <div class="adoptame">';
        foreach ($usuarios as $value) {
        $numero_aux = rand(1, 3);
        $template = '
        <div class="componente" id="componente">
            <img src="%s" alt="gatito" width="300px">
            <h2>%s</h2>
            <h3>%s</h3>
        </div>';
            printf(
                $template,
                $value['plot'],
                $value['nombre'],
                $value['email']
            );
        }
    echo '
    </div>
</div>';
}

?>
