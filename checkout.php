<?php include __DIR__ . '/templates/header.php'; ?>
<body>
    <?php include __DIR__ . '/templates/menu.php'; ?>
    <div class="container">
        <h2>Finalizar compra</h2>
        <form method="post" action="fechar_pedido.php">
            <div class="row">
                <div class="col-md-4">
                    <h3>Dados do comprador</h3>
                    <div class="form-group">
                        <label for="nome_cliente">Nome</label>
                        <input
                            type="text"
                            class="form-control"
                            id="nome_cliente"
                            name="nome_cliente"
                            placeholder="Maria Luiza">
                    </div>
                    <div class="form-group">
                        <label for="email_cliente">E-mail</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email_cliente"
                            name="email_cliente"
                            placeholder="seu@email.com">
                    </div>
                    <div class="form-group">
                        <label for="cpf_cliente">CPF</label>
                        <input
                            type="text"
                            class="form-control"
                            id="cpf_cliente"
                            name="cpf_cliente">
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Dados de cobrança/entrega</h3>
                    <div class="form-group">
                        <label for="rua_cliente">Rua</label>
                        <input
                            type="text"
                            class="form-control"
                            id="rua_cliente"
                            name="rua_cliente">
                    </div>
                    <div class="form-group">
                        <label for="numero_cliente">Número</label>
                        <input
                            type="number"
                            class="form-control"
                            id="numero_cliente"
                            name="numero_cliente">
                    </div>
                    <div class="form-group">
                        <label for="bairro_cliente">Bairro</label>
                        <input
                            type="text"
                            class="form-control"
                            id="bairro_cliente"
                            name="bairro_cliente">
                    </div>
                    <div class="form-group">
                        <label for="cidade_cliente">Cidade</label>
                        <input
                            type="text"
                            class="form-control"
                            id="cidade_cliente"
                            name="cidade_cliente">
                    </div>
                    <div class="form-group">
                        <label for="estado_cliente">Estado</label>
                        <input
                            type="text"
                            class="form-control"
                            id="estado_cliente"
                            name="estado_cliente">
                    </div>
                    <div class="form-group">
                        <label for="complemento_cliente">Complemento</label>
                        <input
                            type="text"
                            class="form-control"
                            id="complemento_cliente"
                            name="complemento_cliente">
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Pagamento</h3>
                    <div class="form-group">
                        <label for="numero_cartao_cliente">Número do cartão</label>
                        <input
                            type="text"
                            class="form-control"
                            id="numero_cartao_cliente"
                            name="numero_cartao_cliente">
                    </div>
                    <div class="form-group">
                        <label for="validade_cartao_cliente">Validade</label>
                        <input
                            type="text"
                            class="form-control"
                            id="validade_cartao_cliente"
                            name="validade_cartao_cliente"
                            placeholder="0226">
                    </div>
                    <div class="form-group">
                        <label for="cvv_cartao_cliente">CVV</label>
                        <input
                            type="text"
                            class="form-control"
                            id="cvv_cartao_cliente"
                            name="cvv_cartao_cliente">
                    </div>
                    <div class="form-group">
                        <label for="nome_impress_cartao_cliente">Nome impresso</label>
                        <input
                            type="text"
                            class="form-control"
                            id="nome_impress_cartao_cliente"
                            name="nome_impress_cartao_cliente">
                    </div>
                    <div class="form-group">
                        <label for="parcelas_compra_cliente">Parcelas</label>
                        <select
                            name="parcelas_compra_cliente"
                            class="form-control"
                            id="parcelas_compra_cliente">
                            <?php for ($i = 1; $i < 13; $i++) : ?>
                                <option value="<?php echo $i; ?>"><?php echo sprintf('%dx', $i); ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Finalizar compra</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php include __DIR__ . '/templates/footer.php';