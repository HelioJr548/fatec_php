<?php
require_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Professor</title></title>
</head>

<body>

<form method="post" action="login.php?acao=login_prof&id=idprof" name="dados" onSubmit="return enviardados();">

    <table width="100" border="0" align="center">
    
    <tr>
            <td width="50">
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">ID:</font>
            </td>
            <td width="460">
                <input name="idprof" type="text" class="formbutton" id="idprof" size="52" maxlength="150" placeholder="1">
            </td>
        </tr>

        <tr>
            <td>
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Email:</font>
            </td>
            <td>
                <font size="2">
                    <input name="acesso" type="text" id="acesso" size="52" maxlength="150" class="formbutton" placeholder="helio">
                </font>
            </td>
        </tr>

        <tr>
            <td height="22"></td>
            <td>
            <input name="Submit" type="submit" class="formobjects"  >
            <input name="Reset" type="reset" class="formobjects" value="Limpar campos">
            <!--<button type='submit' formaction='pegar.php'>Consultar</button>-->
            </td>
        </tr>
    </table>
</form>
</body>

</html>