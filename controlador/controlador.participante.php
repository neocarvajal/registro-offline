<?php
require_once 'modelo/participante.php';

class ControladorParticipante{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Participante();
    }
    
    public function Index(){
        require_once 'vista/header.php';
        require_once 'vista/participante/participante.php';
        require_once 'vista/footer.php';
    }
    
    public function Crud(){

        $participante = new Participante();
        
        if(isset($_REQUEST['id'])){
            $participante = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'vista/header.php';
        require_once 'vista/participante/participante-editar.php';
        require_once 'vista/footer.php';
    }

    public function Buscar(){

        $participante = new Participante();

        if(isset($_REQUEST['Cedula'])){
           $participante = $this->model->Buscar($_REQUEST['Cedula']);
        }
        
        require_once 'vista/header.php';
        require_once 'vista/participante/participante-buscar.php';
        require_once 'vista/footer.php';        
    }
    
    public function Guardar(){
        $participante = new Participante();
        
        $participante->id = $_REQUEST['id'];
        $participante->Nombre = $_REQUEST['Nombre'];
        $participante->Apellido = $_REQUEST['Apellido'];
        $participante->Correo = $_REQUEST['Correo'];
        $participante->Sexo = $_REQUEST['Sexo'];
        $participante->Cedula = $_REQUEST['Cedula'];
        $participante->Direccion = $_REQUEST['Direccion'];
        $participante->FechaNacimiento = $_REQUEST['FechaNacimiento'];

        $participante->id > 0 
            ? $this->model->Actualizar($participante)
            : $this->model->Registrar($participante);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}