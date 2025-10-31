CREATE DATABASE database_ficha;
USE database_ficha;

CREATE TABLE equipamento (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    escudo varchar(3),
    arma_primaria VARCHAR(45),
    arma_terciaria VARCHAR(45),
    arma_secundaria VARCHAR(45),
    aradura VARCHAR(45),
    itens VARCHAR(100)
);

CREATE TABLE statusPer (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    forca INT,
    destreza INT,
    constituica INT,
    inteligencia INT,
    sabedoria INT,
    carisma INT,
    pericia INT,
    salvaguarda INT,
    ModForca INT,
    ModDestreza INT,
    ModConst INT,
    ModInt INT,
    ModCari INT
);

CREATE TABLE truques (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    linha_1 VARCHAR(45),
    linha_2 VARCHAR(45),
    linha_3 VARCHAR(45),
    linha_4 VARCHAR(45),
    linha_5 VARCHAR(45),
    linha_6 VARCHAR(45),
    linha_7 VARCHAR(45),
    linha_8 VARCHAR(45)
);

CREATE TABLE pri_circulo (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    pri_linha_1 VARCHAR(45),
    pri_linha_2 VARCHAR(45),
    pri_linha_3 VARCHAR(45),
    pri_linha_4 VARCHAR(45),
    pri_linha_5 VARCHAR(45),
    pri_linha_6 VARCHAR(45),
    pri_linha_7 VARCHAR(45),
    pri_linha_8 VARCHAR(45)
);

CREATE TABLE seg_circulo (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    seg_linha_1 VARCHAR(45),
    seg_linha_2 VARCHAR(45),
    seg_linha_3 VARCHAR(45),
    seg_linha_4 VARCHAR(45),
    seg_linha_5 VARCHAR(45),
    seg_linha_6 VARCHAR(45),
    seg_linha_7 VARCHAR(45),
    seg_linha_8 VARCHAR(45)
);

CREATE TABLE ter_circulo (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ter_linha_1 VARCHAR(45),
    ter_linha_2 VARCHAR(45),
    ter_linha_3 VARCHAR(45),
    ter_linha_4 VARCHAR(45),
    ter_linha_5 VARCHAR(45),
    ter_linha_6 VARCHAR(45),
    ter_linha_7 VARCHAR(45),
    ter_linha_8 VARCHAR(45)
);

CREATE TABLE quar_circulo (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    quar_linha_1 VARCHAR(45),
    quar_linha_2 VARCHAR(45),
    quar_linha_3 VARCHAR(45),
    quar_linha_4 VARCHAR(45),
    quar_linha_5 VARCHAR(45),
    quar_linha_6 VARCHAR(45),
    quar_linha_7 VARCHAR(45),
    quar_linha_8 VARCHAR(45)
);

CREATE TABLE quin_circulo (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    quin_linha_1 VARCHAR(45),
    quin_linha_2 VARCHAR(45),
    quin_linha_3 VARCHAR(45),
    quin_linha_4 VARCHAR(45),
    quin_linha_5 VARCHAR(45),
    quin_linha_6 VARCHAR(45),
    quin_linha_7 VARCHAR(45),
    quin_linha_8 VARCHAR(45)
);

CREATE TABLE sext_circulo (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    sext_linha_1 VARCHAR(45),
    sext_linha_2 VARCHAR(45),
    sext_linha_3 VARCHAR(45),
    sext_linha_4 VARCHAR(45),
    sext_linha_5 VARCHAR(45),
    sext_linha_6 VARCHAR(45),
    sext_linha_7 VARCHAR(45),
    sext_linha_8 VARCHAR(45)
);

CREATE TABLE set_circulo (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    set_linha_1 VARCHAR(45),
    set_linha_2 VARCHAR(45),
    set_linha_3 VARCHAR(45),
    set_linha_4 VARCHAR(45),
    set_linha_5 VARCHAR(45),
    set_linha_6 VARCHAR(45),
    set_linha_7 VARCHAR(45),
    set_linha_8 VARCHAR(45)
);

CREATE TABLE oitavo_circulo (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    oitavo_linha_1 VARCHAR(45),
    oitavo_linha_2 VARCHAR(45),
    oitavo_linha_3 VARCHAR(45),
    oitavo_linha_4 VARCHAR(45),
    oitavo_linha_5 VARCHAR(45),
    oitavo_linha_6 VARCHAR(45),
    oitavo_linha_7 VARCHAR(45),
    oitavo_linha_8 VARCHAR(45)
);

CREATE TABLE nono_circulo (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nono_linha_1 VARCHAR(45),
    nono_linha_2 VARCHAR(45),
    nono_linha_3 VARCHAR(45),
    nono_linha_4 VARCHAR(45),
    nono_linha_5 VARCHAR(45),
    nono_linha_6 VARCHAR(45),
    nono_linha_7 VARCHAR(45),
    nono_linha_8 VARCHAR(45)
);

CREATE TABLE persona (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome_jogador VARCHAR(45),
    nome_personagem VARCHAR(45),
    idade INT,
    altura VARCHAR(45),
    nivel INT,
    peso VARCHAR(45),
    cor_cabelo VARCHAR(9),
    cor_olho VARCHAR(9),
    cor_pele VARCHAR(9),
    deslocamento INT,
    pontos_vida INT,
    dado_vida VARCHAR(3),
    quantidade_dado INT,
    raca VARCHAR(45),
    antecedente VARCHAR(45),
    alinhamento VARCHAR(45),
    atributo_conju VARCHAR(45),
    cd_magias VARCHAR(45),
    modificador_magias INT,
    classe VARCHAR(45),
    fk_equipamento INT ,
    fk_status INT  ,
    fk_truques INT  ,
    fk_pri_circulo INT ,
    fk_seg_circulo INT ,
    fk_ter_circulo INT ,
    fk_quar_circulo INT ,
    fk_quin_circulo INT ,
    fk_sext_circulo INT,
    fk_set_circulo INT ,
    fk_oitavo_circulo INT ,
    fk_nono_circulo INT ,
    FOREIGN KEY (fk_equipamento) REFERENCES equipamento(id),
    FOREIGN KEY (fk_status) REFERENCES statusPer(id),
    FOREIGN KEY (fk_truques) REFERENCES truques(id),
    FOREIGN KEY (fk_pri_circulo) REFERENCES pri_circulo(id),
    FOREIGN KEY (fk_seg_circulo) REFERENCES seg_circulo(id),
    FOREIGN KEY (fk_ter_circulo) REFERENCES ter_circulo(id),
    FOREIGN KEY (fk_quar_circulo) REFERENCES quar_circulo(id),
    FOREIGN KEY (fk_quin_circulo) REFERENCES quin_circulo(id),
    FOREIGN KEY (fk_sext_circulo) REFERENCES sext_circulo(id),
    FOREIGN KEY (fk_set_circulo) REFERENCES set_circulo(id),
    FOREIGN KEY (fk_oitavo_circulo) REFERENCES oitavo_circulo(id),
    FOREIGN KEY (fk_nono_circulo) REFERENCES nono_circulo(id)
);