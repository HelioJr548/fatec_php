<?php
//header("Location: select.php?mensagem=OK");
include_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar txt GET</title>
</head>

<body>

    <form method="post" action="crud.php?acao=inserirprof" name="dados" onSubmit="return enviardados();">

    <table width="588" border="0" align="center">
    <h2>Cadastrar Professor</h2>
    <tr>
        <td width="118">
            <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome completo:</font>
        </td>
        <td width="460">
            <input name="prof" type="text" class="formbutton" id="prof" size="52" maxlength="150" oninput="this.value = this.value.toUpperCase()" required>
        </td>
    </tr>
    
    <tr>
        <td width="118">
            <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Email:</font>
        </td>
        <td width="460">
            <input name="email" type="text" class="formbutton" id="email" size="52" maxlength="150" required>
        </td>
    </tr>

        <tr>
            <td height="22"></td>
            <td>
            <input name="Submit" type="submit" class="formobjects" value="Cadastrar">
            <!--<button type='submit' formaction='pegar.php'>Consultar</button>-->
            </td>
        </tr>
    </table>
    </form>

    <form method="post" action="crud.php?acao=inserirdisc" name="dados" onSubmit="return enviardados();">

    <table width="588" border="0" align="center">
    <h2>Cadastrar Disciplina</h2>

    
        <tr>
            <td>
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Código da Disciplina:</font>
            </td>
            <td>
                <font size="2">
                    <input name="coddisc" type="text" id="coddisc" size="52" maxlength="150" class="formbutton" oninput="this.value = this.value.toUpperCase()" >
                </font>
            </td>
        </tr>

        <tr>
            <td width="118">
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome da Disciplina:</font>
            </td>
            <td width="460">
                <input name="disc" type="text" class="formbutton" id="disc" size="52" maxlength="150">
            </td>
        </tr>


        <tr>
            <td height="22"></td>
            <td>
            <input name="Submit" type="submit" class="formobjects" value="Cadastrar">
            <!--<button type='submit' formaction='pegar.php'>Consultar</button>-->
            </td>
        </tr>
    </table>
    </form>

    <form method="post" action="crud.php?acao=inserirturma" name="dados" onSubmit="return enviardados();">

    <table width="588" border="0" align="center">
    <h2>Cadastrar Turma</h2>
        <tr>
            <td width="118">
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Turma:</font>
            </td>
            <td width="460">
                <input name="turma" type="text" class="formbutton" id="turma" size="52" maxlength="150" oninput="this.value = this.value.toUpperCase()" >
            </td>
        </tr>

        <tr>
            <td>
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Semestre:</font>
            </td>
            <td>
                <font size="2">
                    <input name="semestre" type="number" min="1" max="2" id="semestre" class="formbutton">
                </font>
            </td>
            
        </tr>

        <tr>
            <td>
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Ano:</font>
            </td>
            <td>
                <font size="2">
                    <input name="ano" type="number" id="ano" size="52" maxlength="150" class="formbutton">
                </font>
            </td>
        </tr>

        <tr>
            <td>
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Disciplina:</font>
            </td>
            
            <td width="40">
                <select name="select_disc">
                    <option>Selecione</option>
                    <?php
                        // 'disciplina' = $_POST['tabela'];
                        $rs = "SELECT * FROM disciplinas";
                        $rss = mysqli_query($conexao, $rs);
                        while($row = mysqli_fetch_assoc($rss)){ ?>
                            <option value="<?php echo $row['CodDisc'];?>"><?php echo $row['CodDisc'];?></option><?php
                        }
                    ?>
                </select>
            </td>
            
        </tr>

        <tr>
            <td>
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Professor:</font>
            </td>
            
            <td width="40">
                <select name="select_prof" >
                    <option required>Selecione</option>
                    <?php
                        // 'disciplina' = $_POST['tabela'];
                        $rs = "SELECT * FROM professores";
                        $rss = mysqli_query($conexao, $rs);
                        while($row = mysqli_fetch_assoc($rss)){ ?>
                            <option value="<?php echo $row['IdProfessor'];?>"><?php echo $row['Professor'];?></option><?php
                        }
                    ?>
                </select>
                
            </td>
        </tr>
            
        <tr>
            <td height="22"></td>
            <td>
            <input name="Submit" type="submit" class="formobjects" value="Cadastrar">
            <input name="Reset" type="reset" class="formobjects" value="Limpar campos">
            <!--<button type='submit' formaction='pegar.php'>Consultar</button>-->
            </td>
        </tr>
    </table>
    </form>

    <form method="post" action="crud.php?acao=inseriraula" name="dados" onSubmit="return enviardados();">

    <table width="588" border="0" align="center">
    <h2 >Cadastrar Aula</h2>
        <tr>
            <td width="118">
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Turma:</font>
            </td>
            <td width="460">
                <select name="select_turma">
                    <option>Selecione</option>
                    <?php
                        // 'disciplina' = $_POST['tabela'];
                        $rs = "SELECT * FROM turmas";
                        $rss = mysqli_query($conexao, $rs);
                        while($row = mysqli_fetch_assoc($rss)){ ?>
                            <option value="<?php echo $row['Turma'];?>"><?php echo $row['Turma'];?></option><?php
                        }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Data da Aula:</font>
            </td>
            <td>
                <font size="2">
                    <input name="dataaula" type="date" min="1" max="2" id="dataaula" class="formbutton">
                </font>
            </td>
            
        </tr>

        <tr>
            <td>
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Conteudo da Aula:</font>
            </td>
            <td>
                <font size="2">
                    <textarea name="conteudo" cols="50" rows="8" class="formbutton" id="conteudo" input></textarea>
                </font>
            </td>
        </tr>



        <tr>
            <td height="22"></td>
            <td>
            <input name="Submit" type="submit" class="formobjects" value="Cadastrar">
            <input name="Reset" type="reset" class="formobjects" value="Limpar campos">
            <!--<button type='submit' formaction='pegar.php'>Consultar</button>-->
            </td>
        </tr>
    </form>
        
    <form method="post" action="crud.php?acao=inseriraluno" name="dados" onSubmit="return enviardados();">

    <table width="588" border="0" align="center">
    <h2>Cadastrar Aluno</h2>
        <tr>
            <td width="118">
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome do Aluno:</font>
            </td>
            <td width="460">
                <input name="aluno" type="text" class="formbutton" id="aluno" size="52" maxlength="150" oninput="this.value = this.value.toUpperCase()" >
            </td>
        </tr>

        <td width="118">
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Turma:</font>
            </td>
            <td width="460">
                <select name="select_turma">
                    <option>Selecione</option>
                    <?php
                        // 'disciplina' = $_POST['tabela'];
                        $rs = "SELECT * FROM turmas";
                        $rss = mysqli_query($conexao, $rs);
                        while($row = mysqli_fetch_assoc($rss)){ ?>
                            <option value="<?php echo $row['Turma'];?>"><?php echo $row['Turma'];?></option><?php
                        }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td height="22"></td>
            <td>
            <input name="Submit" type="submit" class="formobjects" value="Cadastrar">
            <input name="Reset" type="reset" class="formobjects" value="Limpar campos">
            <!--<button type='submit' formaction='pegar.php'>Consultar</button>-->
            </td>
        </tr>

    </table>
    </form>
</body>

</html>