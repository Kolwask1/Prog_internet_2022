<?php

namespace Classes;

use InvalidArgumentException;

abstract class Peca
{
    protected $nomePeca;
    protected $posicaoLin;
    protected $posicaoCol;

    public function movimentar($lin, $col)
    {
        // teste da movimentação
        if ($lin < 1 || $lin > 8 || $col < 1 || $col > 8)
            throw new InvalidArgumentException("Movimento não permitido linha ou coluna deve ser entre 1 e 8");
        $this->testeMovimento($lin, $col);
        $this->posicaoLin = $lin;
        $this->posicaoCol = $col;
    }

    abstract protected function testeMovimento($lin, $col);
}
