<?php
session_start();
include 'coneccion.php'; // Asegúrate de incluir el archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = $_POST['password'];
  $mensaje="Credenciales Incorrectas";
    // Prepara la consulta SQL
    $sql = "SELECT * FROM Regis WHERE usua = ? AND contra = ?";
    $params = array($username, $password); // En un entorno real, nunca almacenes contraseñas en texto plano

    $stmt = sqlsrv_query($conn, $sql, $params);
    
    if ($stmt == false) {
        die(print_r(sqlsrv_errors(), true));
    }

    // Verifica si hay resultados
    if (sqlsrv_fetch($stmt) != false) {
        // Credenciales válidas
        $_SESSION['username'] = $username; // Guarda el nombre de usuario en la sesión
        //echo "Bienvenido, " . htmlspecialchars($username) . "!";
        // Redirigir a la página de inicio o panel de control
        header("Location: Inicio.php");
        exit();
    } else {
        // Credenciales inválidas
      echo "<script type='text/javascript'>alert('$mensaje');</script>";
      
    }

    sqlsrv_free_stmt($stmt);  // Libera el recurso asociado a la declaración SQL. Esto es una buena práctica para liberar memoria.
}

sqlsrv_close($conn);
?>