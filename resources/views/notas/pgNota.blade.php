@extends("layouts.main")

@section("titulo", "cadastrar nova nota")
@section("corpo")
<h1 class="color-secundary">Cadastrar nova nota</h1>
<form>
	<fieldset>
		<label>FAIXA ETARIA</label>
		<label>NOME DO ALUNO</label>
		<label>NOTA</label>
		<label>DATA</label>
		
		<div style="display: flex;">
			<button class="salvar">Salvar</button>
			<button class="cancelar">Cancelar</button>	
		</div>
		
	</fieldset>
</form>
@endsection