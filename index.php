<?php include __DIR__ . '/templates/header.php'; ?>
<body>
    <?php include __DIR__ . '/templates/menu.php'; ?>

    <div class="container">
        <p class="font-weight-bold">Mais vendidos da semana</p>
        <div class="row">
            <div class="product-item col-md-6">
                <div class="product-img">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/51exUj78lZL._SX348_BO1,204,203,200_.jpg" alt="">
                </div>
                <div class="details">
                    <p class="font-weight-bold">Design Patterns: Elements of Reusable Object-Oriented Software</p>
                    <p class="text-muted">Catálogo de soluções simples e sucintas para os problemas mais freqüentes na área de projeto, assinado por quatro profissionais com grande experiência em software orientado a objetos. Um best-seller mundial.</p>
                    <p class="price font-weight-bold">R$ 12,99</p>
                </div>
                <div class="form-inline">
                    <input class="form-control" style="width:45px;margin-right:14px" type="number" name="quantity" value="1" />
                    <button
                        type="button"
                        class="btn btn-primary add-to-cart"
                        data-product-id="1"
                        data-product-name="Design Patterns: Elements of Reusable Object-Oriented Software"
                        data-product-description="Catálogo de soluções simples e sucintas para os problemas mais freqüentes na área de projeto, assinado por quatro profissionais com grande experiência em software orientado a objetos. Um best-seller mundial."
                        data-product-price="12.99">
                        Adicionar ao carrinho
                    </button>
                </div>
            </div>
            <div class="product-item col-md-6">
                <div class="product-img">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/51d1qVhmAmL.jpg" alt="">
                </div>
                <div class="details">
                    <p class="font-weight-bold">Clean Code: A Handbook of Agile Software Craftsmanship</p>
                    <p class="text-muted">Mesmo um código ruim pode funcionar. Mas se ele não for limpo, pode acabar com uma empresa de desenvolvimento. Perdem-se a cada ano horas incontáveis e recursos importantes devido a um código mal escrito. O especialista em software, Robert C. Martin, apresenta um paradigma com 'Código limpo - Habilidades Práticas do Agile Software.' Aprenda a ler códigos e descubra o que está correto e errado neles</p>
                    <p class="price font-weight-bold">R$ 59,99</p>
                </div>
                <div class="form-inline">
                    <input class="form-control" style="width:45px;margin-right:14px" type="number" name="quantity" value="1" />
                    <button
                        type="button"
                        class="btn btn-primary add-to-cart"
                        data-product-id="1"
                        data-product-name="Clean Code: A Handbook of Agile Software Craftsmanship"
                        data-product-description="Mesmo um código ruim pode funcionar. Mas se ele não for limpo, pode acabar com uma empresa de desenvolvimento. Perdem-se a cada ano horas incontáveis e recursos importantes devido a um código mal escrito. O especialista em software, Robert C. Martin, apresenta um paradigma com 'Código limpo - Habilidades Práticas do Agile Software.' Aprenda a ler códigos e descubra o que está correto e errado neles"
                        data-product-price="59.99">
                        Adicionar ao carrinho
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product-item col-md-6">
                <div class="product-img">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41LBzpPXCOL._SX379_BO1,204,203,200_.jpg" alt="">
                </div>
                <div class="details">
                    <p class="font-weight-bold">Refactoring: Improving the Design of Existing Code (2nd Edition)</p>
                    <p class="text-muted">"Whenever you read [Refactoring], it’s time to read it again. And if you haven’t read it yet, please do before writing another line of code."</p>
                    <p class="price font-weight-bold">R$ 99,99</p>
                </div>
                <div class="form-inline">
                    <input class="form-control" style="width:45px;margin-right:14px" type="number" name="quantity" value="1" />
                    <button
                        type="button"
                        class="btn btn-primary add-to-cart"
                        data-product-id="1"
                        data-product-name="Refactoring: Improving the Design of Existing Code (2nd Edition)"
                        data-product-description=""Whenever you read [Refactoring], it’s time to read it again. And if you haven’t read it yet, please do before writing another line of code.""
                        data-product-price="99.99">
                        Adicionar ao carrinho
                    </button>
                </div>
            </div>
            <div class="product-item col-md-6">
                <div class="product-img">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/51fUKOog3VL._SX380_BO1,204,203,200_.jpg" alt="">
                </div>
                <div class="details">
                    <p class="font-weight-bold">Growing Object-Oriented Software, Guided by Tests</p>
                    <p class="text-muted">"The authors of this book have led a revolution in the craft of programming by controlling the environment in which software grows.” --Ward Cunningham</p>
                    <p class="price font-weight-bold">R$ 14,99</p>
                </div>
                <div class="form-inline">
                    <input class="form-control" style="width:45px;margin-right:14px" type="number" name="quantity" value="1" />
                    <button
                        type="button"
                        class="btn btn-primary add-to-cart"
                        data-product-id="1"
                        data-product-name="Growing Object-Oriented Software, Guided by Tests"
                        data-product-description=""The authors of this book have led a revolution in the craft of programming by controlling the environment in which software grows.” --Ward Cunningham"
                        data-product-price="14.99">
                        Adicionar ao carrinho
                    </button>
                </div>
            </div>
        </div>
    </div>
    <form id="carrinho" action="carrinho.php" method="post">
    </form>
<?php include __DIR__ . '/templates/footer.php'; ?>