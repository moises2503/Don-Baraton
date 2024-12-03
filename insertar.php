<?php
session_start();
include 'coneccion.php'; // Asegúrate de incluir el archivo de conexión

if ($conn === false) {
    die(print_r(sqlsrv_errors(),true));
   
}
$gmail = $_POST ['gmail'];
$user1  = $_POST['usera'];
$telefono = $_POST ['telefono'];
$password1 = $_POST['password1'];

$mensaje="Credenciales correctas";
$sql = "INSERT INTO Regis(usua,nombre,tel,contra) VALUES (?,?,?,?)";
$params = array($gmail,$user1,$telefono,$password1); 
$stmt = sqlsrv_query($conn, $sql, $params);

if($stmt== false){
    die(print_r(sqlsrv_errors(),true));
    

}
else{
    header("Location: inicio.php");
    // echo "<script type='text/javascript'>alert('$mensaje');</script>";
   
}

sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>