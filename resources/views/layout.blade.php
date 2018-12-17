<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
</head>
<body>
    	<header class="top-area">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo">
								<a href="index.html">
									MC<span>CT</span>
								</a>
							</div><!-- /.logo-->
						</div><!-- /.col-->
						<div class="col-sm-10">
							<div class="main-menu">
							
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<i class="fa fa-bars"></i>
									</button><!-- / button-->
								</div><!-- /.navbar-header-->
								<div class="collapse navbar-collapse">		  
									<ul class="nav navbar-nav navbar-right">
										<li class="smooth-menu"><a href="#home">Início</a></li>
										<li class="smooth-menu"><a href="#sobre">Sobre</a></li>
										<li class="smooth-menu"><a href="#espec">Especialidades</a></li>
										<li class="smooth-menu"><a href="#plano">Nossos planos</a></li>
										<li class="smooth-menu"><a href="#promocao">Promoções</a></li>
										<li class="smooth-menu"><a href="#cont">Contato</a></li>
										<li>
											<button class="book-btn">Entrar
											</button>
										</li><!--/.project-btn--> 
										<li>
											<button class="book-btn">Inscrever-se
											</button>
										</li><!--/.project-btn--> 
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.main-menu-->
						</div><!-- /.col-->
					</div><!-- /.row -->
					<div class="home-border"></div><!-- /.home-border-->
				</div><!-- /.container-->
			</div><!-- /.header-area -->

		</header><!-- /.top-area-->
    <ul class="nav nav-tabs" role="tablist">

									<li role="presentation" class="active">
									 	<a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
									 		<i class="fa fa-tree"></i>
									 		CADASTRAR MÉDICO
									 	</a>
									</li>
    </ul>
    @yield('conteudo')
<ul>
  <li><a href="/home"><i>Página Principal</i></a>
    </li>
  <li><a href="/contato"><i>Fale conosco</i></a>
    </li>
  <li><a href="/sobre"><i>Sobre</i></a>
    </li>
  </ul>
</body>
</html>