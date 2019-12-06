<?php

class ItemCarrinho
{
    private $livro;
    private $quantidade;

    public function __construct(Livro $xLivro, int $xQuantidade)
    {
        $this->livro = $xLivro;
        $this->quantidade = $xQuantidade;
    }

    public function calcularSubtotal(): float
    {
        $this->livro->getValor() * $this->quantidade;
    }
}