<?php
class pizzacalabreza{
    

public function preparar(){
echo "colocando molho na pizza\n";
echo "colocando as rodelas de calabreza na pizza\n";
echo "colocando queijo na pizza\n";
}
public function assar(){
echo " Assar por 15 min\n";
}
public function comercializar(){
echo "vender a R$ 50,00";
}
}
class pizzachocolate {
    public function preparar(){
        echo "passar a cobertuta de chocolate meio a margo\n";
        echo "colocar cerejas nas extremidades\n";
    } 
    public function assar(){
        echo "assar por 8 min\n";
    }
    public function comercializar(){
        echo "vender a R$ 30,00";
    }
} 
$pizzacalabreza = new pizzacalabreza();
$pizzacalabreza -> preparar();
$pizzacalabreza -> assar();
$pizzacalabreza -> comercializar();
echo"\n";
$pizzachocolate = new pizzachocolate();
$pizzachocolate -> preparar();
$pizzachocolate -> assar();
$pizzachocolate -> comercializar();