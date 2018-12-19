@extends('layout')



@section('titulo')
    Cadastro de especialidades    
@endsection

@section('nome_pg')
Cadastro de especialidades
@endsection

@section('form')
<div style="position: relative; left: 31%; top: 15px;">
<h2 style="position: relative; left: 25px;">DESCRIÇÃO DA ESPECIALIDADE</h2>
<input class="form-control col-sm-8 ho" type="text" id="descricao" name="descricao">
<button type="submit" class="about-view travel-btn" name="cadastrar" style="position: relative;top: 60px;right: 337px;">
    Cadastrar										
</button>
</div>
@endsection



@section("css_da_pagina")

    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <!-- TITLE OF SITE -->

    <!-- favicon img -->
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css ')}}" />

    <!--animate.css-->
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}" />

    <!--hover.css-->
    <link rel="stylesheet" href="{{ asset('css/hover-min.css') }}">

    <!--datepicker.css-->
    <link rel="stylesheet"  href="{{ asset('css/datepicker.css') }}" >

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}"/>

    <!-- range css-->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css')}}" />

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}" />

    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset('css/bootsnav.css') }}"/>

    <!--style.css-->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" />

    <!--responsive.css-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}" />


   <link href="{{ asset('css/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.css') }}" rel="stylesheet" media="screen">

    <style>
        .top-area {
            position: static; 
            background-color: rgba(77,78,84,1);
            margin: auto;
        }

        .form-control {
            width: 500px;
            height: 48px;
        }



    </style>

    
@endsection


@section("js_da_pagina")
		<script src="{{asset('/js/jquery.js')}}"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="{{asset('/js/modernizr.min.js')}}"></script>


		<!--bootstrap.min.js-->
		<script  src="{{asset('/js/bootstrap.min.js')}}"></script>

		<!-- bootsnav js -->
		<script src="{{asset('/js/bootsnav.js')}}"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="{{asset('/js/jquery.filterizr.min.js')}}"></script>

		<script  src="{{asset('/js/jquery.easing.min.js')}}"></script>

		<!--jquery-ui.min.js-->
        <script src="{{asset('/js/jquery-ui.min.js')}}"></script>

        <!-- counter js -->
		<script src="{{asset('/js/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('/js/waypoints.min.js')}}"></script>

		<!--owl.carousel.js-->
        <script  src="{{asset('/js/owl.carousel.min.js')}}"></script>

        <!-- jquery.sticky.js -->
		<script src="{{asset('/js/jquery.sticky.js')}}"></script>

        <!--datepicker.js-->
        <script  src="{{asset('/js/datepicker.js')}}"></script>

		<!--Custom JS-->
		<script src="{{asset('/js/custom.js')}}"></script>

@endsection