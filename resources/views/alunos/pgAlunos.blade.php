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
    
    <tr>
        <td>ELIABE</td>
        <td>ADAD SENIOR</td>
        <td>19</td>
        <td>049 9 99837-9858</td>
        <td>Rua 30 de Março</td>
        <td>&#x1F589;</td>
        <td>&#x1F5D1;</td>
    </tr>

    <tr>
        <td>JOAO OTAVIO</td>
        <td>ADAD 2</td>
        <td>14</td>
        <td>049 9 1234-5678</td>
        <td>AVENIDA PATO BRANCO</td>
        <td>&#x1F589;</td>
        <td>&#x1F5D1;</td>
    </tr>
</table>
@endsection