<!DOCTYPE html>
<html lang="en">
<head>
    <!--Nombre e icono de la pestaña de la página-->
    <title>SMARTCASH</title>
    <link rel="shortcut icon" href="favicon1.ico">  

    <!--Referencias de codigos css y js para animación y diseño de la página-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    
</head> 

<body>
    <!-- ******HEADER****** --> 
    
    <header id="header" class="header">  
        <nav class="main-nav navbar-expand-md" role="navigation">  
	       
	        <div class="container-fluid position-relative">
            <!--Logo de SmartCash y titulo-->
                <a class="logo navbar-brand scrollto" href="#hero">
                    <span class="logo-icon-wrapper"><img class="logo-icon" src="assets/images/logo-icon.svg" alt="icon"></span>
                    <span class="text"><span class="highlight">SMART</span>CASH</span>
                </a>
                <!--//logo-->
            
                <!--Barra de Menu con opciones para la vegación dentro de la misma página y la opción de irse al inicio de sesión-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse"  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><!--//nav-toggle-->
                
                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav ms-md-auto">
                        <!--Lista de las opcines con sus referencias para desplazarse por la página-->
                        <li class="nav-item"><a class="btn btn-primary btn-cta" href="Login.php" >Iniciar Sesión</a></li> 
                        <li class="nav-item"><a class="nav-link scrollto" href="# "> </a></li>
                        <li class="nav-item"><a class="nav-link scrollto" href="#about">¿Qué es SmartCash?</a></li> 
                        <li class="nav-item"><a class="nav-link scrollto" href="#misión">Misión y Visión</a></li>                      
                        <li class="nav-item"><a class="nav-link scrollto" href="#team">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link scrollto" href="#Contáctanos">Contáctanos</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
            
        </nav><!--//main-nav-->                     
    </header><!--//header-->
    
    <div id="hero" class="hero-section">
        <!-- Navegación automatica de páginas Promotoras -->
        <div id="hero-carousel" class="hero-carousel carousel carousel-fade slide" data-bs-ride="carousel" data-bs-interval="10000">
             <!--Logo de SmartCash en páginas-->
            <div class="figure-holder-wrapper">
        		<div class="container">
            		<div class="row justify-content-end">
                		<div class="figure-holder">
                	        <img class="figure-image img-fluid" src="css/img/caja.png" alt="image"/>
                        </div><!--//figure-holder-->
            		</div><!--//row-->
        		</div><!--//container-->
    		</div><!--//figure-holder-wrapper-->
             <!--Indicadores de páginas promotoras-->
			<ol class="carousel-indicators">
				<li class="active" data-bs-slide-to="0" data-bs-target="#hero-carousel"></li>
				<li data-bs-slide-to="1" data-bs-target="#hero-carousel"></li>
				<li data-bs-slide-to="2" data-bs-target="#hero-carousel"></li>
			</ol>
			
			<!-- Contenido de las páginas/slides -->
			<div class="carousel-inner">
    			<!-- Activación del indicador -->
				<div class="carousel-item item-1 active">
					<div class="item-content container">
    					<div class="item-content-inner">
    				        <!-- Primer contenido para promoción y botón dirigirse a más información -->
				            <h2 class="heading">SmartCash es una caja registradora inteligente</h2>
				            <p class="intro">La cual te ayuda a proteger tu dinero</p>
				            <a class="btn btn-primary btn-cta" href="#about">Conoce más</a>
    				        
    					</div><!--//item-content-inner-->
					</div><!--//item-content-->
				</div><!--//item-->
				
				<div class="carousel-item item-2">
					<div class="item-content container">
						<div class="item-content-inner">
    				        <!-- Segundo contenido para promoción y botón dirigirse a iniciar sesión -->
				            <h2 class="heading">¿Ya eres usuario?</h2>
				            <p class="intro">Entra al menú de usuario y revisa como va tu negocio</p>
				            <a class="btn btn-primary btn-cta" href="Login.php" target="_self">Iniciar Sesión</a>
    				        
    					</div><!--//item-content-inner-->
					</div>
				</div><!--//item-->
				
				<div class="carousel-item item-3">
					<div class="item-content container">
						<div class="item-content-inner">
    				        <!-- Tercer contenido para promoción y botón dirigirse a Registro-->
				            <h2 class="heading">¿Quieres empezar a proteger tu negocio?</h2>
				            <p class="intro">Unete a los miles de dueños que ya están haciendo lo mejor para proteger su dinero</p>
				            <a class="btn btn-primary btn-cta" href="Registro.php" target="_self">Registrate</a>
    				        
    					</div><!--//item-content-inner-->
					</div>
				</div><!--//item-->
			</div><!--//carousel-inner-->

		</div><!--//carousel-->
    </div><!--//hero-->
    <!-- Sección de Que es -->
    <div id="about" class="about-section">
        <div class="container text-center">
            <!-- Titulo y descripción principales-->
            <h2 class="section-title">¿Qué es SmartCash?</h2>
            <p class="intro">Es una caja registradora inteligente que tiene las funciones normales como el registro y la venta de producto, sin embargo,
                 SmartCash cuenta con una serie de características especiales:</p>    
                 <!-- Imagenes y descripción de caracteristicas principales -->        
            <div class="items-wrapper row">
                <div class="item col-md-4 col-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="assets/images/figure-1.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">Identificador con huella digital</h3>
                        <div class="item-desc mb-3">
                           SmartCash con ayuda de la huella sabe si es el empleado el que ha abierto la caja, de no ser así o de estar bajo amenaza el empleado puede no poner la huella. 
                        </div><!--//item-desc-->
                           </div><!--//item-inner-->
                     </div><!--//item-->
                <div class="item col-md-4 col-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="assets/images/figure-2.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">Cámara para tomar evidencia</h3>
                        <div class="item-desc mb-3">
                           Al no ser el empleado el que desea sacar el dinero, SmartCash detectará el movimiento y si lo hay tomará una foto con fecha y hora.
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-4 col-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="assets/images/figure-3.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">Envio de aviso de la situación y evidencia</h3>
                        <div class="item-desc mb-3">
                           SmartCash mandará la foto a su celular y menú principal para que usted este al pendiente de su negocio aunque este lejos.</div><!--//item-desc-->
                                     </div><!--//item-inner-->
                </div><!--//item-->
                <!-- Botón para dirigir a contacto -->
                <a class="btn btn-cta btn-primary" href="#Contáctanos">Contáctanos</a>
            </div><!--//items-wrapper-->
        </div><!--//container-->
    </div><!--//about-section-->
    <!-- Sección de Misión -->
    <div id="misión" class="testimonials-section">
        <div class="container">
            <!-- Titulo principal -->
            <h2 class="section-title text-center">MISIÓN Y VISIÓN</h2>
            <div class="item mx-auto">
                 <div class="container text-center">
                    <!-- Logo de SmartCash-->
                     <div class="figure-holder">
                	        <img class="figure-image img-fluid" src="css/img/caja.png" alt="image"/>
                        </div><!--//figure-holder-->
                        <!-- Contenido de la misión y visión-->
                    <p><FONT COLOR="white">  SmartCash busca para el 2023, brindar un servicio de seguridad y acompañamiento de sus clientes, que haga a estos sentir mucho más seguros con respecto
                      a la recolección de evidencias para proteger y exigir justicia en caso de sufrir algún tipo de robo por parte de terceros, por otro lado, espera crecer
                      como empresa, para dar un servicio mucho más completo que abarque una mayor parte del proceso.</p>
                      </div><!--//container text-->
              </div><!--//item-->
        </div><!--//container-->
    </div><!--//testimonials-->
    <!-- Sección de equipo -->
    <div class="team-section" id="team">
        <div class="container text-center">
            <!-- Titulo-->
            <h2 class="section-title">NUESTRO EQUIPO</h2>
            <!-- Primera columna con imagen del miembro del equipo -->
            <div class="members-wrapper row">
                <div class="item col-md-6 col-12">
                    <div class="item-inner">
                        <div class="profile mb-3">
                            <img class="profile-image" src="assets/images/team-1.png" alt="image" />
                        </div>
                        <!-- Nombre y pequeña descripción -->
                        <div class="member-content">
                            <h3 class="member-name">Jazmin Sanchez</h3>
                            <div class="member-title">Estudiante de ingeniería electrónica</div>                          
                            <div class="member-desc">
                               <p>Jazmin es la encargada del diseño y progrmación del software de usuario, la cual busca que la navegación en la página sea lo más intuitiva posible para ser amigable con todos los tipos de usuario. </p>
                            </div><!--//member-desc-->
                        </div><!--//member-content-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <!-- Segunda columna con imagen del miembro del equipo -->
                <div class="item col-md-6 col-12">
                    <div class="item-inner">
                        <div class="profile mb-3">
                            <img class="profile-image" src="assets/images/team-2.png" alt="Tom Najdek" />
                        </div>
                        <!-- Nombre y pequeña descripción -->
                        <div class="member-content">
                            <h3 class="member-name">Marco Muñóz</h3>
                            <div class="member-title">Estudiante de ingeniería electrónica</div>
                            <div class="member-desc">
                                <p>Marco es el encargado del hardware, aquel que busca mejorar el funcionamiento de los sensores y su respuesta para la recoleción de datos y el correcto funcionamiento del sistema.</p>
                            </div><!--//member-desc-->
                        </div><!--//member-content-->
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//members-wrapper-->
            <div class="text-center mt-5">
                <!-- Botón para ir a contáctanos-->
	            <a class="btn btn-cta btn-primary" href="#Contáctanos" >Contáctanos</a>
            </div>
        </div>
    </div><!--//team-section-->
 <!-- Sección de Contáctanos -->
    <div id="Contáctanos" class="contact-section">
        <div class="container text-center">
            <!-- Titulo -->
            <h2 class="section-title">CONTÁCTANOS</h2>
            <div class="contact-content">
                <!-- Descripcion -->
                <p>Si desea empezar a trabajar con nosotros para mantener más protegido su negocio no dude en registrarse</p>
                
            </div>
            <!-- Botón para llevar al registro -->
            <a class="btn btn-cta btn-primary" href="Registro.php">Registrate</a>
            
        </div><!--//container-->
    </div><!--//contact-section-->
    <!-- Derechos de autor de la plantilla utilizada -->
    <footer class="footer text-center">
        <div class="container">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fa-solid fa-heart"></i> by <a href="https://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer>
      
    <!-- Javascript para la nimación de la página -->          
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
    <script src="assets/js/main.js"></script> 
       
</body>
</html> 

