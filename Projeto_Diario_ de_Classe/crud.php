<?php
#Chamando o arquivo conexao.php
include_once"conexao.php";
#pegando o valor da ação via URL
$acao = $_GET['acao'];
#Comparando se o valor da URL é do tipo GET
if(isset($_GET['id'])){
    #Criando uma variavel para armazenar o valor obtido no GET
    $id = $_GET['id'];
}

switch($acao){
    case 'inserirprof':
    $professor = $_POST['prof'];
    $email = $_POST['email'];

    $sqlInsert = "INSERT INTO professores (Professor, Email) 
    values ('$professor', '$email')";

    if (!mysqli_query($conexao,$sqlInsert)) {
        die("Erro ao inserir as informações do formulario na tabela users: ".mysqli_error($conexao));
    }else{
        echo "<script language='javascript' type='text/javascript'>
    alert('Dados cadastrados com sucesso!')
    window.location.href='crud.php?acao=selecionar'</script>";
    }

        
        break;

        case 'inserirdisc':
            $coddisc = $_POST['coddisc'];
            $disc= $_POST['disc'];
            
            $sqlInsert = "INSERT INTO disciplinas (CodDisc, Disciplina) 
            values ('$coddisc','$disc')";   

            if (!mysqli_query($conexao,$sqlInsert)) {
                die("Erro ao inserir as informações do formulario na tabela users: ".mysqli_error($conexao));
            }else{
                echo "<script language='javascript' type='text/javascript'>
            alert('Dados cadastrados com sucesso!')
            window.location.href='painel.php'</script>";
            }
        
                
                break;

                case 'inserirturma':
                    $turma = $_POST['turma'];
                    $semestre = $_POST['semestre'];
                    $ano = $_POST['ano'];
                    $select_disc = $_POST['select_disc'];
                    $select_prof = $_POST['select_prof'];
                
                    $sqlInsert = "INSERT INTO turmas (Turma, Semestre, Ano, CodDisc, IdProfessor) 
                    values ('$turma', '$semestre', '$ano', '$select_disc', '$select_prof')";
                        
                    if (!mysqli_query($conexao,$sqlInsert)) {
                        die("Erro ao inserir as informações do formulario na tabela users: ".mysqli_error($conexao));
                    }else{
                        echo "<script language='javascript' type='text/javascript'>
                    alert('Dados cadastrados com sucesso!')
                    window.location.href='painel.php'</script>";
                    }
                
                        
                        break;

                        case 'inseriraula':
                            $data = $_POST['dataaula'];
                            $conteudo = $_POST['conteudo'];
                            $select_turma = $_POST['select_turma'];
                        
                            $sqlInsert = "INSERT INTO aulas (DataAula, Conteudo, Turma) 
                            values ('$data', '$conteudo', '$select_turma')";
                                
                            if (!mysqli_query($conexao,$sqlInsert)) {
                                die("Erro ao inserir as informações do formulario na tabela users: ".mysqli_error($conexao));
                            }else{
                                echo "<script language='javascript' type='text/javascript'>
                            alert('Dados cadastrados com sucesso!')
                            window.location.href='painel.php'</script>";
                            }
                        
                                
                                break;

                                case 'inseriraluno':
                                    $aluno = $_POST['aluno'];
                                    $turma = $_POST['select_turma'];
                                
                                    $sqlInsert = "INSERT INTO alunos (Aluno, Turma) 
                                    values ('$aluno', '$turma')";

                                    if (!mysqli_query($conexao,$sqlInsert)) {
                                        die("Erro ao inserir as informações do formulario na tabela users: ".mysqli_error($conexao));
                                    }else{
                                        echo "<script language='javascript' type='text/javascript'>
                                    alert('Dados cadastrados com sucesso!')
                                    window.location.href='painel.php'</script>";
                                    }

                                    break;
                                    
                                    case 'inserirpresenca':

                                        $aluno = $_POST['aluno'];
                                        $sqlaulas= "SELECT IdAulas FROM  aulas ";
                                        $sqlaluno= "SELECT IdAlunos FROM  alunos WHERE Aluno='{$aluno}'";
                                        $presente = $_POST['presenca'];
                                        $idaluno = "$sqlaluno";
                                        $idaula = "$sqlaulas";
                                    
                                        $sqlInsert = "INSERT INTO presencas (Presente, IdAlunos,IdAulas) 
                                        values ('$presente','$idaluno', '$idaula')";
                                    
                                        if (!mysqli_query($conexao,$sqlInsert)) {
                                            die("Erro ao inserir as informações do formulario na tabela users: ".mysqli_error($conexao));
                                        }else{
                                            echo "<script language='javascript' type='text/javascript'>
                                        alert('Dados cadastrados com sucesso!')
                                        window.location.href='crud.php?acao=selecionar'</script>";
                                        }
    
        case 'montar':
        $id = $_GET['IdTurma'];
        $sql = "SELECT * FROM turmas";
        $resultado = mysqli_query($conexao, $sql) or die ("Erro ao retornar dados");
        
        //Montando o formulário 
        echo "<form method='post' name='dados' action='crud.php?acao=atualizar' onSubmit='return enviardados();'>";
        echo "<table width='588' border='0' align='center' >";
        
        while ($registro = mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td width='118'><font size'1' face='Verdana, Arial, Helvetica, sans=serif'> Código: </font></td>";
            echo "<td width='460'>";
            echo "<input name='id' type='text' class='formbutton' id='id' size='5' maxlenght='10' value=" . $id . " readonly>";
            echo "</td>";
            echo "</tr>";
            
            echo "<tr>";
            echo "<td width='118'><font size'1' face='Verdana, Arial, Helvetica, sans=serif'>Nome:</font></td>";
            echo "<td rowspan='2'><font size='2'>";
            echo "<style>textarea{resize:none;}</style>";
            echo "<textarea name='professor' cols='50' rows='1' class='formbutton'>" . htmlspecialchars($registro['user_name']) . "</textarea>";
            echo "</font></td>";
            echo "</tr>";
            
            echo "<tr>";
            echo "<tr>";
            echo "<td width='118'><font size'1' face='Verdana, Arial, Helvetica, sans=serif'> Email: </font></td>";
            echo "<td width='460'>";
            echo "<input name='email' type='text' class='formbutton' id='email' size='52' maxlenght='150' value=" . $registro['user_email'] . " ";
            echo "</td>";
            echo "</tr>";
            
            echo "<tr>";
            echo "<td width='118'><font size'1' face='Verdana, Arial, Helvetica, sans=serif'>Data:</font></td>";
            echo "<td width='460'>";
            echo "<input name='data' type='date' class='formbutton' id='data' size='52' maxlenght='150' value=" . $registro['user_date'] . " ";
            echo "</td>";
            echo "</tr>";
            
            echo "<tr>";
            echo "<td width='118'><font size'1' face='Verdana, Arial, Helvetica, sans=serif'>Mensagem:</font></td>";
            echo "<td rowspan='2'>";
            echo "<textarea name='tx_mensagem' cols='50' rows='8' class='formbutton'>" . htmlspecialchars($registro['user_mensagem']) . "</textarea>";
            echo "</font></td>";
            echo "</tr>";
            echo "<tr>";
            
            echo "<tr>";
            echo "<td height='22'></td>";
            echo "<td>";
            echo "<input name='Submit' type='submit' class='formobjects' value='Atualizar'>";
            echo "<button type='submit' formaction='crud.php?acao=selecionar'>Selecionar</button>";
            echo "<input name='Reset' type='reset' class='formobjects' value='Limpar campos'>";
            echo "</td>";
            echo "</tr>";
            echo "</tr>";
            

        }
        echo "</table>";
        echo "</form>";
        

        
        mysqli_close($conexao);
        
        break;
        
    case 'atualizar':
        $codigo = $_POST['id'];
        $professor = $_POST['professor'];
        $email = $_POST['email'];
        $data = $_POST['data'];
        $mensagem = $_POST['tx_mensagem'];
        
        $sqlUpdate = "UPDATE users SET user_name = '" . $professor . "', user_email = '" . $email . "', user_date = '" . $data . "', user_mensagem = '" . $mensagem . "' WHERE user_id = '" . $codigo . "'";
        
        if (!mysqli_query($conexao, $sqlUpdate)){
            die('</br> Erro no comando SQL UPDATE: ' . mysqli_error($conexao));
        }else{
            echo "<script language='javascript' type='text/javascript'>
            alert('Dados Atualizados com Sucesso!')
            window.location.href='crud.php?acao=selecionar'</script>";
        }
        
        mysqli_close($conexao);
        
        
        break;
        
    case 'deletar':
        $sqlDelete = "DELETE FROM users WHERE user_id = '" . $id . "'";
        
        if (!mysqli_query($conexao, $sqlDelete)){
            die ('Error: '.mysqli_error($conexao));
        }else{
            echo "<script language='javascript' type='text/javascript'>
            alert('Dados excluídos com sucesso!')
            window.location.href='crud.php?acao=selecionar'</script>";
        }
        mysqli_close($conexao);
        header("Location:crud.php?acao=selecionar");
        
        break;
        
    case 'selecionar':
        date_default_timezone_set('America/Sao_Paulo');
        #header("Content-type: text/html;charset=utf-8");
        include_once "conexao.php";
        
        echo "<meta charset='UTF-8'>";
        echo "<center><table border=1>";
        echo "<tr>";
        echo "<th>TURMA</th>";
        echo "<th>ANO</th>";
        echo "<th>SEMESTRE</th>";
        echo "<th>PROFESSOR</th>";
        echo "<th>DISCIPLINA</th>";
        echo "<th>AÇÃO</th>";
        echo "</tr>";
        
        $sqlSelect = "SELECT t.*, p.Professor FROM turmas AS t INNER JOIN professores AS p ON t.IdProfessor = p.IdProfessor ";
        $resultado = mysqli_query($conexao, $sqlSelect) or die ("Erro ao retornar dados");
        
        echo "<CENTER>Registro cadastrados na base de dados.</br></CENTER>";
        echo "</br>";
        
        while ($registro = mysqli_fetch_array($resultado)){
            $turma = $registro['Turma'];
            $ano = $registro['Ano'];
            $semestre = $registro['Semestre'];
            $professor = $registro['Professor'];
            $disciplina = $registro['CodDisc'];
            echo "<tr>";
            echo "<td>". $turma . "</td>";
            echo "<td>". $ano . "</td>";
            echo "<td>". $semestre . "</td>";
            echo "<td>". $professor . "</td>";
            echo "<td>". $disciplina . "</td>";
            echo "<td>
            <a href='crud.php?acao=deletar&id=$turma'><img src='delete.png' alt='Deletar' title='Deletar registro'></a>
            <a href='crud.php?acao=montar&id=$turma'><img src='update.png' alt='Atualizar' title='Atualizar registro'></a>
            <a href='index.php'><img src='insert.png' alt='Inserir' title='Inserir registro'></a>";
            
            echo "</tr>";
        }
        
        mysqli_close($conexao);
        
        
        break;
        
default:
    header("Location:index.php");
    break;
}


?>