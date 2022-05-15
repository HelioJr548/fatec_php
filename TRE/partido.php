<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastrar Partido</title>
</head>

<body>

   <form method="post" action="insert_partido.php" name="dados" onSubmit="return enviardados();">

    <table width="588" border="0" align="center" vAlign="middle">
        <tr>
            <td width="118">
                <label for="partido"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" >Partido:</font></label>
            </td>
            
            <td width="460">
                <input name="partido" type="text" class="formbutton" id="partido" size="52" maxlength="150" required>
            </td>
        </tr>

        <tr>
            <td width="118">
                <label for="sigla"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" >Sigla:</font></label>
            </td>
            <td width="460">
                <input name="sigla" type="text" class="formbutton" id="sigla" size="52" maxlength="150" required>
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
                <button class="waves-effect waves-light btn" type="submit" name="action" formaction="select_all.php">ler
                <button class="waves-effect waves-light btn" type="submit" name="action" formaction="isset_post_partido.php">Imprimir
                </button>
            <!--<button type='submit' formaction='pegar.php'>Consultar</button>-->
            </td>
        </tr>
    </table>
</form>
</body>

</html>