@extends("layouts.main")

@section("titulo", "cadastrar nova chamada")
@section("corpo")
<h1 class="color-secundary">Cadastrar nova chamada</h1>
<form method="POST" action="/chamada">
	@csrf
	<fieldset>
		<label>Data da chamada</label>	
		<input type="date" name="DATA_CHAMADA" min="2026-01-01">

		<label>Faixa Etária da Turma</label>
		<select name="FAIXA" id="FAIXA">
			<option value="MIRIM">MIRIM</option>
			<option value="ADAD_1">ADAD 1</option>
			<option value="ADAD_2">ADAD 2</option>
			<option value="SENIOR">SENIOR</option>
		</select>
		
		<label>DIVISA ATUAL</label>
		<input type="text" name="DIVISA_CHAMADA">
		
		<label>Nome do professor</label>
		<input type="text" name="PROFESSOR">

		<label>Quantidade presentes</label>
		<input type="number" name="QTDADE_PRESENTES">

		<label>Quantidade ausentes</label>
		<input type="number" name="QTDADE_AUSENTES">

		<label>Quantidade justificadas</label>
		<input type="number" name="QTDADE_JUSTIFICADAS">


		<div style="display: flex;">
			<button class="salvar">Salvar</button>
			<button class="cancelar">Cancelar</button>	
		</div>
	</fieldset>
</form>
@endsection