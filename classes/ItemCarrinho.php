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
        return $this->livro->getValor() * $this->quantidade;
    }

    public function getLivro(): Livro
    {
        return $this->livro;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }
}