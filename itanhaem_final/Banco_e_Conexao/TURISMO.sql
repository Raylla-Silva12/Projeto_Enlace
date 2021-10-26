CREATE DATABASE TURISMO;

USE TURISMO;

CREATE TABLE TB_PESSOA(
CDPESSOA INT ZEROFILL AUTO_INCREMENT PRIMARY KEY NOT NULL,
NMPESSOA VARCHAR(222) NOT NULL,
CPF VARCHAR(11) NOT NULL,
DTNASC DATE NOT NULL,
BAIRRO VARCHAR(55) NOT NULL,
ENDERECO VARCHAR (45) NOT NULL,
NUMERO VARCHAR (15) NOT NULL,
COMPLEMENTO VARCHAR (45),
REFERENCIA VARCHAR(75),
TELEFONE VARCHAR(15) NOT NULL,
TELEFONE2 VARCHAR(15),
EMAIL VARCHAR(150) NOT NULL

);

CREATE TABLE TB_ATIVIDADE(
CDATIVIDADE INT ZEROFILL AUTO_INCREMENT PRIMARY KEY NOT NULL,
NMATIVIDADE VARCHAR(75) NOT NULL,
DTATIVIDADE DATE NOT NULL,
DESCRICAO VARCHAR (330) NOT NULL,
BAIRRO VARCHAR(45) NOT NULL,
ENDERECO VARCHAR(75) NOT NULL,
NUMERO VARCHAR(15) NOT NULL,
COMPLEMENTO VARCHAR (45),
REFERENCIA VARCHAR(75),
TELEFONE VARCHAR(15) NOT NULL,
TELEFONE2 VARCHAR(15),
EMAIL VARCHAR(150) NOT NULL,
CDPESSOA INT ZEROFILL,

FOREIGN KEY (CDPESSOA) REFERENCES TB_PESSOA (CDPESSOA)
);

CREATE TABLE TB_EMPRESA(
CDEMPRESA INT ZEROFILL AUTO_INCREMENT PRIMARY KEY NOT NULL,
NMFANTASIA VARCHAR(222) NOT NULL,
CNPJ VARCHAR(14) NOT NULL,
BAIRRO VARCHAR(55) NOT NULL,
ENDERECO VARCHAR (45) NOT NULL,
NUMERO VARCHAR (15) NOT NULL,
COMPLEMENTO VARCHAR (45),
REFERENCIA VARCHAR(75),
TELEFONE VARCHAR(15) NOT NULL,
TELEFONE2 VARCHAR(15),
EMAIL VARCHAR(150) NOT NULL

);


CREATE TABLE TB_EVENTO(
CDEVENTO INT ZEROFILL AUTO_INCREMENT PRIMARY KEY NOT NULL,
NMEVENTO VARCHAR(75) NOT NULL,
DTEVENTO DATE NOT NULL,
DESCRICAO VARCHAR (330) NOT NULL,
BAIRRO VARCHAR(45) NOT NULL,
ENDERECO VARCHAR(75) NOT NULL,
NUMERO VARCHAR(15) NOT NULL,
COMPLEMENTO VARCHAR (45),
REFERENCIA VARCHAR(75),
TELEFONE VARCHAR(15) NOT NULL,
TELEFONE2 VARCHAR(15),
EMAIL VARCHAR(150) NOT NULL,
CDEMPRESA INT ZEROFILL,

FOREIGN KEY (CDEMPRESA) REFERENCES TB_EMPRESA (CDEMPRESA)
);

describe TB_EVENTO;
