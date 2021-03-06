<?php 
    include 'controllerMedico.php';
?>
<!DOCTYPE html>
<html class="no-js"  lang="pt-br">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>Cadastrar médicos</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--animate.css-->
		<link rel="stylesheet" href="assets/css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="assets/css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="assets/css/datepicker.css" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>

		<!-- range css-->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="assets/css/bootstrap.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css"/>

		<!--style.css-->
		<link rel="stylesheet" href="assets/css/style.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="assets/css/responsive.css" />
        
        
       <link href="assets/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.css" rel="stylesheet" media="screen">
        
        <style>
            .top-area {
                position: static; 
                background-color: rgba(77,78,84,1);
            }
            
            #medicos{
                position: relative;
                left: 326px;
                bottom: 107px;
            }
            
            #jo{
                position: relative;
				left: 123px;
            }            
            
            #bt{
                position: relative;
                left: 760%;
            }
            
            #especialidade{
                position: relative;
                left: 108%;
                bottom: 106px;
            }
            #data{
                position: relative;
                right: 310px;
            }
            
            #div{
                width: 100%;
            }
        </style>
        

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

<!--travel-box start-->
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
										<li class="smooth-menu"><a href="index.html">home</a></li>
										<li class="smooth-menu"><a href="#gallery">Sobre</a></li>
										<li class="smooth-menu"><a href="#pack">Especialidades</a></li>
										<li class="smooth-menu"><a href="#spo">Nossos planos</a></li>
										<li class="smooth-menu"><a href="#blog">Promoções</a></li>
										<li class="smooth-menu"><a href="#subs">Contato</a></li>
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
		<!-- main-menu End -->
		<section  class="travel-box">
        	<div>
        		<div class="row">
        			<div class="">
        				<div class="single-travel-boxes">
        					<div id="desc-tabs" class="desc-tabs">

								<ul class="nav nav-tabs" role="tablist">

									<li role="presentation" class="active">
									 	<a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
									 		<i class="fa fa-tree"></i>
									 		CADASTRAR MÉDICO
									 	</a>
									</li>

									<!--<li role="presentation">
										<a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">
											<i class="fa fa-building"></i>
											hotels
										</a>
									</li>

									<li role="presentation">
									 	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">
									 		<i class="fa fa-plane"></i>
									 		flights
									 	</a>
									</li>
								</ul>-->

								<!-- Tab panes -->
								<div class="tab-content">

									<div role="tabpanel" class="tab-pane active fade in" id="tours">
										<div class="tab-para">

                                        </div>
											<div class="row" id="jo">
												<div class="col-lg-12 col-md-4 col-sm-12">
												<form method="POST" action ="cadastraMedicos.php">
																		<label for="nome"></label>
																<div class="single-tab-select-box">                                                        
																	<h2>NOME DO MÉDICO</h2>

																	<div class="travel-select-icon">
																		<input type="text" class="form-control" name="nome">
																	</div><!-- /.travel-select-icon -->
														
													</div>
																		<label for="email"></label>
													<div class="single-tab-select-box">                                                        
																	<h2>E-MAIL</h2>

																	<div class="travel-select-icon">
																		<input type="text" class="form-control" name="email">
																	</div><!-- /.travel-select-icon -->
														
													</div>
																		<label for="login"></label>
													<div class="single-tab-select-box">                                                        
																	<h2>LOGIN</h2>

																	<div class="travel-select-icon">
																		<input type="text" class="form-control" name="login">
																	</div><!-- /.travel-select-icon -->
														
													</div>
																		<label for="senha"></label>
													<div class="single-tab-select-box">                                                        
																	<h2>SENHA</h2>

																	<div class="travel-select-icon">
																		<input type="password" class="form-control" name="senha">
																	</div><!-- /.travel-select-icon -->
														
													</div>
																		<label for="cpf"></label>
													<div class="single-tab-select-box">                                                        
																	<h2>CPF</h2>

																	<div class="travel-select-icon" name="cpf">
																		<input type="text" class="form-control" name="cpf">
																	</div><!-- /.travel-select-icon -->
														
													</div>
														<div class="row">
															
														<div class="col-sm-5"></div><!--/.col-->
															<div class="clo-sm-7">
																<div class="about-btn travel-mrt-0 pull-right">
																	<button type="submit" class="about-view travel-btn" name="cadastrar">
																		Cadastrar	
																	</button><!--/.travel-btn--><!--/.travel-btn-->
												</form>
													</div><!--/.about-btn-->
												</div><!--/.col-->

											</div><!--/.row-->

										</div><!--/.tab-para-->

									</div><!--/.tabpannel-->

									
            
             
		<script src="assets/js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="assets/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="assets/js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="assets/js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="assets/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="assets/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="assets/js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="assets/js/custom.js"></script>
        
       

<script type="text/javascript" src="assets/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="assets/bootstrap-datetimepicker-master/js/locales/bootstrap-datetimepicker.pt-BR.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        language:  'pt-BR',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
    
    var m = new Date();
    var dateString = m.getUTCFullYear() +"-"+ (m.getUTCMonth()+1) +"-"+ m.getUTCDate();//formata assim '2012-01-01'
    
    $('.form_datetime').datetimepicker('setDaysOfWeekDisabled', [0,6]);//0 eh o domingo, e o 6 eh o sabado, desabilita
    $('.form_datetime').datetimepicker('setStartDate', dateString);
</script>
          
	</body>
</html>