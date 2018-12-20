@extends('layout')
@section('titulo')
    Lista de especialidades   
@endsection
@section('nome_pg')
Lista de especialidades
@endsection

<style type='text/css'>
table {
width: 99%;
border: 2px solid #6c757d;
margin-top: 15px;
margin-bottom: 25px;
position: absolute;
left: 5px;
top: 120px; 

}
td {
border: 1px solid #6c757d;
padding: 5px;
}
th {
font-family: "Trebuchet MS", Arial, Verdana;
font-size: 17px;
padding: 5px;
border: 1px solid #6c757d;
border-width: 1px;
border-color: #6c757d;
background-color: #00d8ff;
color: black;
}
</style>
<table>
  <tr>
    <th>Id</th>
    <th>Descrição</th> 
  </tr>
 
        <?php foreach(  $lista_especialidades     as  $e ) {  ?>
        <tr>
            <?php echo '<td>'.$e['id'].'</td>'; echo '<td>'.$e['descricao'].'</td>'; ?>
         </tr>
        <?php 
            }
        ?>
</table>


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