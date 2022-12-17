<?php

namespace Classes;

use InvalidArgumentException;

class Bispo extends Peca{

    protected function testeMovimento($lin, $col)
    {
        if($this->posicaoLin!=$lin && $this->posicaoCol!=$col)
        {
            throw new InvalidArgumentException("Movimento não permitido");  
        }
    }

}