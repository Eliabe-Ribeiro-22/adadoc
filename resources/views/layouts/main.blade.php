<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('titulo')</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
</head>
<body>
	<header>
		<a href="">fazer css nav</a>
		<a href="/home_alunos">Alunos</a>
        <a href="/home_notas">Notas</a>
        <a href="/home_chamadas">Chamadas</a>
       
		<a href="{{route('inicio')}}">Voltar ao início</a>
	</header>
	<main>
		
		<!-- exibir mensagemm de erro ou acerto na view -->
		@if(session('msg'))
			<script>alert("<?php echo session('msg') ?>")</script>
		@endif

		@yield('corpo')
	</main>
	<footer>fazer rodapé</footer>
</body>