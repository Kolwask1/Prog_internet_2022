<?php

namespace Classes;

use InvalidArgumentException;

class Peao extends Peca
{

    protected function testeMovimento($lin, $col)
    {
        if (($this->posicaoLin == 2 && $lin > 4) ||
            $this->posicaoCol != $col ||
            ($this->posicaoLin != 2 && $this->posicaoLin - $lin != 1)
        ) {
            throw new InvalidArgumentException("Movimento não permitido");
        }
    }
}
