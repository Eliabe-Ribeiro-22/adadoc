@extends("layouts.main")
@section("titulo", "home chamadas")
@section("corpo")
<a href="/chamada">Cadastrar Nova Chamada</a>
<h1>Lista de Chamadas cadastradas</h1>
<table>
    <tr>
        <th>DATA</th>
        <th>QTDADE ALUNOS</th>
        <th>FAIXA ETÁRIA</th>
        <th>PROFESSOR</th>
	    <th>Editar</th>
        <th>Excluir</th>

    </tr>
    
    <tr>
        <td>17/08/2025</td>
        <td>14</td>
        <td>MIRIM</td>
        <td>VANESSA</td>
        <td>&#x1F589;</td>
        <td>&#x1F5D1;</td>
    </tr>
    
    <tr>
        <td>24/08/2025</td>
        <td>10</td>
        <td>MIRIM</td>
        <td>VANESSA</td>
        <td>&#x1F589;</td>
        <td>&#x1F5D1;</td>
    </tr>
</table>
@endsection