<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastrar Municipio</title>
</head>

<body>

   <form method="post" action="insert_muni.php" name="dados" onSubmit="return enviardados();">

    <table width="588" border="0" align="center" vAlign="middle">
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
                <label for="uf"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" >UF:</font></label>
            </td>
            <td width="460">
                <input name="uf" type="text" class="formbutton" id="uf" size="52" maxlength="150" >
            </td>
            
        </tr>

        <tr>
            <td width="118">
                <label for="zona"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" >Zona:</font></label>
            </td>
            <td width="460">
                <input name="zona" type="number" class="formbutton" id="zona" size="52" maxlength="150" >
            </td>
            
        </tr>

        <tr>
            <td width="118">
                <label for="secao"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" >Secao:</font></label>
            </td>
            <td width="460">
                <input name="secao" type="number" class="formbutton" id="secao" size="52" maxlength="150" >
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
                <button class="waves-effect waves-light btn" type="submit" name="action" formaction="select_muni.php">ler
                <button class="waves-effect waves-light btn" type="submit" name="action" formaction="isset_post_muni.php">Imprimir
                </button>
                <button class="waves-effect waves-light btn" type="submit" name="action" formaction=deletar_municipio.php">Deletar
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