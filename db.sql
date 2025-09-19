create database database_ficha;
use database_ficha;

create table persona(
    id int not null auto_increment,
    nome_jogador varchar(45) ,
    nome_personagem varchar(45) ,
    idade int ,
    altura decimal(1,2) ,
    nivel int ,
    peso decimal(1,2), 
    cor_cabelo varchar(9) ,
    cor_olho  varchar(9) ,
    cor_pele  varchar(9) ,
    deslocamento int ,
    pontos_vida int ,
    dado_vida varchar(3),
    quantidade_dado int,
    raca varchar(45),
    antecedente varchar(45),
    alinhamento varchar(45),
    atributo_conju varchar(45),
    cd_magias varchar(45),
    modificador_magias int,
    classe varchar(45),
    fk_equipamento int not null, 
    FOREIGN KEY (fk_equipamento) REFERENCES equipamento(id),
    fk_status int not null,
    FOREIGN KEY (fk_status) REFERENCES statusPer(id),
    fk_truques int not null,
    FOREIGN KEY (fk_truques) REFERENCES truques(id),
    fk_1_circulo int not null,
    FOREIGN KEY (fk_truques) REFERENCES 1circulo(id),
    fk_2_circulo int not null,
    FOREIGN KEY (fk_truques) REFERENCES 2circulo(id),
    fk_3_circulo int not null,
    FOREIGN KEY (fk_truques) REFERENCES 3circulo(id),
    fk_4_circulo int not null,
    FOREIGN KEY (fk_truques) REFERENCES 4circulo(id),
    fk_5_circulo int not null,
    FOREIGN KEY (fk_truques) REFERENCES 5circulo(id),
    fk_6_circulo int not null,
    FOREIGN KEY (fk_truques) REFERENCES 6circulo(id),
    fk_7_circulo int not null,
    FOREIGN KEY (fk_truques) REFERENCES 7circulo(id),
    fk_8_circulo int not null,
    FOREIGN KEY (fk_truques) REFERENCES 8circulo(id),
    fk_9_circulo int not null,
    FOREIGN KEY (fk_truques) REFERENCES 9circulo(id)
);

create table equipamento (
    id int not null auto_increment,
    escudo boolean,
    arma_primaria varchar(45),
    arma_terciaria varchar(45),
    arma_secundaria varchar(45),
    aradura  varchar(45),
    itens varchar(100)
);

create table statusPer (
    id int not null auto_increment,
    forca int,
    destreza int,
    constituica int,
    inteligencia int,
    sabedoria int,
    carisma int,
    pericia int,
    salvaguarda int,
    ModForca
    ModDestreza
    ModConst
    ModInt
    ModCari

);

create table truques (
    id int primary key not null  auto_increment,
    linha_1 varchar(45),
    linha_2 varchar(45),
    linha_3 varchar(45),
    linha_4 varchar(45),
    linha_5 varchar(45),
    linha_6 varchar(45),
    linha_7 varchar(45),
    linha_7 varchar(45)
);

create table 1circulo (
    id int primary key not null  auto_increment,
    linha_1 varchar(45),
    linha_2 varchar(45),
    linha_3 varchar(45),
    linha_4 varchar(45),
    linha_5 varchar(45),
    linha_6 varchar(45),
    linha_7 varchar(45),
    linha_7 varchar(45)
);

create table 2circulo (
    id int primary key not null  auto_increment,
    linha_1 varchar(45),
    linha_2 varchar(45),
    linha_3 varchar(45),
    linha_4 varchar(45),
    linha_5 varchar(45),
    linha_6 varchar(45),
    linha_7 varchar(45),
    linha_7 varchar(45)
);

create table 3circulo (
    id int primary key not null  auto_increment,
    linha_1 varchar(45),
    linha_2 varchar(45),
    linha_3 varchar(45),
    linha_4 varchar(45),
    linha_5 varchar(45),
    linha_6 varchar(45),
    linha_7 varchar(45),
    linha_7 varchar(45)
);

create table 4circulo (
    id int primary key not null  auto_increment,
    linha_1 varchar(45),
    linha_2 varchar(45),
    linha_3 varchar(45),
    linha_4 varchar(45),
    linha_5 varchar(45),
    linha_6 varchar(45),
    linha_7 varchar(45),
    linha_7 varchar(45)
);

create table 5circulo (
    id int primary key not null  auto_increment,
    linha_1 varchar(45),
    linha_2 varchar(45),
    linha_3 varchar(45),
    linha_4 varchar(45),
    linha_5 varchar(45),
    linha_6 varchar(45),
    linha_7 varchar(45),
    linha_7 varchar(45)
);

create table 6circulo (
    id int primary key not null  auto_increment,
    linha_1 varchar(45),
    linha_2 varchar(45),
    linha_3 varchar(45),
    linha_4 varchar(45),
    linha_5 varchar(45),
    linha_6 varchar(45),
    linha_7 varchar(45),
    linha_7 varchar(45)
);

create table 7circulo (
    id int primary key not null  auto_increment,
    linha_1 varchar(45),
    linha_2 varchar(45),
    linha_3 varchar(45),
    linha_4 varchar(45),
    linha_5 varchar(45),
    linha_6 varchar(45),
    linha_7 varchar(45),
    linha_7 varchar(45)
);

create table 8circulo (
    id int primary key not null  auto_increment,
    linha_1 varchar(45),
    linha_2 varchar(45),
    linha_3 varchar(45),
    linha_4 varchar(45),
    linha_5 varchar(45),
    linha_6 varchar(45),
    linha_7 varchar(45),
    linha_7 varchar(45)
);

create table 9circulo (
    id int primary key not null  auto_increment,
    linha_1 varchar(45),
    linha_2 varchar(45),
    linha_3 varchar(45),
    linha_4 varchar(45),
    linha_5 varchar(45),
    linha_6 varchar(45),
    linha_7 varchar(45),
    linha_7 varchar(45)
);