/*
Nome: Nicolas Hiroki e Marcus Vinícius 2°T.I - 4°Bimestre - LPI
*/

create database bv;

create table cadastroV (
    IDlivro int primary key AUTO_INCREMENT,
    livro varchar(50) not null,
    ISBN int (50) not null,
    Editora varchar(50) not null,
    ano_de_publicação int (50) not null,
    autor varchar(50) not null,
    valor varchar(50) not null,
    disponibilidade varchar(50) not null,
    Q_Estoque int (50) not null
)