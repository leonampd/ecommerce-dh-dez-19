<?php include __DIR__ . '/templates/header.php'; ?>
<body>
    <?php include __DIR__ . '/templates/menu.php'; ?>
    <div class="container">
        <h2>Carrinho</h2>

        <div class="row">
            <div class="col-md-8">
                <ul class="list-group">
                    <?php for ($i = 0; $i < 4; $i++) : ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">{{ Nome 1 }}</h6>
                                <p><small class="text-muted">{{ Descricao do produto }}</small></p>
                                <p><small>Quantidade: {{ quantidade do produto }}</small></p>
                            </div>
                            <span class="text-muted">R$ {{valor do produto}}</span>
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="list-group">
                    <h5>Resumo</h5>
                    <div class="list-group-item d-flex">
                        <strong>TOTAL:</strong> {{ TOTAL }}
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