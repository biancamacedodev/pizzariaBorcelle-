<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Pizzaria Delicious - Menu</title>
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
		        <span class="oi oi-menu"></span> Menu
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
            	<h1 class="mb-3 mt-5 bread">Seu Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="./">Home</a></span><span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
{{-- end slide menu --}}

{{-- menu pizza --}}
<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Menu de Pizzas</h2>
            <p>Descubra nossa variedade de sabores irresistíveis de pizza.</p>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-flex">
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(assets/images/pizza-1.jpg);"></a>
    					<div class="text p-4">
    						<h3>Pizza Italiana</h3>
    						<p> Deliciosa pizza com molho de tomate, queijo mussarela e pepperoni.</p>
    						<p class="price"><span>$44.50</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Pedir</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(assets/images/pizza-2.jpg);"></a>
    					<div class="text p-4">
    						<h3>Pizza Grega</h3>
    						<p>Uma combinação única de queijo feta, azeitonas pretas, cebola, tomate e molho de tomate.</p>
    						<p class="price"><span>$49.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Pedir</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(assets/images/pizza-3.jpg);"></a>
    					<div class="text p-4">
    						<h3>Pizza Caucasiana</h3>
    						<p>Uma pizza saborosa com queijo feta, espinafre, tomate e molho de tomate.</p>
    						<p class="price"><span>$49.80</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Pedir</a></p>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-lg-last" style="background-image: url(assets/images/pizza-4.jpg);"></a>
    					<div class="text p-4">
    						<h3>Pizza Americana</h3>
    						<p>Clássica pizza com molho de tomate, queijo mussarela e presunto.</p>
    						<p class="price"><span>$42.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Pedir</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-lg-last" style="background-image: url(assets/images/pizza-5.jpg);"></a>
    					<div class="text p-4">
    						<h3>Pizza de Tomate</h3>
    						<p>Uma opção deliciosa com massa crocante, molho de tomate e fatias suculentas de tomate com azeitonas pretas.</p>
    						<p class="price"><span>$30.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Pedir</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-lg-last" style="background-image: url(assets/images/pizza-6.jpg);"></a>
    					<div class="text p-4">
    						<h3>Marguerita</h3>
    						<p>Uma pizza tradicional com molho de tomate, queijo mussarela e folhas frescas de manjericão.</p>
    						<p class="price"><span>$60.80</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Pedir</a></p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
{{-- end menu pizza --}}

{{-- menu precificaçao --}}
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4"> Menu Precificaçao</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Conheça nosso menu de preços e descubra uma jornada gastronômica repleta de sabores autênticos e opções irresistíveis para todos os gostos e ocasiões.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-1.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza Italiana</span></h3>
	        				<span class="price">$49.90</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Uma clássica e irresistível combinação de molho de tomate, queijo mussarela e pepperoni, perfeita para os amantes de sabores tradicionais.</p>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-2.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza Havaiana</span></h3>
	        				<span class="price">$29.95</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Uma deliciosa mistura de sabores tropicais, com molho de tomate, queijo mussarela, presunto e abacaxi, criando uma explosão de doçura e salgadinho em cada mordida.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-3.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza Grega</span></h3>
	        				<span class="price">$89.90</span>
	        			</div>
	        			<div class="d-block">
	        				<p> Uma opção única e saborosa, com uma base de molho de tomate coberta com queijo feta, azeitonas pretas, cebola, tomate e orégano, trazendo os sabores autênticos da culinária grega até você.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-4.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza Bacon e Cebola Caramelizada</span></h3>
	        				<span class="price">$29.90</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Uma pizza irresistível com uma generosa camada de molho de tomate, queijo mussarela, bacon crocante e deliciosas cebolas caramelizadas, combinando o sabor salgado do bacon com o toque doce das cebolas para uma experiência gastronômica única e deliciosa.</p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-5.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza Havaiana Especial</span></h3>
	        				<span class="price">$49.91</span>
	        			</div>
	        			<div class="d-block">
	        				<p> Uma versão premium da clássica pizza havaiana, com ingredientes selecionados cuidadosamente para uma experiência de sabor excepcionalmente gratificante e luxuosa.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-6.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza Frango com Catupiry</span></h3>
	        				<span class="price">$49.99</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Uma pizza irresistível carregada com deliciosos pedaços de frango desfiado, catupiry cremoso, cebola roxa e milho verde, proporcionando uma combinação de sabores cremosos e texturas suculentas que agradarão seu paladar.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-7.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza de Bacon</span></h3>
	        				<span class="price">$59.90</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Uma opção indulgente para os amantes de bacon, com uma base de molho de tomate coberta com queijo mussarela e generosas porções de bacon crocante, garantindo uma explosão de sabor a cada mordida.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(assets/images/pizza-8.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza Presunto &amp; Abacaxi</span></h3>
	        				<span class="price">$69.99</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Uma combinação clássica e agridoce, com fatias suculentas de presunto e pedaços de abacaxi sobre uma base de molho de tomate e queijo mussarela, criando um equilíbrio perfeito de sabores para satisfazer seu paladar.</p>
	        			</div>
	        		</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section>
{{-- end precificaçao --}}

{{-- menu cardapio --}}
    <section class="ftco-menu">
    	<div class="container-fluid">
    		<div class="row d-md-flex">
	    		<div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(assets/images/about.jpg);">
	    		</div>
	    		<div class="col-lg-8 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Pizza</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Burgers</a>

		              <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Macarrão</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/pizza-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pizza Italiana</a></h3>
		              					<p>Uma clássica e irresistível combinação de molho de tomate, queijo mussarela e pepperoni, perfeita para os amantes de sabores tradicionais.</p>
		              					<p class="price"><span>$29.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Pedir</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/pizza-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pizza Grega</a></h3>
		              					<p>Uma opção única e saborosa, com uma base de molho de tomate coberta com queijo feta, azeitonas pretas, cebola, tomate e orégano, trazendo os sabores autênticos da culinária grega até você.</p>
		              					<p class="price"><span>$38.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Pedir</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/pizza-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pizza de Bacon</a></h3>
		              					<p>Uma opção indulgente para os amantes de bacon, com uma base de molho de tomate coberta com queijo mussarela e generosas porções de bacon crocante, garantindo uma explosão de sabor a cada mordida.</p>
		              					<p class="price"><span>$42.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Pedir</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/drink-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Limonada</a></h3>
		              					<p> Uma refrescante e cítrica bebida, perfeita para saciar a sede em dias quentes. Feito com suco de limão fresco e gelo, é uma opção deliciosa e revigorante para acompanhar sua refeição.</p>
		              					<p class="price"><span>$12.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Pedir</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/drink-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Gin tônica com geleia de morango</a></h3>
		              					<p>Desfrute de um toque criativo e saboroso em sua bebida favorita com nossa gin tônica com geleia de morango.</p>
		              					<p class="price"><span>$22.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Pedir</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/drink-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Refrigerantes</a></h3>
		              					<p>Complemente sua refeição com uma seleção de refrigerantes gelados, perfeitos para saciar a sede e acompanhar sua pizza favorita com um toque de efervescência.</p>
		              					<p class="price"><span>$11.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Pedir</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/burger-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Burguer Clássico</a></h3>
		              					<p> Suculento hambúrguer de 180g, queijo prato, alface, tomate e cebola caramelizada em pão de brioche.</p>
		              					<p class="price"><span>$22.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Pedir</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/burger-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Burguer BBQ</a></h3>
		              					<p>Generoso hambúrguer de 200g, queijo coalho, bacon, cebola crispy e molho BBQ em pão de mandioca.</p>
		              					<p class="price"><span>$22.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Pedir</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/burger-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Burguer Cordeiro</a></h3>
		              					<p>suculento e temperado com especiarias brasileiras, acompanhado por queijo de cabra derretido, cebola roxa caramelizada, rúcula fresca e molho de hortelã, tudo em um pão de ciabatta tostado.</p>
		              					<p class="price"><span>$23.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Pedir</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/pasta-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pasta alla Arrabbiata</a></h3>
		              					<p>Um prato italiano clássico, a Pasta alla Arrabbiata é feita com macarrão parafuso em um molho de tomate picante, temperado com alho, pimenta vermelha, azeite e ervas aromáticas.</p>
		              					<p class="price"><span>$29.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Pedir</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/pasta-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Spaghetti à Bolonhesa</a></h3>
		              					<p>Um dos favoritos da Itália, o Spaghetti à Bolonhesa é um espaguete coberto com um molho de carne moída e tomate, cozido lentamente com cebola, alho e ervas.</p>
		              					<p class="price"><span>$25.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Pedir</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/pasta-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Spaghetti à Matriciana</a></h3>
		              					<p>O Spaghetti à Matriciana é um prato italiano feito com espaguete em um molho de tomate com carne moída, pancetta, cebola e alho, finalizado com manjericão fresco e queijo pecorino ralado.</p>
		              					<p class="price"><span>$24.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Pedir</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>
{{-- end cardapio --}}

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