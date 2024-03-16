<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Pizzaria Delicious - Sobre nós</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>Pizzaria<br><small>Delicious</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Sobre Nós
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
              <li class="nav-item {{ request()->is('menu') ? 'active' : '' }}"><a href="{{ route('menu') }}" class="nav-link">Menu</a></li>
              <li class="nav-item {{ request()->is('about') ? 'active' : '' }}"><a href="{{ route('sobre') }}" class="nav-link">Sobre</a></li>
              <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"><a href="{{ route('contato') }}" class="nav-link">Contato</a></li>
          </ul>
	      </div>
		  </div>
	</nav>
    <!-- END nav -->

{{-- slide menu --}}
  <section class="home-slider owl-carousel img" style="background-image: url(assets/images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(assets/images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Sobre nós</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="./">Home</a></span><span>Sobre</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
{{-- end slide menu --}}

{{-- section sobre/nós --}}
    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>(00) 1234-5678</h3>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>Rua das Margaridas, 123</h3>
	    						<p>Bairro da Alegria - Cidade Feliz</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Aberto Seg-Sext</h3>
	    						<p>8:00 - 21:00</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(assets/images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">Bem vindo a <span class="flaticon-pizza">Pizzaria</span> Delicious</h2>
        </div>
        <div>
  				<p>O espaço na Delicious Pizzaria é projetado para proporcionar uma experiência gastronômica única e memorável.
           Com uma atmosfera acolhedora e descontraída, nossos clientes se sentem em casa desde o momento em que entram. 
           Nossos ambientes são cuidadosamente decorados para criar um ambiente acolhedor e convidativo, perfeito para desfrutar de uma refeição com amigos e familiares. Seja em nosso salão principal, no ambiente ao ar livre ou na área de espera, cada espaço é pensado para garantir conforto e satisfação aos nossos clientes.
            Venha relaxar e desfrutar de momentos deliciosos conosco na Delicious Pizzaria. 
          </p>
  			</div>
    	</div>
    </section>
{{-- end sobre nos/espaço --}}

{{-- Chefes --}}

    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Chefes</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Nossos funcionários da pizzaria são verdadeiros mestres da culinária, dedicados a proporcionar uma experiência gastronômica excepcional com cada pizza preparada.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(assets/images/person_1.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Tom Smith</a></h3>
      					<span class="position">Preparador de Massas</span>
      					<div class="text">
	        				<p>Nosso Preparador de Massas é o artesão por trás da perfeição da nossa massa, garantindo a base ideal para cada uma de nossas deliciosas pizzas.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(assets/images/person_2.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Mark Wilson</a></h3>
      					<span class="position">Mestre do Forno</span>
      					<div class="text">
	        				<p>Assando cada pizza com perfeição para garantir uma crosta dourada e irresistível em cada pedaço.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(assets/images/person_3.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Patrick Jacobson</a></h3>
      					<span class="position">Montador de Pizzas</span>
      					<div class="text">
	        				<p>Habilidoso em montar pizzas com maestria, transformando cada pedido em uma obra-prima de sabor e apresentação.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(assets/images/person_4.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Ivan Dorchsner</a></h3>
      					<span class="position">Supervisor de Qualidade</span>
      					<div class="text">
	        				<p>Nosso Supervisor de Qualidade é o guardião da excelência em nossa pizzaria, garantindo que cada pizza seja preparada e servida de acordo com os mais altos padrões, proporcionando uma experiência gastronômica excepcional aos nossos clientes.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        </div>
      </div>
    </section>
    {{-- end chefes --}}
    {{-- classificaçao interativa --}}
		<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(assets/images/bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-pizza-1"></span></div>
		              	<strong class="number" data-number="100">0</strong>
		              	<span>Franquias Delicious</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-medal"></span></div>
		              	<strong class="number" data-number="85">0</strong>
		              	<span>Prêmio Destaque</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-laugh"></span></div>
		              	<strong class="number" data-number="10567">0</strong>
		              	<span>Clientes Felizes</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-chef"></span></div>
		              	<strong class="number" data-number="900">0</strong>
		              	<span>Funcionários</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>
{{-- end class --}}

    {{-- contato --}}
		<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<div id="map"></div>
            
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Contato</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Nome">
		    				</div>
	    				</div>
	    				<div class="d-me-flex">
	    					<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Sobrenome">
		    				</div>
	    				</div>
	    				<div class="form-group">
	              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Digite sua mensagem"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Send" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>
{{-- end contato --}}

{{-- footer --}}
    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Sobre nós</h2>
              <p>Na Pizzaria Delicious, cada fatia conta uma história de sabor. Venha nos visitar e descubra o verdadeiro prazer da pizza.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Ofertas</a></li>
                <li><a href="#" class="py-2 d-block">Delivery</a></li>
                <li><a href="#" class="py-2 d-block">Ingredientes de qualidade</a></li>
                <li><a href="#" class="py-2 d-block">Diversificado</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Dúvidas?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Rua das Margaridas, 123, Bairro da Alegria, Cidade Feliz</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">(00) 1234-5678</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@pizzariadelicious.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Este modelo é feito por <a href="https://www.linkedin.com/in/bianca-macedo-973341179/" target="_blank">Bianca Macedo</a> <i class="icon-heart" aria-hidden="true"></i></p>
          </div>
        </div>
      </div>
    </footer>
{{-- end footer --}}
  

<!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/jquery.animateNumber.min.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script src="assets/js/jquery.timepicker.min.js"></script>
<script src="assets/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="assets/js/google-map.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>