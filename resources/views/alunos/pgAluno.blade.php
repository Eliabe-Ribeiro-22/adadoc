@extends("layouts.main")

@section("titulo", "cadastrar novo aluno")
@section("corpo")
<h1 class="color-secundary">Cadastrar novo aluno</h1>
<form>
	<fieldset>
		<label>NOME:</label>
		<label>FAIXA ETARIA:</label>
		<label>ENDERECO:</label>
		<label>DATA DE NASCIMENTO:</label>
		<label>CELULAR:</label>
		<label>EMAIL:</label>
		
		<button class="salvar">Salvar</button>
	</fieldset>
</form>
@endsection