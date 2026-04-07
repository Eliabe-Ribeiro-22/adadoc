@extends("layouts.main")

@section("titulo", "cadastrar novo aluno")
@section("corpo")
<h1 class="color-secundary">Cadastrar novo aluno</h1>
<a href="/">Voltar ao início</a>
<form action="" method="get" class="inserir">
	@csrf
	<fieldset>
		{{$aluno->id}}<br>
		{{$aluno->NOME_ALUNO}}<br>
		{{$aluno->FAIXA_ETARIA_ALUNO}}<br>
		{{$aluno->ENDERECO_ALUNO}}<br>
		{{$aluno->DATA_NASCIMENTO_ALUNO}}<br>
		{{$aluno->CELULAR_ALUNO}}<br>
		{{$aluno->EMAIL_ALUNO}}<br>
		<label>NOME:</label>
		<input type="text" name="NOME_ALUNO" value="{{$aluno->NOME_ALUNO}}">

		<label>FAIXA ETARIA:</label>
		
		<select name="FAIXA" id="FAIXA">
			<?php 
			switch ($aluno->FAIXA_ETARIA_ALUNO) {
					case 'mirim':
						echo "<option value='mirim' selected>MIRIM</option>";
						echo "<option value='adad1'>ADAD 1</option>";
						echo "<option value='adad2'>ADAD 2</option>";
						echo "<option value='senior'>SENIOR</option>";
						break;
					case 'adad1':
						echo "<option value='mirim'>MIRIM</option>";
						echo "<option value='adad1' selected>ADAD 1</option>";
						echo "<option value='adad2'>ADAD 2</option>";
						echo "<option value='senior'>SENIOR</option>";
						break;
					case 'adad2':
						echo "<option value='mirim'>MIRIM</option>";
						echo "<option value='adad1'>ADAD 1</option>";
						echo "<option value='adad2' selected>ADAD 2</option>";
						echo "<option value='senior'>SENIOR</option>";
						break;
					case 'senior':
						echo "<option value='mirim'>MIRIM</option>";	
						echo "<option value='adad1'>ADAD 1</option>";
						echo "<option value='adad2'>ADAD 2</option>";
						echo "<option value='senior' selected>SENIOR</option>";
					break;	
					default:
						echo "<option value='mirim' selected>MIRIM</option>";	
						echo "<option value='adad1'>ADAD 1</option>";
						echo "<option value='adad2'>ADAD 2</option>";
						echo "<option value='senior'>SENIOR</option>";
						break;
				}
			?>
			
		</select>
		

		<label>ENDERECO:</label>
		<input type="text" name="ENDERECO_ALUNO" value="{{$aluno->ENDERECO_ALUNO}}">
		
		<label>DATA DE NASCIMENTO:</label>
		<input type="date" name="DATA_NASCIMENTO_ALUNO" value="{{$aluno->DATA_NASCIMENTO_ALUNO}}">


		<label>CELULAR:</label>
		<input type="tel" name="CELULAR_ALUNO" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" placeholder="49 91111-1111" value="{{$aluno->CELULAR_ALUNO}}">
		

		<label>EMAIL:</label>
		<input type="email" name="EMAIL_ALUNO" value="{{$aluno->EMAIL_ALUNO}}">
		
		<div style="display: flex;">
			<button class="salvar">Alterar</button>
			<button class="cancelar">Cancelar</button>	
		</div>
		
	</fieldset>
</form>
@endsection