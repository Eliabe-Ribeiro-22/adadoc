@extends("layouts.main")

@section("titulo", "cadastrar nova chamada")
@section("corpo")
<h1 class="color-secundary">Cadastrar nova chamada</h1>
<form method="POST" action="/chamada" class="inserir">
	@csrf
	<fieldset>
		<?php 
		date_default_timezone_set('UTC');
		echo "A data atual é:" . date("d/m/Y");
		?>

		
		<label>Data da chamada</label>	
		<!-- data atual do sistema -->
		<input 
			type="date" 
			name="DATA_CHAMADA"
			min="2026-01-01" 
			readonly 
			id="DATA_CHAMADA"

			value="<?php echo date("Y-m-d");?>" 
		>
		<!-- sempre a chamada será com data atual do sistema -->


		<label>Faixa Etária da Turma</label>
		<select name="FAIXA" id="FAIXA">
			<option value="mirim">MIRIM</option>
			<option value="adad1">ADAD 1</option>
			<option value="adad2">ADAD 2</option>
			<option value="senior">SENIOR</option>
		</select>
		
		<label>DIVISA ATUAL</label>
		<input type="text" name="DIVISA_CHAMADA">
		
		<label>Nome do professor</label>
		<input type="text" name="PROFESSOR" id="professor">

		<label>Quantidade presentes</label>
		<input type="number" name="QUANTIDADE_PRESENTES">

		<label>Quantidade ausentes</label>
		<input type="number" name="QUANTIDADE_AUSENTES">

		<label>Quantidade justificadas</label>
		<input type="number" name="QUANTIDADE_JUSTIFICADAS">


		<div style="display: flex;">
			<button class="salvar">Salvar</button>
			<button class="cancelar">Cancelar</button>	
		</div>
	</fieldset>
</form>
<!-- JS -->
<script type="text/javascript" src="/assets/js/index.js"></script>

@endsection