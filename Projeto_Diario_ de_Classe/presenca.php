<?php

include_once "conexao.php";

date_default_timezone_set('America/Sao_Paulo');

        echo "<meta charset='UTF-8'>";
        echo "<form method=post action=crud.php?acao=selecionar name=dados onSubmit=return enviardados();>";
        echo "<table cellpadding=15 border=1 align=center>";
        echo "<tr>";
        echo "<th>CÓDIGO DISCIPLINA</th>";
        echo "<th>TURMA</th>";
        echo "<th>NOME DO ALUNO</th>";
        echo "<th>DATA DA AULA</th>";
        echo "<th>PRESENÇA</th>";
        echo "<th>AÇÃO</th>";
        echo "</tr>";
        
        
        
        echo "<CENTER>Registro cadastrados na base de dados.</br></CENTER>";
        echo "</br>";
        $id= $_GET['turma'];
        echo "$id";
        $sqlSelect = "SELECT t.*, a.*, au.* FROM turmas AS t
        INNER JOIN alunos AS a ON t.Turma = a.Turma 
        INNER JOIN aulas AS au ON t.Turma = au.Turma
        where t.Turma= '" . $id . "'";
        $resultado = mysqli_query($conexao, $sqlSelect) or die ("Erro ao retornar dados");        

        while ($registro = mysqli_fetch_array($resultado)){
            $disciplina = $registro['CodDisc'];
            $turma = $registro['Turma'];
            $aluno = $registro['Aluno'];
            $semestre = $registro['DataAula'];
            $ano = $registro['Ano'];
            
            echo "<tr>";
            echo "<td align=center>". $disciplina . "</td>";
            echo "<td align=center>". $turma . "</td>";
            echo "<td align=center>". $aluno . "</td>";
            echo "<td align=center>".  date("d/m/y", strtotime($semestre)) . "</td>";?>
            <td align=center> 
                    <select name=presenca>
                            <option value=F selected>Faltou</option>
                            <option value=P >Presente</option>
                    </select>  
                </td>";<?php 
            echo "<td align=center>
                    <a href='crud.php?acao=inserirpresenca&presenca=presenca&aluno=$aluno'><img src='update.png' alt='Atualizar' title='Atualizar registro'></a>
                    <a href='index.php'><img src='insert.png' alt='Inserir' title='Inserir registro'></a>;
                </td>";
            echo "</tr>";

}
mysqli_close($conexao);

        
?>