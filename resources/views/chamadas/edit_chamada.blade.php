@extends("layouts.main")

@section("titulo", "cadastrar nova chamada")
@section("corpo")
<h1 class="color-secundary">Cadastrar nova chamada</h1>
<form method="get" action="" class="inserir">
	@csrf
	<fieldset>
		<label>Código</label>
		<input type="number" name="id" value="{{$chamada->id}}">
		<label>Data da chamada</label>	
		<input type="date" 
				name="DATA_CHAMADA" 
				min="2026-01-01" 
				value="{{$chamada->DATA_CHAMADA}}" 
				
				id="DATA_CHAMADA"

		>
		
		<label>Faixa Etária da Turma</label>
		<select name="FAIXA" id="FAIXA">
			<?php 
			switch ($chamada->FAIXA_ETARIA_ALUNOS) {
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
		
		<label>DIVISA ATUAL</label>
		<input type="text" name="DIVISA_CHAMADA" value="{{$chamada->DIVISA_CHAMADA}}
	">
		
		<label>Nome do professor</label>
		<input type="text" name="PROFESSOR" value="{{$chamada->PROFESSOR}}
	">

		<label>Quantidade presentes</label>
		<input type="number" name="QTDADE_PRESENTES" value="{{$chamada->QUANTIDADE_PRESENTES}}">

		<label>Quantidade ausentes</label>
		<input type="number" name="QTDADE_AUSENTES" value="{{$chamada->QUANTIDADE_AUSENTES}}"> 

		<label>Quantidade justificadas</label>
		<input type="number" name="QTDADE_JUSTIFICADAS" value="{{$chamada->QUANTIDADE_JUSTIFICADAS}}">


		<div style="display: flex;">
			<button class="salvar">Alterar</button>
			<button class="cancelar">Cancelar</button>	
		</div>
	</fieldset>
</form>
@endsection