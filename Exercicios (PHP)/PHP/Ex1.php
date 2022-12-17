<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exercicios de PHP</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <fieldset>
        <caption> Primeior Exercicio </caption>
        <p>Meu nome é <?= "Matheus Volpe" ?></p>
    </fieldset>
    <fieldset>
        <caption> Segundo Exercicio </caption>
        <p>Calculo de produto de 28 e 43 = <?= 28 * 43 ?></p>
    </fieldset>
    <fieldset>
        <caption> Terceiro Exercicio </caption>
        <p>Calculo de média emtre 8,9 e 7 = <?= (8 + 9 + 7) / 3 ?> </p>
    </fieldset>
    <fieldset>
        <caption> Quarto Exercicio </caption>
        <p>O valor é <?= $varaivel = 8 ?></p>
        <p>Seu antecessor é <?= $varaivel - 1 ?> </p>
        <p>Seu sucessor é <?= $varaivel + 1 ?> </p>
    </fieldset>
    <fieldset>
        <caption> Quinto Exercicio </caption>
        <?php $vari1 = 400;
        $vari2 = 200; ?>
        <p> Soma de 400 + 200 = <?= $vari1 + $vari2 ?> </p>
    </fieldset>
    <fieldset>
        <caption> Sexto Exercicio </caption>
        <?php $vari3 = 30 ?>
        <p> Terceira parte de 30 = <?= $vari3 / 3 ?> </p>
    </fieldset>
    <fieldset>
        <caption>Setimo Exercicio</caption>
        <?php $vari4 = 20;
        $vari5 = 10; ?>
        <p>Dividendo <?= $vari5 ?></p>
        <p>Divisor <?= $vari4 ?> </p>
        <p> Quociente é = <?= $vari5 / $vari4 ?> </p>
        <p> E Resto sendo igual a = <?= $vari5 % $vari4 ?></p>
    </fieldset>
    <fieldset>
        <caption>Oitavo Exercicio</caption>
        <?php $vari4 = 20;
        $vari5 = 10; ?>
        <p>Dividendo <?= $vari5 ?></p>
        <p>Divisor <?= $vari4 ?> </p>
        <p> Quociente é = <?= $vari5 / $vari4 ?> </p>
        <p> E Resto sendo igual a = <?= $vari5 % $vari4 ?></p>
    </fieldset>
    <fieldset>
        <caption>Nono Exercicio</caption>
        <p>Código que imprima todos os números inteiros e positivos no intervalo aberto entre 10 e 100</p>
        <p>
            <?php
            for ($valor = 11; $valor <= 99; $valor++) {
                $d = intdiv($valor, 10);
                if ($valor % 10 != 0 && $valor % $d == 0) {
                    echo $valor . ",";
                }
            }
            ?>
        </p>
    </fieldset>
    <fieldset>
        <caption>Decimo Exercicio</caption>
        <p>
            <?php
            $virgula = "";
            for ($valor = 0; $valor <= 20; $valor++) {
                $numero = rand(0, 15);
                if ($numero ** 2 < 225) {
                    echo $virgula . $numero;
                    $virgula = ", ";
                }
            }
            ?>
        </p>
    </fieldset>
</body>

</html>