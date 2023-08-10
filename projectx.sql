use projectx;
/*

CREATE TABLE licitacao (
  id_licitacao INT AUTO_INCREMENT PRIMARY KEY,
  fornecedor_id INT,
  funcionario_id INT,
  MetodoPagamento_id INT,
  data_licitacao VARCHAR(50),
  total_licitacao DECIMAL(10, 2),
  observacoes VARCHAR(5000),
  FOREIGN KEY (fornecedor_id) REFERENCES fornecedor(id_fornecedor),
  FOREIGN KEY (funcionario_id) REFERENCES funcionario(id_funcionario),
  FOREIGN KEY (MetodoPagamento_id) REFERENCES MetodoPagamento(id_metodoPagamento)
);

CREATE TABLE itemlicitacao (
  id_itemlicitacao INT AUTO_INCREMENT PRIMARY KEY,
  licitacao_id INT,
  produto_id INT,
  quantidadde INT,
  subtotal DECIMAL(10, 2),
  FOREIGN KEY (licitacao_id) REFERENCES licitacao(id_licitacao),
  FOREIGN KEY (produto_id) REFERENCES produto(id_produto)
);

CREATE TABLE venda (
  id_venda INT AUTO_INCREMENT PRIMARY KEY,
  situacao BOOLEAN,
  observacoes VARCHAR(5000),
  data_venda DATETIME,
  total_venda DECIMAL(10, 2),
  funcionario_id INT,
  cliente_id INT,
  MetodoPagamento_id INT,
  FOREIGN KEY (funcionario_id) REFERENCES funcionario(id_funcionario),
  FOREIGN KEY (cliente_id) REFERENCES cliente(id_cliente)	 
);

CREATE TABLE itemvenda (
  id_itemVenda INT AUTO_INCREMENT PRIMARY KEY,
  venda_id INT,
  produto_id INT,
  quantidadde INT,
  subtotal DECIMAL(10, 2),
  FOREIGN KEY (venda_id) REFERENCES venda(id_venda),
  FOREIGN KEY (produto_id) REFERENCES produto(id_produto)
);

*/


-- Inserções na tabela cliente
INSERT INTO clientes (nome, cpf, email, usuario, senha, celular, cep, rua, numero, complemento, bairro, cidade, estado, nivel_acesso)
VALUES
('Ana Oliveira', '111.222.333-44', 'ana@example.com', 'anaoliveira', 'senha456', '987654321', '12345-678', 'Rua C', 456, 'Apto 789', 'Centro', 'São Paulo', 'SP', '0'),
('Pedro Santos', '222.333.444-55', 'pedro@example.com', 'pedrosantos', 'senha789', '987654321', '54321-876', 'Rua D', 789, 'Loja 987', 'Centro', 'São Paulo', 'SP', '0'),
('Mariana Lima', '333.444.555-66', 'mariana@example.com', 'marianalima', 'senha123', '987654321', '12345-678', 'Rua E', 123, 'Apto 654', 'Centro', 'São Paulo', 'SP', '0'),
('Rafaela Costa', '444.555.666-77', 'rafaela@example.com', 'rafaelacosta', 'senha456', '987654321', '54321-876', 'Rua F', 789, 'Loja 321', 'Centro', 'São Paulo', 'SP', '0'),
('Gabriel Silva', '555.666.777-88', 'gabriel@example.com', 'gabrielsilva', 'senha789', '987654321', '12345-678', 'Rua G', 456, 'Apto 987', 'Centro', 'São Paulo', 'SP', '0');


-- Inserções na tabela funcionario
INSERT INTO funcionarios (nome, cpf, email, usuario, senha, salario, celular, nivel_acesso)
VALUES
('Juliana Ferreira', '666.777.888-99', 'juliana@example.com', 'julianaferreira', 'senha123', '5000.00', '987654321', '1'),
('Lucas Rodrigues', '777.888.999-00', 'lucas@example.com', 'lucasrodrigues', 'senha456', '4500.00', '987654321', '0'),
('Larissa Gomes', '888.999.000-11', 'larissa@example.com', 'larissagomes', 'senha789', '4000.00', '987654321', '0'),
('Diego Almeida', '999.000.111-22', 'diego@example.com', 'diegoalmeida', 'senha123', '5500.00', '987654321', '1'),
('Camila Santos', '000.111.222-33', 'camila@example.com', 'camilasantos', 'senha456', '4800.00', '987654321', '0');

-- Inserções na tabela fornecedor
INSERT INTO fornecedores (nome, cnpj, email, usuario, senha, celular, cep, rua, numero, complemento, bairro, cidade, estado)
VALUES
('Fornecedor ABC', '23.456.789/0001-01', 'fornecedor@abc.com', 'fornecedorabc', 'senha123', '987654321', '12345-678', 'Rua H', 123, 'Apto 555', 'Centro', 'São Paulo', 'SP'),
('Fornecedor DEF', '34.567.890/0001-02', 'fornecedor@def.com', 'fornecedordef', 'senha456', '987654321', '54321-876', 'Rua I', 789, 'Loja 654', 'Centro', 'São Paulo', 'SP'),
('Fornecedor GHI', '45.678.901/0001-03', 'fornecedor@ghi.com', 'fornecedorghi', 'senha789', '987654321', '12345-678', 'Rua J', 456, 'Apto 321', 'Centro', 'São Paulo', 'SP'),
('Fornecedor JKL', '56.789.012/0001-04', 'fornecedor@jkl.com', 'fornecedorjkl', 'senha123', '987654321', '54321-876', 'Rua K', 789, 'Loja 789', 'Centro', 'São Paulo', 'SP'),
('Fornecedor MNO', '67.890.123/0001-05', 'fornecedor@mno.com', 'fornecedormno', 'senha456', '987654321', '12345-678', 'Rua L', 123, 'Apto 123', 'Centro', 'São Paulo', 'SP');

-- Inserções na tabela produto
INSERT INTO produtos (nome, descricao, preco, quantidade, fornecedor_id)
VALUES
('Produto B', 'Descrição do Produto B', 15.99, 50, 1),
('Produto C', 'Descrição do Produto C', 20.50, 80, 2),
('Produto D', 'Descrição do Produto D', 8.75, 100, 3),
('Produto E', 'Descrição do Produto E', 12.99, 70, 4),
('Produto F', 'Descrição do Produto F', 19.99, 60, 5);

/*


-- Inserções na tabela venda
INSERT INTO venda (situacao, observacoes, data_venda, total_venda, funcionario_id, cliente_id, metodoPagamento_id)
VALUES
(1, 'Observações da venda 2', '2023-06-29', 75.99, 1, 2, 1),
(1, 'Observações da venda 3', '2023-06-28', 100.50, 2, 3, 2),
(1, 'Observações da venda 4', '2023-06-27', 30.25, 3, 4, 1),
(1, 'Observações da venda 5', '2023-06-26', 50.99, 4, 5, 2),
(1, 'Observações da venda 6', '2023-06-25', 80.99, 5, 1, 1);

-- Inserções na tabela itemvenda
INSERT INTO itemvenda (venda_id, produto_id, quantidadde, subtotal)
VALUES
(1, 1, 3, 47.97),
(1, 2, 2, 41.00),
(2, 3, 5, 43.75),
(3, 4, 1, 12.99),
(4, 5, 4, 79.96);


DELIMITER //

CREATE TRIGGER trigger_atualiza_estoque
AFTER INSERT ON itemvenda
FOR EACH ROW
BEGIN
    UPDATE produto
    SET quantidadde = quantidadde - NEW.quantidadde
    WHERE id_produto = NEW.produto_id;
END //

DELIMITER ;

DELIMITER //

CREATE TRIGGER trigger_atualiza_estoque_apagar
AFTER DELETE ON itemvenda
FOR EACH ROW
BEGIN
    UPDATE produto
    SET quantidadde = quantidadde + OLD.quantidadde
    WHERE id_produto = OLD.produto_id;
END //

DELIMITER ;,


*/  