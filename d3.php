<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Don Baraton</title>
    <link rel="stylesheet" href="d1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>

    <div id="uno">
        <div id="logo1"> <a href="indexx.php">
            <img id="logo1"src="img/logo.png" alt="" width="90px " height="90px">
           
         
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
           <ul class="ull">
               <li class="lii"><a href="Ofertas.php"><ion-icon name="bag-handle-outline"></ion-icon> Ofertas</a></li>
               <li class="lii"><a href="OfertasRelam.php"><ion-icon name="flash-outline"></ion-icon> Ofertas Relampago</a></li>
               <li class="lii"><a href=""><ion-icon name="football-outline"></ion-icon> Deportes</a></li>
                <li class="lii"><a href="unoo.php"><ion-icon name="shirt-outline"></ion-icon> Moda</a></li> 
               <li class="lii"><a href="Tecnologia.php"><ion-icon name="desktop-outline"></ion-icon> Tecnologia</a></li>  
           </ul>
         </div> <div class="menu2" >
            <ul class="ul1">
                <li class="lii"><a href="index.php"><ion-icon name="people-sharp"></ion-icon> Informacion de Cuenta</a></li>
               
    
            </ul>
          </div>
    <div>

   <div class="product-container">
        <div class="carousel" id="carouselDemo"
        data-bs-wrap="true" data-bs-ride="carousel">
    <div class="carousel-inner">
    
    <div class="carousel-item "
    data-bs-interval="2000">
        
    <img id="imagenes"src="img/blusas3.png"alt="">
    </div>
    <div class="carousel-item active">
    <img id="imagenes"src="img/pant1.png" alt="">
    </div>
    <div class="carousel-item">
    <img id="imagenes"src="img/pant2.png" alt="">
    </div>
    
    </div>
    <button class="carousel-control-prev" type="button"
    data-bs-target="#carouselDemo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next"
    type="button" data-bs-target="#carouselDemo"
    data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
    
    <div class="carousel-indicators">
    <button type="button" class="active"
    data-bs-target="#carouselDemo" data-bs-slide-to="0" >
    <img src="img/blusas3.png" alt="">
    </button>
    
    <button type="button" class="active"
    data-bs-target="#carouselDemo" data-bs-slide-to="1"><img src="img/pant1.png" alt=""></button>
    <button type="button" class="active"
    data-bs-target="#carouselDemo" data-bs-slide-to="2"><img src="img/pant2.png" alt=""></button>
    
    </div>
    
    
        </div>

        
      
        

        <div class="product-banner">
          <h2> Pantalón Mezclilla Colombiano
        </h2>
          <p class="product-color"><strong>Color:</strong> Azul mezclilla</p>
          <p class="product-price"><strong>Precio:</strong> $
289
,
06
            
           </p>
          <p class="product-finance"><strong>Financiamiento:</strong>  3 meses sin intereses de 
$
96
,
35

IVA incluido</p>
          <div class="product-buttons">
         
        
            
            <button class="btn-cart">Agregar al carrito</button>
          </div>
          <div class="formu">
            <form id="form">
                <div class="card-number">
                   <label class="cantidad">Cantidad</label>
                  <input required type="text" id="card-number" name="card-number" inputmode="numeric" autcomplete="cc-number" pattern="[0-9]+">
                 </div>
                 
                 <button id="boton">Comprar Ahora</button>
               </form>
            </div>
            <div class="segura"> <i class="bi bi-shield-fill-check"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793z"/>
                  </svg>
                <label class="cuenta">Compra Protegida.
                   </label>
                   <label class="cuenta1">
                    Recibe el producto que esperabas o te devolvemos tu dinero.</label></div>
           
           <div class="pagos"><a href="#paymentModal" class="open-modal">Medios de pago</a></div> 

  
  <div id="paymentModal" class="modal">
    <div class="modal-content">
      <a href="#" class="close">&times;</a>
    
      <h2 class="medios">  <img class="mercado" src="img/mercadopago.png" width="100px" height="100px">Medios de pago </h2>
      <p>Pagar con Mercado Pago es elegir cualquiera de estos medios. Es rápido, seguro y no tiene costo adicional.</p>
      <h3>Tarjetas de crédito</h3>
      <p>Acreditación instantánea.</p>
      <p><strong>Hasta 3 cuotas sin interés</strong> con estos bancos:</p>
      <ul>
        <li>Citibanamex - 3 meses</li>
      </ul>
      <p>O hasta 24 meses con intereses:</p>
      <div class="credit-cards">
        <img src="img/mastercard.png" alt="MasterCard" width="50">
        <img src="img/american.png" alt="American Express" width="50">
        <img src="img/visa.png" alt="Visa" width="50">
      </div>
    </div>
  </div>
         
          </div>
         
        
      </div>
     
    
      <script src="d1.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</body>
</html>