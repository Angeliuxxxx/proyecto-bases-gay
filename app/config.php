<?php
define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','root');
define('BD','sistemadeventas');


$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
$pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
//echo "La conexion a la base de datos fue exitosa";
}catch(PDOException $e){
//print_r($e);
echo "ERROR AL CONECTAR A LA BASE DE DATOS";
}
$URL = "http://localhost/www.sistemadeventas.com/";

date_default_timezone_set("");



?>