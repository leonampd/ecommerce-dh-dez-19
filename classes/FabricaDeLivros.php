<?php

class FabricaDeLivros
{
    public function criarLivro(string $tipo, string $nome, float $preco, string $descricao): Livro
    {
        if($tipo == 'ebook') {
            return new Ebook($nome, $preco, $descricao);
        } else if($tipo == 'físico') {
            return new LivroFisico($nome, $preco, $descricao);
        }
    }
}