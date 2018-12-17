@extends('layout')



@section('titulo')
    Cadastro de especialidades    
@endsection

@section('nome_pg')
Cadastra especialidade
@endsection

@section('form')
<input class="form-control col-sm-8 ho" type="text" id="descricao" name="descricao" placeholder="Digite o nome da especialidade">
<button type="submit" class="about-view travel-btn" name="cadastrar">
    Cadastrar										
</button>
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


@endsection