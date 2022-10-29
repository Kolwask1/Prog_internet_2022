<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 - Aula 22</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="formulario">
        <form action="#" method="POST">
            <table>
                <tr>
                    <td><label for="idLogin">Login:</label></td>
                    <td><input type="text" name="login" id="idLogin"></td>
                </tr>
                <tr>
                    <td><label for="idSenha">Senha</label></td>
                    <td><input type="password" name="senha" id="idSenha"></td>
                </tr>
                <tr>
                    <td colspan="2" class="txtCenter">
                        <input type="submit" value="Enviar">&nbsp;
                        <input type="reset" value="Limpar">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p class="txtCenter">
                            Data/Hora:<?= date("d/m/Y H:i:s")?><br>
                            Seu IP: <?=$_SERVER["REMOTE_ADDR"]?>
                        </p>
                    </td>
                </tr>
            </table>
        </form> 
    </section>
</body>
</html>