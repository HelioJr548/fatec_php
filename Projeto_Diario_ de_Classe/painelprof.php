<?php
session_start();
//header("Location: select.php?disciplinas=OK");
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastrar Municipio</title>
</head>

<body>

<form method="post">

    <table border="0"  align="center" >
        <tr>
            <td width="250">
                <font size="5" face="Verdana, Arial, Helvetica, sans-serif">Selecione a Turma:</font>
            </td> 
            
            <td>
                <select name="conteudo">
                    <option>Todas</option>
                    <?php
                        // $tabela = $_POST['tabela'];
                        $rs = "SELECT * FROM disciplinas";
                        $rss = mysqli_query($conexao, $rs);
                        while($row = mysqli_fetch_assoc($rss)){ ?>
                            <option value="<?php echo $row['CodDisc'];?>"><?php echo $row['CodDisc'];?></option><?php
                        }
                    ?>
                </select>
                <input name="Submit" type="submit" class="formobjects" value="🔎">
            </td>
        </tr>
        
    </table>
</form>

<?php
date_default_timezone_set('America/Sao_Paulo');

        echo "<meta charset='UTF-8'>";
        echo "<form method=post action=presenca.php?acao=montarpresenca name=dados onSubmit=return enviardados();>";
        echo "<table cellpadding=15 border=1 align=center>";
        echo "<tr>";
        echo "<th>CÓDIGO DISCIPLINA</th>";
        echo "<th>TURMA</th>";
        echo "<th>CÓDIGO</th>";
        echo "<th>SEMESTRE</th>";
        echo "<th>ANO</th>";
        echo "<th>AÇÃO</th>";
        echo "</tr>";
        
        
        
        echo "<CENTER>Registro cadastrados na base de dados.</br></CENTER>";
        echo "</br>";

        $turmas = $_POST['conteudo']; 
        if($turmas == 'Todas') {
        $sqlSelect = "SELECT turmas.* , disciplinas.CodDisc FROM turmas INNER JOIN disciplinas ON turmas.CodDisc = disciplinas.CodDisc ";
        } else if($turmas == $turmas) {
            $sqlSelect = "SELECT turmas.* , disciplinas.CodDisc FROM turmas INNER JOIN disciplinas ON turmas.CodDisc = disciplinas.CodDisc  where turmas.CodDisc= '{$turmas}' ";
        }             
        
        $resultado = mysqli_query($conexao, $sqlSelect) or die ("Erro ao retornar dados");

        while ($registro = mysqli_fetch_array($resultado)){
            $turma = $registro['Turma'];
            $ano = $registro['Ano'];
            $semestre = $registro['Semestre'];
            $professor = $registro['IdProfessor'];
            $disciplina = $registro['CodDisc'];
            echo "<tr>";
            echo "<td align=center>". $turma . "</td>";
            echo "<td align=center>". $ano . "</td>";
            echo "<td align=center>". $semestre . "</td>";
            echo "<td align=center>". $professor . "</td>";
            echo "<td align=center>". $disciplina . "</td>";
            echo "<td>
            <<a href='presenca.php?turma=$turma'><img src='update.png' alt='Atualizar' title='Atualizar registro'></a>
            <a href='index.php'><img src='insert.png' alt='Inserir' title='Inserir registro'></a>";
            
            echo "</tr>";
        }
        
        mysqli_close($conexao);

?>

</body>

</html>
