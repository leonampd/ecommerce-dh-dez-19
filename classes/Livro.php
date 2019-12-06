<?php

class Livro
{
    private $titulo;
    private $valor;
    private $descricao;

    public function __construct(string $xTitulo, float $xValor, string $xDescricao)
    {
        $this->titulo = $xTitulo;
        $this->valor = $xValor;
        $this->descricao = $xDescricao;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }
}