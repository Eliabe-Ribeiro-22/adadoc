@extends("layouts.main")

@section("titulo", "cadastrar nova nota")
@section("corpo")
<h1 class="color-secundary">Cadastrar nova nota</h1>
<?php 
foreach ($alunos as $aluno) {
	echo $aluno->id ."<br>";
	echo $aluno->NOME_ALUNO ."<br>";
}
	
?>
<form method="post" action="/nota" class="inserir">
	@csrf
	<fieldset>
		<label for="FAIXA">FAIXA ETARIA</label>
		<select name="FAIXA" id="FAIXA">
			<option value="mirim">MIRIM</option>
			<option value="adad1">ADAD 1</option>
			<option value="adad2">ADAD 2</option>
			<option value="senior">SENIOR</option>
		</select>

		<?php
		// caso mirim -> pesquisar todos alunos com a faixa mirim
		// caso adad1 -> pesquisar todos os alunos com a faixa adad1
		// caso adad2 -> pesquisar todos os alunos com a faixa adad2
		// caso senior -> pesquisar todos os alunos com a faixa senior
		?>
		
		<label>Id_aluno</label>
		<input type="number" name="aluno_id">
		<label>NOME DO ALUNO</label>
		<input type="text" name="NOME_ALUNO">
		<!-- gerar dinamicamente o select com option de todos os alunos cadastrados em ordem alfabetica 

		filtrando pela faixa etaria escolhida
		-->
		<!--<select name="NOME_ALUNO">
			 VALUE COM CODIGO  --
			<option value="1">Elise Ribeiro Mota</option>
			<option value="2">Elisama Ribeiro Mota</option>
			<option value="3">EZEQUIEL Ribeiro Mota</option>
			<option value="4">LOHAN Ribeiro Mota</option>
		</select>
		-->

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