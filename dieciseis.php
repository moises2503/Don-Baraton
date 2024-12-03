<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Estiloiphone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>

  <header>
        <nav class="OFERTAS">
            <h1></h1>
        </nav>
    </header>

    <ul>

        <li>
            <a href="indexx.php">
                <div class="icon">
                   <img class="donbaraton" src="https://th.bing.com/th/id/OIP.mX6HCc8mCZDGAbgWsBfryAHaHd?rs=1&pid=ImgDetMain" alt="">
                </div>
            </a>
        </li>

       
        <li>
            <a href="#">
                <div class="icon">
                </div>
                <div class="name"><span data-text="Ofertas" >Ofertas</span></div>
                <div class="name"><span data-text="¡Encuentra precios increíbles cada día!" >
                    ¡Encuentra precios increíbles cada día! </span></div>
            </a>
        </li>

        <li>
            <a href="Ofertas.php">
                <div class="icon">
                <i class="fa-solid fa-tag" ></i>
                <i class="fa-solid fa-tag" ></i>
                </div>
                <div class="name"><span data-text="Todas las ofertas">Todas las ofertas</span></div>
            </a>
        </li>

        <li>
            <a href="OfertasRelam.php">
                <div class="icon">
                <i class="fa-solid fa-bolt"></i>
                <i class="fa-solid fa-bolt"></i>
                </div>
                <div class="name"><span data-text="Ofertas relámpago">Ofertas relámpago</span></div>
            </a>
        </li>

        <li>
            <a href="Tecnologia.php">
                <div class="icon">
                <i class="fa-solid fa-desktop"></i>
                <i class="fa-solid fa-desktop"></i>
                </div>
                <div class="name"><span data-text="Tecnologia">Tecnologia</span></div>
            </a>
        </li>

        <li>
            <a href="Deporte.php">
                <div class="icon">
                <i class="fa-solid fa-person-walking"></i>
                <i class="fa-solid fa-person-walking"></i>
                </div>
                <div class="name"><span data-text="Deporte">Deporte</span></div>
            </a>
        </li>

        <li>
            <a href="unoo.php">
                <div class="icon">
                <i class="fa-solid fa-shirt"></i>
                <i class="fa-solid fa-shirt"></i>
                </div>
                <div class="name"><span data-text="Moda">Moda</span></div>
            </a>
        </li>
    </ul>


    <div id="uno"> 
    </div>


   <div class="product-container">
        <div class="carousel" id="carouselDemo"
        data-bs-wrap="true" data-bs-ride="carousel">
    <div class="carousel-inner">
    
    <div class="carousel-item "
    data-bs-interval="2000">
        
    <img id="imagenes"src="https://i.pinimg.com/736x/9c/dd/eb/9cddebe9888e57679c7102b2a5247b0e.jpg" alt="">
    </div>
    <div class="carousel-item active">
    <img id="imagenes"src="https://i.pinimg.com/736x/30/a2/8c/30a28c924a00e694f086ea1995a2334f.jpg" alt="">
    </div>
    <div class="carousel-item">
    <img id="imagenes"src="https://i.pinimg.com/736x/b7/7d/40/b77d406d52bbe6067285dcd3feb1c6b2.jpg" alt="">
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
    <img src="https://i.pinimg.com/736x/9c/dd/eb/9cddebe9888e57679c7102b2a5247b0e.jpg" alt="">
    </button>
    
    <button type="button" class="active"
    data-bs-target="#carouselDemo" data-bs-slide-to="1"><img src="https://i.pinimg.com/736x/30/a2/8c/30a28c924a00e694f086ea1995a2334f.jpg" alt=""></button>
    <button type="button" class="active"
    data-bs-target="#carouselDemo" data-bs-slide-to="2"><img src="https://i.pinimg.com/736x/b7/7d/40/b77d406d52bbe6067285dcd3feb1c6b2.jpg" alt=""></button>
    
    </div>
    
    
        </div>



        <div class="product-banner">
          <h2>Chamarra Nike 100% Poliester</h2>
          <p class="product-color"><strong>Color:</strong> Negro/Azul/Blanco</p>
          <p class="product-price"><strong>Precio:</strong> $1,499.00</p>
          <p class="product-finance"><strong>Financiamiento:</strong> en 24 meses de $90.58</p>
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
           
          </div>

          <div class="pagos"><a href="#paymentModal" class="open-modal">Medios de pago</a></div> 

  
<div id="paymentModal" class="modal">
  <div class="modal-content">
    <a href="#" class="close">&times;</a>
  
    <h2 class="medios">  <img class="mercado" src="img/mercadopago.png" width="100px" height="100px">Medios de pago </h2>
    <p>Pagar con Mercado Pago es elegir cualquiera de estos medios. Es rápido, seguro y no tiene costo adicional.</p>
    <h3>Tarjetas de crédito</h3>
    <p>Acreditación instantánea.</p>
    <p><strong>Hasta 3 cuotas sin interés</strong> con estos bancos:</p>
   
    <p>O hasta 24 meses con intereses:</p>
    <div class="credit-cards">
      <img src="img/mastercard.png" alt="MasterCard" width="50">
      <img src="img/american.png" alt="American Express" width="50">
      <img src="img/visa.png" alt="Visa" width="50">
    </div>
  </div>
         
        
      </div>
     
    
      <script src="Estiloiphone.css"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>