@extends("layouts.main")

@section("titulo", "cadastrar nova nota")
@section("corpo")
<h1 class="color-secundary">Alterar nova nota</h1>

<form method="get" action="" class="inserir">
	@csrf
	<fieldset>
		<label for="FAIXA">FAIXA ETARIA</label>
		<select name="FAIXA" id="FAIXA">

			<?php 
				switch ($nota->FAIXA) {
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

		<?php
		// caso mirim -> pesquisar todos alunos com a faixa mirim
		// caso adad1 -> pesquisar todos os alunos com a faixa adad1
		// caso adad2 -> pesquisar todos os alunos com a faixa adad2
		// caso senior -> pesquisar todos os alunos com a faixa senior
		?>
		
		<!-- <label>Id_aluno</label>
		<input type="number" name="aluno_id"> -->
		<label>NOME DO ALUNO</label>
		<?php 
		echo '<select name="NOME_ALUNO">';
		foreach ($alunos as $aluno) {
			echo "<option value='". $aluno->id . "'>". $aluno->NOME_ALUNO . "</option>";
		}
		echo "</select>";
		?>
		<!-- <input type="text" name="NOME_ALUNO" value="{{$nota->NOME_ALUNO}}"> -->
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
		<input type="number" min="0" max="10" name="VALOR_NOTA" value="{{$nota->VALOR_NOTA}}">
		

		<label>DATA</label>
		<input type="date" name="DATA_NOTA" value="{{$nota->DATA_NOTA}}">
		
		<div style="display: flex;">
			<button class="salvar">Alterar</button>
			<button class="cancelar">Cancelar</button>	
		</div>
		
	</fieldset>
</form>
<?php 
	date_default_timezone_set('UTC');
	echo "A data atual é:" . date("d/m/Y");
?>

@endsection