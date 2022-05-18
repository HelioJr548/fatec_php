<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastrar Candidato</title>
</head>

<body>

   <form method="post" action="insert_cand.php" name="dados" onSubmit="return enviardados();">

    <table width="588" border="0" align="center">
        <tr>
            <td width="118">
                <label for="municipio"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" >Municipio:</font></label>
            </td>
            
            <td width="460">
                <input name="municipio" type="text" class="formbutton" id="municipio" size="52" maxlength="150" >
            </td>

            
        </tr>

        <tr>
            <td width="118">
                <label for="partido"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" >Partido filiado:</font></label>
            </td>
            <td width="460">
                <input name="partido" type="text" class="formbutton" id="partido" size="52" maxlength="150" >
            </td>
            <td width="20">
                <input name="sigla" type="text" class="formbutton" id="sigla" size="7" maxlength="150" placeholder="Sigla Partido" >
            </td>
        </tr>
        <tr>
            <td width="118">
                <label for="candidato"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" >Nome completo:</font></label>
            </td>
            <td width="460">
                <input name="candidato" type="text" class="formbutton" id="candidato" size="52" maxlength="150" >
            </td>
        </tr>

        <tr>
            <td>
                <label  for="cargo"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Cargo:</label></font>
            </td>
            <td>
                <font size="2">
                    <input name="cargo" type="text" id="cargo" class="formbutton" size="52" maxlength="150" >
                </font>
            </td>
        </tr>

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
                <button class="waves-effect waves-light btn" type="submit" name="action" formaction="select_cand.php">ler
                <button class="waves-effect waves-light btn" type="submit" name="action" formaction="isset_post_cand.php">Imprimir
                </button>
                <button class="waves-effect waves-light btn" type="submit" name="action" formaction="deletar_cand.php">Deletar
                </button>
                <button class="waves-effect waves-light btn" type="submit" name="action" formaction="index.php">Voltar
                </button>
            <!--<button type='submit' formaction='pegar.php'>Consultar</button>-->
            </td>
        </tr>
    </table>
</form>
</body>

</html>