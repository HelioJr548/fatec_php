CREATE TABLE livros
(
    nome VARCHAR(255) NOT null,
    autor VARCHAR(255),
    quantidade int not null,
    preco VARCHAR(255) NOT null,
    flag tinyint(1) null DEFAULT 0,
    data date not null,
    PRIMARY KEY(nome)
);