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
        <th>Código</th>
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
        echo "<td>" . $nota->aluno_id . "</td>";        
        echo '<td>';?> <a href="{{
                                route('edit_nota', [
                                                    'id_nota' => $nota->id, 
                                                    'aluno_id' => $nota->aluno_id
                                                    ]
                                    )
                                }}">&#x1F589;</a></td>
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
<?php 
    date_default_timezone_set('UTC');
    echo "A data atual é:" . date("d/m/Y");
?>

@endsection