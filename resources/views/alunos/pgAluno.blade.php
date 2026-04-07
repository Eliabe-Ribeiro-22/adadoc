@extends("layouts.main")

@section("titulo", "cadastrar novo aluno")
@section("corpo")
<h1 class="color-secundary">Cadastrar novo aluno</h1>
<a href="/">Voltar ao início</a>
<form action="/aluno" method="POST" class="inserir">
	@csrf
	<fieldset>
		<label>NOME:</label>
		<input type="text" name="NOME_ALUNO">

		<label>FAIXA ETARIA:</label>
		
		<select name="FAIXA" id="FAIXA">
			<option value="mirim">MIRIM</option>
			<option value="adad1">ADAD 1</option>
			<option value="adad2">ADAD 2</option>
			<option value="senior">SENIOR</option>
		</select>
		

		<label>ENDERECO:</label>
		<input type="text" name="ENDERECO_ALUNO">
		
		<label>DATA DE NASCIMENTO:</label>
		<input type="date" name="DATA_NASCIMENTO_ALUNO">


		<label>CELULAR:</label>
		<input type="tel" name="CELULAR_ALUNO" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" placeholder="49 91111-1111">
		

		<label>EMAIL:</label>
		<input type="email" name="EMAIL_ALUNO">
		
		<div style="display: flex;">
			<button class="salvar">Salvar</button>
			<button class="cancelar">Cancelar</button>	
		</div>
		
	</fieldset>
</form>
@endsection