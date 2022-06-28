<?php

include_once "conexao.php";

date_default_timezone_set('America/Sao_Paulo');
?>


        <meta charset='UTF-8'>
        <form method=post action=crud.php?acao=selecionar name=dados onSubmit=return enviardados();>
        <table cellpadding=15 border=1 align=center>
        <tr>
        <th>CÓDIGO DISCIPLINA</th>
        <th>TURMA</th>
        <th>NOME DO ALUNO</th>
        <th>DATA DA AULA</th>
        <th>PRESENÇA</th>
        <th>AÇÃO</th>
        </tr>
        
        
        
        <CENTER>Registro cadastrados na base de dados.</br></CENTER>
        </br>
<?php
        $id= $_GET['turma'];
        $id;
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
            $ano = $registro['Ano'];?>
            <tr>
            <td align=center><?php "'.$disciplina.'" ?></td>
            <td align=center><?php '$turma' ?>;</td>
            <td align=center><?php '$aluno' ?>;</td>
            <td align=center><?php date("d/m/y", strtotime($semestre)) ?>;</td>
            <td align=center> 
                    <select name='presenca'>
                            <option value=F selected>Faltou</option>
                            <option value=P >Presente</option>
                    </select>  
                </td> 
                
            <td align=center>
                    <a href='crud.php?acao=inserirpresenca'><img src='update.png' alt='Atualizar' title='Atualizar registro'></a>
                    <a href='index.php'><img src='insert.png' alt='Inserir' title='Inserir registro'></a>;
                </td>
            </tr><?php
        }
        mysqli_close($conexao);

        
?>