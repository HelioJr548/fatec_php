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
   <title>Cadastrar Municipio</title>
</head>

<body>

   <form method="post" action=".php">

    <table width="588" border="0" align="center" vAlign="middle">
        <tr>
            <td width="118">
                <select name="tabela">
                    <option  value="municipio">municipio</option>
                    <option  value="zona">zona</option>
                    <option  value="secao">secao</option>
                    <option  value="eleitor">eleitor</option>
                    <option  value="partido">partido</option>
                    <option  value="candidato">candidato</option>
                </select>
            </td> 
            
            <td width="460">
                <select name="conteudo">
                    <option>Selecione</option>
                    <?php
                        $tabela = $_POST['tabela'];
                        $rs = "SELECT * FROM ".$tabela."";
                        $rss = mysqli_query($conn, $rs);
                        while($row = mysqli_fetch_assoc($rss)){ ?>
                            <option value="<?php echo $row[$tabela];?>"><?php echo $row[$tabela];?></option><?php
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td height="85">
                <p><strong>
                        <font face="Verdana, Arial, Helvetica, sans-serif">
                        <font size="1">
                        </font>
                    </font>
                </strong></p>
            </td>
        </tr>
        <tr>
            <td height="22"></td>
            <td>
                <input name="Submit" type="submit" class="formobjects" value="Cadastrar">
                <input name="Reset" type="reset" class="formobjects" value="Limpar campos">
                <button class="waves-effect waves-light btn" type="submit" name="action" formaction="select_all.php">ler
                <button class="waves-effect waves-light btn" type="submit" name="action" formaction="select_deletar.php">Deletar
                </button>
            <!--<button type='submit' formaction='pegar.php'>Consultar</button>-->
            </td>
        </tr>
    </table>
</form>
</body>

</html>

