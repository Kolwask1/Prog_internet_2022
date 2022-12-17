<?php

namespace Classes;

use InvalidArgumentException;

class Rei extends Peca
{

    protected function testeMovimento($lin, $col)
    {
        if (
            $this->posicaoLin - $lin != 1 ||
            $this->posicaoCol - $col != 1
        ) {
            throw new InvalidArgumentException("movimento não permitido");
        }
    }
}
