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
        //echo "<td>" . $nota->id . "</td>";
        echo "<td>" . $nota->DATA_NOTA . "</td>";
        echo "<td>" . $nota->VALOR_NOTA . "</td>";
        echo "<td>" . $nota->FAIXA . "</td>";
        echo "<td>" . $nota->NOME_ALUNO . "</td>";        
        echo "<td>&#x1F589;</td>";
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
    
    <!-- <tr>
        <td>11/11/2025</td>
        <td>9,75</td>
        <td>ADAD 2</td>
        <td>JOSE PEDRO</td>
        <td>&#x1F589;</td>
        <td>&#x1F5D1;</td>
    </tr>

    <tr>
        <td>09/11/2025</td>
        <td>9,9</td>
        <td>ADAD 1</td>
        <td>LOHAN</td>
        <td>&#x1F589;</td>
        <td>&#x1F5D1;</td>
    </tr>

    <tr>
        <td>02/11/2025</td>
        <td>10</td>
        <td>ADAD MIRIM</td>
        <td>ELISE</td>
        <td>&#x1F589;</td>
        <td>&#x1F5D1;</td>
    </tr> -->
</table>
@endsection