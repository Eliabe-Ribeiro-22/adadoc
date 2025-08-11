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
		<a href="/home_alunos">Cadastrar aluno</a>
        <a href="/home_notas">Cadastrar Nota</a>
        <a href="/home_chamadas">Fazer chamada</a>
       
		<a href="{{route('inicio')}}">Voltar ao início</a>
	</header>
	<main>@yield('corpo')</main>
	<footer>fazer rodapé</footer>
</body>