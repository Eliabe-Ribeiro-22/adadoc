@extends("layouts.main")
@section("titulo", "home Alunos")
@section("corpo")
<a href="/aluno">Cadastrar Novo Aluno</a>
<h1>Lista de Alunos cadastrados</h1>
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
        <td>Eliabe</td>
        <td>ADAD SENIOR</td>
        <td>19</td>
        <td>049 9 99837-9858</td>
        <td>Rua 30 de Março</td>
        <td>Editar</td>
        <td>Excluir</td>
    </tr>
</table>
@endsection