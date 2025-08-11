@extends("layouts.main")
@section("titulo", "home notas")
@section("corpo")
<a href="/chamada">Cadastrar Nova Nota</a>
<h1>Lista de Notas cadastradas</h1>
<table>
    <tr>
	    <th>Editar</th>
        <th>Excluir</th>
    </tr>
    
    <tr>
        <td>Editar</td>
        <td>Excluir</td>
    </tr>
</table>
@endsection