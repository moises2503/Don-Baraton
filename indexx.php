<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DonBaraton</title>
    <link rel="stylesheet" href="Stylo.css">
    <link rel="stylesheet" href="splide-4.1.3/dist/css/splide.min.css">
    <script src="splide-4.1.3/dist/js/splide.min.js"></script>
</head>
<body>
    <div class="div1">
        <div class="img1">
             <img  src="https://th.bing.com/th/id/OIP.mX6HCc8mCZDGAbgWsBfryAHaHd?rs=1&pid=ImgDetMain" alt="" width="150px" height="120px">   
            </div>
           
         <div class="menu" >
           <ul>
               <li><a href="Ofertas.php"><ion-icon name="bag-handle-outline"></ion-icon> Ofertas</a></li>
               <li><a href="OfertasRelam.php"><ion-icon name="flash-outline"></ion-icon> Ofertas Relampago</a></li>
               <li><a href=""><ion-icon name="football-outline"></ion-icon> Deportes</a></li>
                <li><a href="unoo.php"><ion-icon name="shirt-outline"></ion-icon> Moda</a></li> 
               <li><a href="Tecnologia.php"><ion-icon name="desktop-outline"></ion-icon> Tecnologia</a></li>  
           </ul>
         </div>
         <div class="menu2" >
            <ul class="ul1">
                <li><a href="index.php"><ion-icon name="people-sharp"></ion-icon> Informacion de Cuenta</a></li>
               
    
            </ul>
          </div>
          <div class="div2">
            <form action="/action_page.php" class="menu1">

                <input type="text" id="fuse" name="fuses" placeholder="Buscar productos, marcas y más…">        
        </form>
            </div>
            <div class="slider-box">
                <div class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <!-- cambiar fotos -->
                            <li  class="splide__slide" onclick="link()"><img src="https://superbar.com.py/wp-content/uploads/2021/06/deportes.jpg" class="img" width="1470px"
                                height="410px" ></li>
                            <li class="splide__slide" onclick="link2()"><img src="https://i0.wp.com/www.paradavisual.com/wp-content/uploads/2020/08/Huawei-p40-pro-plus-samsung-galaxy-s20-ultra-iphone-11-pro-max.jpg?fit=1920%2C1080&ssl=1"class="img" alt="" width="1470px"
                                height="410px"></li>
                            <li class="splide__slide" onclick="link3()"><img src="https://th.bing.com/th/id/R.58bf6375706a253ca1b8807eb8413f4e?rik=CzZ2U2T%2fISvcxg&pid=ImgRaw&r=0" class="img" alt=""width="1470px"
                                height="410px"></li>
                            <li class="splide__slide" onclick="link4()"><img src="https://i.ytimg.com/vi/VsMVk8dYXNA/maxresdefault.jpg" class="img" alt=""  width="1470px"
                                height="410px"></li>
                        </ul>
                  </div>
                </div>
              </div>
              <script>
                var splide = new Splide( '.splide',{
                    type: 'loop', /*ciclo infinito*/
                    autoplay:true, /*para automatizar las imagenes*/
                    intervar: '10000' /*velocidad para cada imagen*/
                } );splide.mount();
              </script>
               <div class="img11">
            <div class="card">
                <div class="face front">
                    <img src="https://i.pinimg.com/736x/9c/dd/eb/9cddebe9888e57679c7102b2a5247b0e.jpg" alt="" width="200px" height="200px">
                    <h3>Chamarra Nike</h3>
                </div>
                <div class="face back">
                    <h3>Chamarra Nike 100% Poliester,</h3>
                    <p>La tela de tejido Woven es ligera, 
                       durable y repelente al agua,diseño transpirable. </p>
                        <div class="link">
                            <a href="dieciseis.php">Detalles</a>
                        </div>
                </div>
            </div>
        </div>

        <div class="img12">
            <div class="card">
                <div class="face front">
                    <img src="https://i.pinimg.com/736x/5e/c1/27/5ec12713e432e5587df0a6bebcdf605d.jpg" alt="" width="200px" height="200px">
                    <h3>Conjunto Deportivo Dama</h3>
                </div>
                <div class="face back">
                    <h3>Conjunto Deportivo Dama</h3>
                    <p>Sudadera Lisa mas short,Abarcha talla chica a mediana 
                        Textil terry de calidad,short con elastico y corte de sudadera amplia. </p>
                        <div class="link">
                            <a href="diecisiete.php">Detalles</a>
                        </div>
                </div>
            </div>
        </div>
        
        <div class="img13">
            <div class="card">
                <div class="face front">
                    <img src="https://i.pinimg.com/736x/97/c8/41/97c8418be5bcf92e0a72e8ef5b12cc86.jpg" alt="" width="200px" height="200px">
                    <h3>Kit 3 Camisas Hombre</h3>
                </div>
                <div class="face back">
                    <h3>Kit 3 Camisas Hombre</h3>
                    <p>Manga corta,material de alta calidad y resistente, 
                        material comodo y 100% poliester. </p>
                        <div class="link">
                            <a href="dieciocho.php">Detalles</a>
                        </div>
                </div>
            </div>
        </div>

        <div class="img14">
            <div class="card">
                <div class="face front">
                    <img src="https://i.pinimg.com/736x/ed/18/d0/ed18d0464130a0cb997557277d032413.jpg" alt="" width="200px" height="200px">
                    <h3>Balon Basquetbol Wilson</h3>
                </div>
                <div class="face back">
                    <h3>Balon Basquetbol Wilson</h3>
                    <p>Wilson,Sporting Goods Ncaa Final Four Edition Baske 
                        Material resistente y duradero, color marron. </p>
                        <div class="link">
                            <a href="diecinueve.php">Detalles</a>
                        </div>
                </div>
            </div>
        </div>

        <div class="img15">
            <div class="card">
                <div class="face front">
                    <img src="https://i.pinimg.com/736x/7a/fe/81/7afe81369c8476abb2f19e57b8daecf4.jpg" alt="" width="200px" height="200px">
                    <h3>Tenis Running Nike</h3>
                </div>
                <div class="face back">
                    <h3>Tenis Running Nike para Mujer</h3>
                    <p>Comodidad versatil con amortiguacion flexible, 
                        Ligeros para correr y caminar,condiseño transpirable. </p>
                        <div class="link">
                            <a href="veinte.php">Detalles</a>
                        </div>
                </div>
            </div>
        </div>
    </div>

      
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>
<script>
   
    function link(){
        const pagina="#";
         window.open(pagina,'_black');
    }
    function link2(){
        const pagina="#";
         window.open(pagina,'_black');
    }
    function link3(){
        const pagina="#";
         window.open(pagina,'_black');
    }
    function link4(){
        const pagina="#";
         window.open(pagina,'_black');
    }
</script>

</html>