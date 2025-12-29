@extends("layouts.main")
@section("titulo", "home Alunos")
@section("corpo")
<a href="/aluno">Cadastrar Novo Aluno</a>
<h1>Lista de Alunos cadastrados</h1>
<!-- - home_alunos
  - table alunos cadastrados em ordem alfabética A-Z -->
<table>
    <tr>
	    <th>Nome</th>
    	<th>Faixa Etária</th>
        <th>Idade</th>
        <th>Telefone</th>
        <th>Endereço</th>  
        <th>Editar</th>
        <th>Excluir</th>
    </tr>
    <?php
    foreach($alunos as $aluno){
        echo "<td>" . $aluno->NOME_ALUNO . "</td>";
        echo "<td>" . $aluno->FAIXA_ETARIA_ALUNO . "</td>";
        echo "<td>" . $aluno->DATA_NASCIMENTO_ALUNO . "</td>";
        echo "<td>" . $aluno->CELULAR_ALUNO . "</td>";
        echo "<td>" . $aluno->ENDERECO_ALUNO . "</td>";
        echo "<td>&#x1F589;</td>";
        echo "<td>&#x1F5D1;</td>";
    }
    ?>
</table>
@endsection