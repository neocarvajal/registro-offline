<?php
require_once 'modelo/database.php';

$controlador = 'participante';

// lógica  Frontcontroller
if(!isset($_REQUEST['control']))
{
    require_once "controlador/controlador.$controlador.php";
    $controlador = "Controlador" . ucwords($controlador);
    $controlador = new $controlador;
    $controlador->Index();    
}
else
{
    // Obtenemos el controlador que queremos cargar
    $controlador = strtolower($_REQUEST['control']); // participante
    $accion = isset($_REQUEST['accion']) ? $_REQUEST['accion'] : 'Index'; // Crud
    
    // Instanciamos el controlador
    require_once "controlador/controlador.$controlador.php";
    $controlador = "Controlador" . ucwords($controlador); // ControladorParticipante
    $controlador = new $controlador; // conexion establecida
    
    // Llama la accion
    call_user_func( array( $controlador, $accion ) ); // 
}