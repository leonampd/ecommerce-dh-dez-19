<?php

class Carrinho
{
    private $itensCarrinho = [];

    public function adicionarAoCarrinho(ItemCarrinho $xItemCarrinho)
    {
        $this->itensCarrinho[] = $xItemCarrinho;
    }

    public function calcularTotal(): float
    {
        $total = 0;
        foreach($this->itensCarrinho as $item) {
            $total += $item->calcularSubtotal();
        }

        return $total;
    }

    public function getItensCarrinho(): array
    {
        return $this->itensCarrinho;
    }
}