<?php

require_once("Conexion/conexion.php");
$pdo = conectar();  
$return_arr = array();

$abmarticulo = $pdo->prepare("SELECT * FROM articulos where idarticulo= '1' ");

$abmarticulo->execute();

$data = $abmarticulo->fetchAll();

foreach ($data as $row):

$id = $row['idarticulo'];
$usuario = $row['nombrearticulo'];
$nombres = $row['nombresarticulo'];
$email = $row['familiaarticulo'];
$fecha = $row['ivaarticulo'];

$return_arr[] = array('id' => $id, 'usuario' => $usuario, 'nombres' => $nombres, 'email' => $email, 'fecha' => $fecha);
endforeach;

// Encoding array in JSON format
echo json_encode($return_arr);
$json_string = json_encode($return_arr);

?>