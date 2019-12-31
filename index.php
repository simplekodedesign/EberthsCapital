<?php
  $randq = rand()
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ECapital | Interbank Trader & Investor</title>
    <link rel="SHORTCUT ICON" href="img/favicon32.ico">
    <link rel="stylesheet" href="css/master.css?q=<?php echo $randq;?>">
    <link rel="stylesheet" href="./ElementsScrollAnimation/ElementsScrollAnimation.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400&display=swap" rel="stylesheet">
  </head>
  <body id="body">
    <header id="header">
      <img src="img/logo Eberths-04.png" alt="Eberths">
      <span id="navbar-icon">
        <span></span>
      </span>
      <div class="navbar">
        <a href="#hero">Inicio</a>
        <a href="#Quiensoy">¿Quién soy?</a>
        <a href="#Beneficios">Beneficios</a>
        <a href="#Servicios">Servicios</a>
        <!-- <a href="#Planes">Planes</a> -->
        <a href="#Equipo">Equipo</a>
        <a href="#Contacto">Contacto</a>
      </div>
    </header>
    <section id="hero">
      
      <div class="heroImg">
        <img src="img/logo Eberths-04.png" alt="Hero">
      </div>
      <div class="heroInfo">
        <div class="heroTitle">
          <h2 class="titles">Fondo común de</h2>
          <h1 class="titles bold">Inversión</h1>
        </div>

        <p>El destino de un inversionista lo marca el conocimiento, el tuyo, que confies en nosotros.</p>
        <a href="#Servicios" class="button">Conoce más</a>
      </div>
    </section>

    <section id="Quiensoy">
      <div class="imgContainer myAnimatable" my-animation="fade bottom">
        <img src="img/Eberths.jpg" alt="Who">
      </div>
      <div>
        <h1 class="title">¿QUIEN SOY?</h1>
        <p class="myAnimatable" my-animation="bounce right">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
          fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>        
      </div>
    </section>

    <section id="Beneficios">
      <h1 class="title">BENEFICIOS</h1>

      <div class="icon">
        <div>
          <object data="img/Destacados-08.svg" type="image/svg+xml"></object>
        </div>
        <h3>Inversiones seguras</h3>
        <p class="myAnimatable" my-animation="fade left" id="icon-first">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ex quidem iusto 
          delectus velit fuga totam eaque nobis obcaecati.
        </p>
      </div>

      <div class="icon">
        <div>
          <object data="img/Destacados-08.svg" type="image/svg+xml"></object>
        </div>
        <h3>Retornos confiables</h3>
        <p class="myAnimatable" my-animation="fade left" id="icon-second">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil minima aperiam fugit iste 
        </p>
      </div>

      <div class="icon">
        <div>
          <object data="img/Destacados-07.svg" type="image/svg+xml"></object>
        </div>
        <h3>Atención personalizada</h3>
        <p class="myAnimatable" my-animation="fade left" id="icon-third">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam porro dolor explicabo facilis.
        </p>
      </div>
    </section>

    <section id="Servicios">
      <h1 class="title">SERVICIOS</h1>

      <div class="services-container">

        <div class="service myAnimatable" my-animation="fade left" id="ServiceText">
          <p class="service-info" >
            EP CAPITAL es responsable de multiples inversiones en el Mercado de Divisas Internacional, destacandose en operaciones que involucran pares de monedas, metales, indices y criptoactivos,
            a traves de entidades financieras legalmente reguladas.
          </p>
        </div>

        <div class="service myAnimatable" my-animation="fade bottom">
          <div class="service-info">
            <h2 class="titles">INVERSIONES</h2>
            <p>
              Mientras un banco te genera anualmente un 3% en plusvalias de tu capital,
              EP CAPITAL asegura una capacidad de beneficio que puede superar hasta 5 veces la anterior,
              en tan solo un mes.              
            </p>
            <p>
              Mayores ganancias, menor tiempo.
            </p>
  
            <span class="button service-more" service="servicio2">Conoce más -</span>
          </div>
        </div>
      </div>
    </section>
    
    <section id="popup-servicesContainer">
      <div class="popup-service" id="servicio2">
        <div class="img">
          <img src="./img/logo Eberths-01.png" alt="">
        </div>
        <div class="content">
          <h1>Inversiones</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Repellendus laboriosam rem recusandae possimus architecto
            debitis iusto consequatur saepe sint! Aliquid iure ratione
            quo animi eveniet voluptas officia ad, temporibus delectus.
          </p>
        </div>
        <span class="backButton">x</span>
      </div>
    </section>

    <section id="Equipo">
      <h1 class="title">EQUIPO</h1>
      <div class="categories">
        <h2 class="titles team active" id="inversores">Inversores</h2>
        <h2 class="titles team" id="analistas">Analistas</h2>
        <h2 class="titles team" id="socios">Socios</h2>
      </div>
      <div class="member inversor myAnimatable" my-animation="bounce left">
        <img src="" alt="">
        <h2>Jhon Doe</h2>
        <h2 class="bold">Inversor</h2>
        <button class="button biography">Ver biografía</button>
      </div>
      <div class="member inversor myAnimatable" my-animation="bounce bottom">
        <img src="" alt="">
        <h2>Jhon Doe</h2>
        <h2 class="bold">Inversor</h2>
        <button class="button biography">Ver biografía</button>
      </div>
      <div class="member inversor myAnimatable" my-animation="bounce right">
        <img src="" alt="">
        <h2>Jhon Doe</h2>
        <h2 class="bold">Inversor</h2>
        <button class="button biography">Ver biografía</button>
      </div>
      <div class="member analista myAnimatable" my-animation="bounce bottom" style ="display: none;">
        <img src="img/JoseSalazar.jpg" alt="Jose Salazar">
        <h2>Jose Salazar</h2>
        <h2 class="bold">Analista</h2>
        <button class="button biography">Ver biografía</button>
        <div class="bio">
          <p>
            Emprendedor, venezolano con 18 años de edad.  Conocí el mundo del traiding hace 1 año y desde ahí despertó
            en mí el interés por los mercados financieros y lo beneficioso que es para alcanzar el éxito. </br>
            Recibí mentorías de Eberths Perozo especializándome en el método IPDA (Interbank Price Delivery Algorithm) 
            donde he adquirido conocimientos sobre una estrategia para operar más efectiva y precisa para alcanzar mi objetivo, el cual es convertir el trading en mi profesión
            y obtener la libertad de tiempo e impulsar así mi autonomía financiera. </br> 
            Pares a destacar: XAU/USD – GBP/AUD
          </p>
        </div>
      </div>
      <div class="member socio myAnimatable" my-animation="bounce bottom" style ="display: none;">
        <img src="" alt="">
        <h2>Jhon Doe</h2>
        <h2 class="bold">Socio</h2>
        <button class="button biography">Ver biografía</button>
      </div>
    </section>
    
    <footer id="footer">

      <img src="img/logo Eberths-01.png" alt="logo" class="logo" id="logoFooter">

      <address class="contacCont" id="Contacto">
        <h3>Contactame:</h3>
        <div class="contact" >
          <a href="https://www.google.com.co/maps/place/Buenos+Aires,+Argentina/@-37.0582747,-64.5212482,6z/data=!3m1!4b1!4m9!3m8!1s0x95edbcb7595281d9:0x4ad309fcdcf0a144!5m3!1s2018-06-06!4m1!1i2!8m2!3d-37.2017285!4d-59.8410697" id="location">Argentina, Buenos Aires.</a>
        </div>
        <div class="contact" id="another">
          <a href="tel:+5491164909499" id="number">+54 9116490-9499</a>
        </div>
        <div class="contact">
          <a href="mailto:support@ecapital.com" id="email">contact@ecapital.com</a>
        </div>
        <div id="Rs">
          <div class="iconRS">
            <a href="https://www.instagram.com/eberthsp_/"><img src="img/instagram.svg" alt="Instagram"></a>
          </div>
          <div class="iconRS">
            <a href="https://api.whatsapp.com/send?phone=5491164909499" target="_blank"><img src="img/whatsapp.svg" alt="Whatsapp"></a>
          </div>
          <div class="iconRS">
            <a href="https://web.telegram.org/#/im?p=@Eberthsp" target="_blank"><img src="img/telegram.svg" alt="Whatsapp"></a>
          </div>
        </div>
      </address>
  
      <form class="myAnimatable contactForm" my-animation="clipShake center x" id="contactForm">
        <h2>Enviame un mensaje:</h2>
        <div>
          <input type="text" id="emailForm" placeholder="Tu email *" required name="email">
          <input type="text" placeholder="Dime tu nombre" id="nameForm" required name="name">
        </div>
        <div>
          <!-- <label for="message"></label> -->
          <textarea name="message" placeholder="Contáctame *" id="message" required></textarea>
        </div>
        <!-- <button class="button">Envíar</button> -->
        <input type="submit" value="Enviar" class="button" id="submitButton">
      </form>
    </footer>

    <script type="text/javascript" src="./scripts/main.js?q=<?php echo $randq;?>"></script>
    <script type="text/javascript" src="./ElementsScrollAnimation/ElementsScrollAnimation.js"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
      var Tawk_API = Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/5e0a85d327773e0d832b3f3b/default';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
    </script>
  <!--End of Tawk.to Script-->
  </body>
</html>
