<?php
 require_once(__DIR__ . "/common/cabecalho.php");

    session_destroy();
    echo "<h3> Usuario efetuou o logoff com sucesso";

 require_once(__DIR__ . "/common/rodape.php");