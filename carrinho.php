<?php
    require("classes/Livro.php");
    require("classes/ItemCarrinho.php");
    require("classes/Carrinho.php");

    $nomeProduto1 = $_POST['nome'][0];
    $descricaoProduto1 = $_POST['descricao'][0];
    $precoProduto1 = $_POST['preco'][0];
    $quantidadeProduto1 = $_POST['quantidade'][0];

    $livro1 = new Livro($nomeProduto1, $precoProduto1, $descricaoProduto1);
    $itemCarrinho1 = new ItemCarrinho($livro1, $quantidadeProduto1);

    $carrinho = new Carrinho();
    $carrinho->adicionarAoCarrinho($itemCarrinho1);

?>

<?php include __DIR__ . '/templates/header.php'; ?>
<body>
    <?php include __DIR__ . '/templates/menu.php'; ?>
    <div class="container">
        <h2>Carrinho</h2>

        <div class="row">
            <div class="col-md-8">
                <ul class="list-group">
                    <?php foreach ($carrinho->getItensCarrinho() as $item) : ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"><?php echo $item->getLivro()->getTitulo(); ?></h6>
                                <p><small class="text-muted"><?php echo $item->getLivro()->getDescricao(); ?></small></p>
                                <p><small>Quantidade: <?php echo $item->getQuantidade(); ?></small></p>
                            </div>
                            <span class="text-muted">R$ <?php echo $item->calcularSubtotal(); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="list-group">
                    <h5>Resumo</h5>
                    <div class="list-group-item d-flex">
                        <strong>TOTAL:</strong> <?php echo $carrinho->calcularTotal(); ?>
                    </div>
                    <div class="list-group-item d-flex">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-success">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include __DIR__ . '/templates/footer.php';