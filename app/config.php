<?php
/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 17/1/2023
 * Time: 13:00
 */
define('SERVIDOR','127.0.0.1');
define('USUARIO','root');
define('PASSWORD','Pedro');
define('BD','sistemasdeventas');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "La conexión a la base de datos fue con exito";
}catch (PDOException $e){
    //print_r($e);
    echo "Error al conectar a la base de datos";
}

$URL = "http://54.80.17.70/SistemaDeVentas";

date_default_timezone_set("America/Caracas");
$fechaHora = date('Y-m-d H:i:s');


