<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Don Baraton</title>
    <link rel="stylesheet" href="Login.css">
   
</head>
<body>

    <div class="contenedor"> <!-- general -->
        <div class="contenedor-formulario"><!-- iniciar -->
            <form autocomplete="off" action="login.php" method="post" class="sign-in">
                <h2>Iniciar sesion</h2>
                                                                    <!-- <div class="social-network"></div> -->
            <span>Use su Correo y Contraseña</span><!-- TITULO-->
            <div class="imagen"><!-- imagen gmail -->
                <label for="username">usuario</label>
                <ion-icon name="mail-open-outline"></ion-icon>
                <input type="text" id="user" name="user" placeholder="Usuario" ><!-- placeholder sirve para poner el texto adentro de la caja -->
            </div>

            <div class="imagen"><!-- imagen contraseña -->
                <label for="password">contraseña</label>
                <ion-icon name="lock-open-outline"></ion-icon>
                <input type="password"  id="password" name="password" placeholder="Contraseña"><!-- placeholder sirve para poner el texto adentro de la caja -->
            </div>
            <a href="Inicio.html" class="al">¿ Olvidaste tu contraseña?</a>
            <!-- <input type="submit"  value="Iniciar Sesion" br> -->
            <button type="submit"  value="Iniciar Sesion" class="boton" >INICIAR SESION </button>
            <!-- <button class="boton"><a class="a" href="Inicio.html" >INICIAR SESION</a></button> -->

            </form>
        </div><!-- iniciar -->



        <div class="contenedor-formulario"><!-- registrar-->
            <form autocomplete="off" action="insertar.php" method='POST' class="sign-up">
                <h2>Registrarse</h2>

                <span>Use su Correo Electronico para Registrarse</span><!-- TITULO-->
            <div class="imagen"><!-- imagen gmail -->
                <ion-icon name="mail-open-outline"></ion-icon>
                <input type="text" id="gmail" name="gmail" placeholder="Gmail" ><!-- placeholder sirve para poner el texto adentro de la caja -->
            </div>

            <div class="imagen"><!-- imagen Nombre -->
                <ion-icon name="person-add-outline"></ion-icon>
                <input type="text" id="usera" name="usera" placeholder="Nombre"  ><!-- placeholder sirve para poner el texto adentro de la caja -->
            </div>

            <div class="imagen"><!-- imagen Telefono -->
                <ion-icon name="call-outline"></ion-icon>
                <input  type="number"  id="telefono" name="telefono" placeholder="telefono" ><!-- placeholder sirve para poner el texto adentro de la caja -->
            </div>

            <div class="imagen"><!-- imagen contraseña -->
                <ion-icon name="lock-open-outline"></ion-icon>
                <input type="password" id="password1" name="password1" placeholder="Contraseña" ><!-- placeholder sirve para poner el texto adentro de la caja -->
            </div>
            
            <button type="submit"  value="Iniciar Sesion" class="boton">REGISTRARSE</button>


            </form>
        </div><!-- registrar -->





        <div class="contenedor-bienvenido">
<div class="clase-bienvenido-sign-up bienvenido"><!-- no permitira cabiar de inicio de cesion a registrar -->
<h3>BIENVENIDO</h3>
<p>Ingresa tu e-mail o teléfono para iniciar sesión</p>
<button class="boton" id="btn-sign-up">REGISTRARSE</button>
<div class="logo">
<img src="https://th.bing.com/th/id/OIP.mX6HCc8mCZDGAbgWsBfryAHaHd?rs=1&pid=ImgDetMain" alt="" class="logo">
</div>   
</div>




<div class="clase-bienvenido-sign-in bienvenido">
<h3>HOLA REGISTRATE</h3>
<p>Completa los datos para crear tu cuenta</p>
<button class="boton" id="btn-sign-in">INICIAR SECION</button>
<div class="logo2">
    <img src="https://th.bing.com/th/id/OIP.mX6HCc8mCZDGAbgWsBfryAHaHd?rs=1&pid=ImgDetMain" alt="" class="logo">
    </div> 
</div>
        </div>





    </div><!-- general -->

<!-- <button id="btn">Click</button> -->





   <script src="script.js"></script>
   <!-- este sirve para poder mandar los iconos que necesitamos -->
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script> 
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


  
</body>
</html>