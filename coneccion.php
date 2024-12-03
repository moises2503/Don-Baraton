<?php
$serverName = "Adrien\SQLEXPRESS"; // Por ejemplo: "localhost" o "nombre_servidor"
$database = "donbaraton";
$username = "sa";
$password = "12345678";

// Conexión a SQL Server
$conn = sqlsrv_connect($serverName, array(
    "Database" => $database,
    "UID" => $username,
    "PWD" => $password
));

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>