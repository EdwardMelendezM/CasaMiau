<?php
$new_sentence = str_replace('CasaMiau/', '', $_GET['r']);
$gatos_controller = new GatoController();
$gatos = $gatos_controller->get();

if (empty($gatos)) {
    print('
        <div class="container">
            <p class="item error">No hay status</p>
        </div>
        ');
} else {
    echo '
<div class="container">
    <h1>ADOPTAME</h1>
        <div class="adoptame">';
        foreach ($gatos as $value) {
            $numero_aux = rand(1, 3);
            $template = '
                <div class="componente" id="componente">
                    <img src="%s" alt="gatito" width="300px">
                    <h2>%s</h2>
                    <h3>%s</h3>
                    <h3 class="active element" id="active ">Nacimiento: %s</h3>
                    <h3 class="active element" id="active ">Raza: %s</h3>
                    <h3 class="active element" id="active ">Sexo: %s</h3>
                    <h3 class="active element" id="active ">Caracter: %s</h3>
                    <form method="post">
                        <input type="hidden" name="r" value="adoptar-gato">
                        <input type="hidden" name="id_gato" value="%s">
                        <input type="submit" value="Adoptar" class="button c-%s">
                    </form>
                </div>';
            printf(
                $template,
                $value['plot'],
                $value['nombre'],
                $value['edad'],
                $value['nacimiento'],
                $value['raza'],
                $value['sexo'],
                $value['caracter'],
                $value['id'],
                $numero_aux
            );
        }
/*
<form method="POST">
                        <input type="hidden" name="r" value="status-add">
                        <input class="button add" type="submit" value="Agregar">
                    </form>
                    */
    echo '</div>
    </div>
    <script src="./public/js/casamiau_adoptar.js"></script>';
}
?>
