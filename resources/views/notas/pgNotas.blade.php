@extends("layouts.main")
@section("titulo", "home notas")
@section("corpo")
<a href="/nota">Cadastrar Nova Nota</a>
<a href="#">Gerar Média alunos</a>
<h1>Lista de Notas cadastradas</h1>
<!-- - home_notas
  - table notas de alunos por ordem de data, sendo as mais recentes -->
<table>
    <tr>
        <th>DATA</th>
        <th>NOTA</th>
        <th>FAIXA ETARIA</th>
        <th>ALUNO</th>
	    <th>Editar</th>
        <th>Excluir</th>
    </tr>

    <?php  
    foreach ($notas as $nota) {
        echo "<tr>";
        echo "<td>" . $nota->id . "</td>";
        echo "<td>" . $nota->DATA_NOTA . "</td>";
        echo "<td>" . $nota->VALOR_NOTA . "</td>";
        echo "<td>" . $nota->FAIXA . "</td>";
        echo "<td>" . $nota->NOME_ALUNO . "</td>";        
        echo '<td>';?> <a href="{{route('edit_nota', $nota->id)}}">&#x1F589;</a></td>
        <?php
        echo "<td>";
    ?>
    
    <form method="post" action="{{ route('delnota', ['id' => $nota->id])}}" >
        @csrf
        @method('delete')
        <button class='excluir'>&#x1F5D1;</button></td>
    </form>
    </tr>
    <?php
    }
    ?>
</table>
@endsection