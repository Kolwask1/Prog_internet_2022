<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Exemplo de HTML com PHP</title>
</head>
<body>
    <h1>Vamos codar um PHP!</h1>
    <?php
        $teste = true;
    ?>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia ipsa mollitia, voluptate laborum amet recusandae et. Vel beatae blanditiis
         modi, itaque facere saepe, alias consequatur repudiandae, quia cupiditate eaque quod!</p>
         <!--colocando o if em conjunto com o HTM-->
        <?php if ($teste): ?>
            <div>
                <p>Salve, só vou aparecer se o teste for vdd!!</p>
            </div>
            <?php else: ?>
                <div>
                <p>Salve, só vou aparecer se o teste for falso!!</p>
                </div>
                <?php endif; ?>
</body>
</html>