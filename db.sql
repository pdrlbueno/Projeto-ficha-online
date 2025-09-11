create database ficha;
use ficha;

create table persona(
    id int not null auto_increment,
    nome_jogador varchar(45) ,
    nome_personagem varchar(45) ,
    idade int ,
    altura decimal(1,2) ,
    nivel int ,
    peso decimal(1,2) 
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
    classe varchar(45)
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

create table status (
    id int not null auto_increment,
    forca
    destreza
    constituica
    inteligencia
    sabedoria
    carisma
    pericia
    salvaguarda

)

create table magias (
    

    
)