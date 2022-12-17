<?php

namespace Classes;

use InvalidArgumentException;

class Rainha extends Peca
{
    protected function testeMovimento($lin, $col)
    {
        if (!($this->posicaoLin == $lin && $this->posicaoCol != $col ||
            $this->posicaoLin != $lin && $this->posicaoCol == $col ||
            abs($lin - $col) == abs($this->posicaoLin - $this->posicaoCol) ||
            $lin + $col == $this->posicaoLin + $this->posicaoCol
        )) {
            throw new InvalidArgumentException
            ("movimento não permitido");
        }
    }
}
