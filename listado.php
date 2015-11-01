<?php
require_once './tools/conexion.php';

$conexion = new DbC();

//hacemos la conexion
$conexion->getServidor($_POST['servidor']);
$conexion->getUsuario($_POST['usuario']);
$conexion->getPassword($_POST['pass']);
$conexion->getBase_datos($_POST['base_datos']);
$conexion->conectar();

//leo las tablas que hay
$sql="SHOW TABLES";

$stmt = $conexion->ejecutar($sql);
$conexion->desconectar();

$tablas = $conexion->listar($stmt);

var_dump($tablas);die;

function listarTablas($tablas){
    
//    for ($i = 0; $i < count($tablas); $i++) {
//        var_
//    }
    
    
}
