@extends("layouts.main")

@section("titulo", "cadastrar nova nota")
@section("corpo")
<h1 class="color-secundary">Cadastrar nova nota</h1>
<form>
	<fieldset>
		<label for="FAIXA">FAIXA ETARIA</label>
		<select name="FAIXA" id="FAIXA">
			<option value="MIRIM">MIRIM</option>
			<option value="ADAD_1">ADAD 1</option>
			<option value="ADAD_2">ADAD 2</option>
			<option value="SENIOR">SENIOR</option>
		</select>
		
		
		<label>NOME DO ALUNO</label>
		<!-- gerar dinamicamente o select com option de todos os alunos cadastrados em ordem alfabetica 

		filtrando pela faixa etaria escolhida
		-->
		<select name="NOME_ALUNO">
			<!-- VALUE COM CODIGO  -->
			<option value="1">Elise Ribeiro Mota</option>
			<option value="2">Elisama Ribeiro Mota</option>
			<option value="3">EZEQUIEL Ribeiro Mota</option>
			<option value="4">LOHAN Ribeiro Mota</option>
		</select>
		

		<label>NOTA</label>
		<input type="number" min="0" max="10" name="VALOR_NOTA">
		

		<label>DATA</label>
		<input type="date" name="DATA_NOTA">
		
		<div style="display: flex;">
			<button class="salvar">Salvar</button>
			<button class="cancelar">Cancelar</button>	
		</div>
		
	</fieldset>
</form>
@endsection