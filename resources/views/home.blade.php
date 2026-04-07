@extends("layouts.main")
@section("titulo", "Inicio")
@section("corpo")
<?php

            echo "bem-vindo ao sistema de gestão de alunos adadoc<br>";
        ?>        
        <table>
            <tr>
                <th>Nome</th>
                <th>Faixa Etária</th>
                <th>Idade</th>
                <th>Telefone</th>  
            </tr>
               <?php
    foreach($alunos as $aluno){
        echo "<tr>";
        //echo " <td>" . $aluno->id . "</td>";
        echo " <td>" . $aluno->NOME_ALUNO . "</td>";
        echo " <td>" . $aluno->FAIXA_ETARIA_ALUNO . "</td>";
        echo " <td>" . $aluno->DATA_NASCIMENTO_ALUNO . "</td>";
        echo " <td>" . $aluno->CELULAR_ALUNO . "</td></tr>";
    }
    ?>
        </table>
@endsection