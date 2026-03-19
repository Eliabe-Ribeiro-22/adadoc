@extends("layouts.main")
@section("titulo", "home chamadas")
@section("corpo")
<a href="/chamada">Cadastrar Nova Chamada</a>
<h1>Lista de Chamadas cadastradas</h1>

<!-- - home_chamada
  - table chamadas feitas por ordem de data, sendo as mais recentes primeiro -->
<table>
    <tr>
        <th>DATA</th>
        <th>QTDADE ALUNOS</th>
        <th>FAIXA ETÁRIA</th>
        <th>PROFESSOR</th>
	    <th>Editar</th>
        <th>Excluir</th>

    </tr>


    <?php
    foreach($chamadas as $chamada){
        echo "<tr>";
        //echo "<td>". $chamada->id . "</td>";
        echo " <td>" . $chamada->DATA_CHAMADA . "</td>";
        echo " <td>" . $chamada->QUANTIDADE_PRESENTES . "</td>";
        echo " <td>" . $chamada->FAIXA_ETARIA_ALUNOS . "</td>";
        echo " <td>" . $chamada->PROFESSOR . "</td>";
        echo " <td>&#x1F589;</td>";
        echo "<td>";?>        
        <!-- <form action="{{route('delchamada', ['id'  => $chamada->id])}}" method='post'>  
        @csrf 
        @method('delete')
        <button class='excluir'>&#x1F5D1;</button>
        </form>
        </td>
        </tr> -->
    <?php
    }
    ?>    
</table>
@endsection