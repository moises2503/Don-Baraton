<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Don Baraton</title>
    
    <link rel="stylesheet" href="uno.css">
    <link rel="stylesheet" href="splide-4.1.3/splide-4.1.3/dist/css/splide.min.css">
<script src="splide-4.1.3/splide-4.1.3/dist/js/splide.min.js"></script>
</head>
<body>
    <div id="uno">
        <div id="logo1" > 
        <a href="indexx.php">
       <img id="logo1"src="img/logo.png" width="90px " height="90px">
           
         
        </div>
        
    
        <div class="search-container">
            <input type="text" id="search-bar" placeholder="Buscar productos marcas y mas.........">
            <div class="linea">
            
            </div>
            <button id="search-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20">
                    <path d="M10 2a8 8 0 016.32 12.9l5.1 5.1-1.41 1.41-5.1-5.1A8 8 0 1110 2zm0 2a6 6 0 100 12 6 6 0 000-12z"></path>
                </svg>
            </button>
        </div>

   
        <div class="menu" >
           <ul>
               <li><a href="Ofertas.php"><ion-icon name="bag-handle-outline"></ion-icon> Ofertas</a></li>
               <li><a href="OfertasRelam.php"><ion-icon name="flash-outline"></ion-icon> Ofertas Relampago</a></li>
               <li><a href=""><ion-icon name="football-outline"></ion-icon> Deportes</a></li>
                <li><a href="unoo.php"><ion-icon name="shirt-outline"></ion-icon> Moda</a></li> 
               <li><a href="Tecnologia.php"><ion-icon name="desktop-outline"></ion-icon> Tecnologia</a></li>  
           </ul>
         </div> <div class="menu2" >
            <ul class="ul1">
                <li><a href="index2.php"><ion-icon name="people-sharp"></ion-icon> Cuenta</a></li>
               
    
            </ul>
          </div>
     
  
    
        <div class="container1">
            <section class="splide" aria-label="Basic Structure Example">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide"><img id="logo2"src="img/anun1.png" alt=""></li>
                    <li class="splide__slide"><img id="logo2"src="img/anun2.png" alt=""></li>
                    <li class="splide__slide"> <img id="logo2" src="img/anun3.png" alt=""></li>
                  </ul>
                </div>
              </section>
            </div>
<div >

    <div class="ella">
        <div class="card">
            <div class="face front">
        <img src="img/mujer.jpeg" alt="" width="200px" height="200px">
        <h3>Damas</h3>
            </div>
            <div class="face back">
               <p>prendas casuales,camisetas blusas,jeans ideales para el dia a dia, hasta atuendos formales como vestidos elegantes.Opciones comodas como leggins,sudaderas y ropa deportiva para el hogar

               </p>
               
                    <div class="link">
                        <a  href="mujer.php">Ir</a>
                    </div>
            </div>
        </div>
    </div>

    <div class="el">
        <div class="card">
            <div class="face front">
        <img src="img/hombre.jpeg" alt="" width="200px" height="200px">
        <h3>Caballeros</h3>
            </div>
            <div class="face back">
               
               <p>Abarca una amplia variedad de estilos y opciones diseñadas para adaptarse a diferentes ocasiones y preferencias.destacan camisetas, polos, camisas casuales y jeans.</p>
                    <div class="link">
                        <a  href="hombre.php">Ir</a>
                    </div>
            </div>
        </div>
    </div>
    <div class="niños">
        <div class="card">
            <div class="face front">
        <img src="img/niño.jpeg" alt="" width="200px" height="200px">
        <h3>Niños</h3>
            </div>
            <div class="face back">
               <p>Ofrece una amplia gama de prendas diseñadas para garantizar comodidad,funcionalidad y estilo, adaptandose a las diferentes etapas de crecimiento.</p>
               
                    <div class="link">
                        <a  href="niños.php">Ir</a>
                    </div>
            </div>
        </div>
    </div>
</div>






<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
      
              <script>
                var splide = new Splide( '.splide', {
                    type    : 'loop',
                    perPage : 3,
                    autoplay: true,
                  } );
                  
                  splide.mount();
              </script>
      
          </div>
    
           
        
          




<script>
  new Splide( '.splide',{
type:'loop',
autoplay:true,
interval:'2000'
    } )
    .mount();</script>


 


   
</body>
</html>