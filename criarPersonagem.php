<?php
include 'adicionarDados.php';
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="scripts/TrocaDePaginas.js"></script>
    <script src="scripts/DescClasses.js"></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body class="bodyFicha">
    <header>
        <div class="tittle_headder">
            <h2>Crie seu personagem de D&D</h2>

        </div>
        <div class="sec_header">
            <button onclick="TrocarFicha()" class="linkpaginas">Inicio</button>
        </div>
    </header>

    <main class="criarFicha">
        <form action="" method="post">
            <div class="flex">

                <div>

                    <div class="caixa ">
                        <div class="separar">
                            <label for="Jname">Nome do jogador:</label><br>
                            <input type="text" id="Jname" name="Jname"><br>
                            <label for="Pname">Nome do personagem:</label><br>
                            <input type="text" id="Pname" name="Pname"><br>
                            <label for="idade">Idade do personagem:</label>
                            <input type="number" id="idade" name="idade" class="caixa">
                            <label for="altura">Altura do personagem:</label>
                            <input type="number" id="altura" name="altura" class="caixa">
                            <label for="nivel">Nível do personagem:</label>
                            <input type="number" id="nivel" name="nivel" min="1" max="20" class="caixa"><br>
                        </div>

                        <div class="separar">
                            <label for="peso">Peso do personagem(Kg):</label>
                            <input type="number" id="peso" name="peso" min="1" class="caixa">
                            <br>
                            <label for="Cabelo">Cor do cabelo :</label>
                            <input type="color" id="Cabelo" name="Cabelo"><br>
                            <label for="olhos">Cor dos olhos:</label>
                            <input type="color" id="olhos" name="olhos"><br>
                            <label for="pele">Cor da pele:</label>
                            <input type="color" id="pele" name="pele"><br>
                        </div>
                    </div>

                    <div class="caixa ">
                        <div class="separar">
                            <label for="deslocamento">Deslocamento(m)</label><br>
                            <input type="number" id="deslocamento" name="deslocamento" class="status"><br>
                            <label for="Pvida">Pontos de vida</label><br>
                            <input type="number" id="Pvida" name="Pvida" class="status"><br>
                            <label for="Dvida">Dado de vida</label><br>
                            <input type="number" id="Dvida" name="Dvida" class="status">
                        </div>

                        <div class="separar">
                            <p>Raça:</p>
                            <select name="raça" id="raça">
                                <option value="nulo">....</option>
                                <option value="Anão">Anão</option>
                                <option value="Elfo">Elfo</option>
                                <option value="Halfling">Halfling</option>
                                <option value="Humano">Humano</option>
                                <option value="Draconato">Draconato</option>
                                <option value="Gnomo">Gnomo</option>
                                <option value="meioElfo">Meio-Elfo</option>
                                <option value="meioOrc">Meio-Orc</option>
                                <option value="tielfling">Tielfling</option>
                            </select>
                            <br>
                            <label for="Antecedente">Antecedente:</label><br>
                            <input type="text" id="Antecedente" name="Antecedente">

                            <p> Alinhamento:</p>
                            <select name="alinhamento" id="alinhamento">
                                <option value="nulo">....</option>
                                <option value="LB">Leal e Bom</option>
                                <option value="NB">Neutro e Bom</option>
                                <option value="CB">Caótico e Bom</option>
                                <option value="LN">Leal e Neutro</option>
                                <option value="N">Neutro</option>
                                <option value="CN">Caótico e Neutro</option>
                                <option value="LM">Leal e Mau</option>
                                <option value="NM">Neutro e Mau</option>
                                <option value="CM">Caótico e Mal</option>
                            </select>
                        </div>

                        <div class="separar">

                            <label for="conjuração">Atributo de conjuração</label><br>
                            <input type="text" id="conjuração" name="conjuração" class="status"><br>


                            <label for="CDmagias">Cd para magias</label><br>
                            <input type="number" id="CDmagias" name="CDmagias" class="status"><br>


                            <label for="MODmagia">Modificador de magia</label><br>
                            <input type="number" id="MODmagia" name="MODmagia" class="status"><br>

                        </div>


                    </div>

                    <div class="caixa ">
                        <div class="separar">

                            <label for="Sforça">Força</label><br>
                            <input type="number" id="Sforça" name="Sforça" class="status"><br>


                            <label for="Sdestreza">Destreza</label><br>
                            <input type="number" id="Sdestreza" name="Sdestreza" class="status"><br>


                            <label for="Sconstituição">Constituição</label><br>
                            <input type="number" id="Sconstituição" name="Sconstituição" class="status"><br>

                        </div>

                        <div class="separar">
                            <label for="SInteligência">Inteligência</label><br>
                            <input type="number" id="SInteligência" name="SInteligência" class="status"><br>


                            <label for="SSabedoria">Sabedoria</label><br>
                            <input type="number" id="SSabedoria" name="SSabedoria" class="status"><br>


                            <label for="SCarisma">Carisma</label><br>
                            <input type="number" id="SCarisma" name="SCarisma" class="status"><br>
                        </div>

                        <div class="separar">
                            <p>Selecione suas armas:</p>

                            <select name="armas1" id="armas1">
                                <option value="nulo">....</option>
                                <option value="adaga">Adaga 1d4</option>
                                <option value="azagaia">Azagaia 1d6</option>
                                <option value="bordao">Bordão 1d6</option>
                                <option value="clava_grande">Clava Grande 1d8</option>
                                <option value="foice_curta">Foice Curta 1d4</option>
                                <option value="lanca">Lança 1d6</option>
                                <option value="maca">Maça 1d6</option>
                                <option value="machadinha">Machadinha 1d6</option>
                                <option value="martelo_leve">Martelo Leve 1d4</option>
                                <option value="porrete">Porrete 1d4</option>
                                <option value="arco_curto">Arco Curto 1d6</option>
                                <option value="besta_leve">Besta Leve 1d8</option>
                                <option value="dardo">Dardo 1d4</option>
                                <option value="funda">Funda 1d4</option>
                                <option value="alabarda">Alabarda 1d10</option>
                                <option value="cimitarra">Cimitarra 1d6</option>
                                <option value="chicote">Chicote 1d4</option>
                                <option value="espada_curta">Espada Curta 1d6</option>
                                <option value="espada_grande">Espada Grande 2d6</option>
                                <option value="espada_longa">Espada Longa 1d8</option>
                                <option value="glaive">Glaive 1d10</option>
                                <option value="lanca_de_montaria">Lança de Montaria 1d12</option>
                                <option value="lanca_longa">Lança Longa 1d10</option>
                                <option value="maca_estrela">Maça Estrela 1d8</option>
                                <option value="machado_grande">Machado Grande 1d12</option>
                                <option value="machado_de_batalha">Machado de Batalha 1d8</option>
                                <option value="malho">Malho 2d6</option>
                                <option value="mangual">Mangual 1d8</option>
                                <option value="martelo_de_guerra">Martelo de Guerra 1d8</option>
                                <option value="picareta_de_guerra">Picareta de Guerra 1d8</option>
                                <option value="rapieira">Rapieira 1d8</option>
                                <option value="tridente">Tridente 1d6</option>
                                <option value="arco_longo">Arco Longo 1d8</option>
                                <option value="besta_de_mao">Besta de Mão 1d6</option>
                                <option value="besta_pesada">Besta Pesada 1d10</option>
                                <option value="zarabatana">Zarabatana 1d4</option>
                            </select><br>
                            <select name="armas2" id="armas2">
                                <option value="nulo">....</option>
                                <option value="adaga">Adaga 1d4</option>
                                <option value="azagaia">Azagaia 1d6</option>
                                <option value="bordao">Bordão 1d6</option>
                                <option value="clava_grande">Clava Grande 1d8</option>
                                <option value="foice_curta">Foice Curta 1d4</option>
                                <option value="lanca">Lança 1d6</option>
                                <option value="maca">Maça 1d6</option>
                                <option value="machadinha">Machadinha 1d6</option>
                                <option value="martelo_leve">Martelo Leve 1d4</option>
                                <option value="porrete">Porrete 1d4</option>
                                <option value="arco_curto">Arco Curto 1d6</option>
                                <option value="besta_leve">Besta Leve 1d8</option>
                                <option value="dardo">Dardo 1d4</option>
                                <option value="funda">Funda 1d4</option>
                                <option value="alabarda">Alabarda 1d10</option>
                                <option value="cimitarra">Cimitarra 1d6</option>
                                <option value="chicote">Chicote 1d4</option>
                                <option value="espada_curta">Espada Curta 1d6</option>
                                <option value="espada_grande">Espada Grande 2d6</option>
                                <option value="espada_longa">Espada Longa 1d8</option>
                                <option value="glaive">Glaive 1d10</option>
                                <option value="lanca_de_montaria">Lança de Montaria 1d12</option>
                                <option value="lanca_longa">Lança Longa 1d10</option>
                                <option value="maca_estrela">Maça Estrela 1d8</option>
                                <option value="machado_grande">Machado Grande 1d12</option>
                                <option value="machado_de_batalha">Machado de Batalha 1d8</option>
                                <option value="malho">Malho 2d6</option>
                                <option value="mangual">Mangual 1d8</option>
                                <option value="martelo_de_guerra">Martelo de Guerra 1d8</option>
                                <option value="picareta_de_guerra">Picareta de Guerra 1d8</option>
                                <option value="rapieira">Rapieira 1d8</option>
                                <option value="tridente">Tridente 1d6</option>
                                <option value="arco_longo">Arco Longo 1d8</option>
                                <option value="besta_de_mao">Besta de Mão 1d6</option>
                                <option value="besta_pesada">Besta Pesada 1d10</option>
                                <option value="zarabatana">Zarabatana 1d4</option>
                            </select><br>
                            <select name="armas3" id="armas3">
                                <option value="nulo">....</option>
                                <option value="adaga">Adaga 1d4</option>
                                <option value="azagaia">Azagaia 1d6</option>
                                <option value="bordao">Bordão 1d6</option>
                                <option value="clava_grande">Clava Grande 1d8</option>
                                <option value="foice_curta">Foice Curta 1d4</option>
                                <option value="lanca">Lança 1d6</option>
                                <option value="maca">Maça 1d6</option>
                                <option value="machadinha">Machadinha 1d6</option>
                                <option value="martelo_leve">Martelo Leve 1d4</option>
                                <option value="porrete">Porrete 1d4</option>
                                <option value="arco_curto">Arco Curto 1d6</option>
                                <option value="besta_leve">Besta Leve 1d8</option>
                                <option value="dardo">Dardo 1d4</option>
                                <option value="funda">Funda 1d4</option>
                                <option value="alabarda">Alabarda 1d10</option>
                                <option value="cimitarra">Cimitarra 1d6</option>
                                <option value="chicote">Chicote 1d4</option>
                                <option value="espada_curta">Espada Curta 1d6</option>
                                <option value="espada_grande">Espada Grande 2d6</option>
                                <option value="espada_longa">Espada Longa 1d8</option>
                                <option value="glaive">Glaive 1d10</option>
                                <option value="lanca_de_montaria">Lança de Montaria 1d12</option>
                                <option value="lanca_longa">Lança Longa 1d10</option>
                                <option value="maca_estrela">Maça Estrela 1d8</option>
                                <option value="machado_grande">Machado Grande 1d12</option>
                                <option value="machado_de_batalha">Machado de Batalha 1d8</option>
                                <option value="malho">Malho 2d6</option>
                                <option value="mangual">Mangual 1d8</option>
                                <option value="martelo_de_guerra">Martelo de Guerra 1d8</option>
                                <option value="picareta_de_guerra">Picareta de Guerra 1d8</option>
                                <option value="rapieira">Rapieira 1d8</option>
                                <option value="tridente">Tridente 1d6</option>
                                <option value="arco_longo">Arco Longo 1d8</option>
                                <option value="besta_de_mao">Besta de Mão 1d6</option>
                                <option value="besta_pesada">Besta Pesada 1d10</option>
                                <option value="zarabatana">Zarabatana 1d4</option>
                            </select>
                            <p>Escolha sua armadura</p>

                            <select id="armaduras" name="armaduras">
                                <option value="nulo">....</option>
                                <option value="acolchoada">Acolchoada (11 + Des)</option>
                                <option value="couro">Couro (11 + Des)</option>
                                <option value="couro_batido">Couro Batido (12 + Des)</option>
                                <option value="gibao_de_peles">Gibão de Peles (12 + Des)</option>
                                <option value="camisao_de_malha">Camisão de Malha (13 + Des)</option>
                                <option value="brunea">Brunea (14 + Des)</option>
                                <option value="peitoral">Peitoral (14 + Des)</option>
                                <option value="meia_armadura">Meia-Armadura (15 + Des)</option>
                                <option value="cota_de_aneis">Cota de anéis (14)</option>
                                <option value="cota_de_malha">Cota de malha (16)</option>
                                <option value="cota_de_talas">Cota de talas (17)</option>
                                <option value="placas">Placas (18)</option>

                            </select>

                            <p>Usa escudo?</p>
                            <input type="radio" id="sim" name="escudo" value="sim">
                            <label for="sim"> Sim</label>
                            <input type="radio" id="não" name="escudo" value="não">
                            <label for="não"> Não</label><br>
                        </div>

                    </div>

                    <div class="caixa ">
                        <div class="separar">
                            <p>Perícias com proficiência</p>

                            <input type="checkbox" name="pericia" value="Persuasão">
                            <label for="Persuasão">Persuasão</label><br>

                            <input type="checkbox" name="pericia" value="Prestidigitação">
                            <label for="Prestidigitação">Prestidigitação</label><br>

                            <input type="checkbox" name="pericia" value="Religião">
                            <label for="Religião">Religião</label><br>

                            <input type="checkbox" name="pericia" value="Sobrevivência">
                            <label for="Sobrevivência">Sobrevivência</label><br>

                            <input type="checkbox" name="pericia" value="Percepção">
                            <label for="Percepção">Percepção</label><br>

                            <input type="checkbox" name="pericia" value="Intuição">
                            <label for="Intuição">Intuição</label><br>

                            <input type="checkbox" name="pericia" value="Investigação">
                            <label for="Investigação">Investigação</label><br>

                            <input type="checkbox" name="pericia" value="LidarcomAnimais">
                            <label for="LidarcomAnimais">Lidar com Animais</label><br>

                            <input type="checkbox" name="pericia" value="Medicina">
                            <label for="Medicina">Medicina</label><br>

                            <input type="checkbox" name="pericia" value="Natureza">
                            <label for="Natureza">Natureza</label><br>

                            <input type="checkbox" name="pericia" value="Intimidação">
                            <label for="Intimidação">Intimidação</label><br>

                            <input type="checkbox" name="pericia" value="História">
                            <label for="História">História</label><br>

                            <input type="checkbox" name="pericia" value="Furtividade">
                            <label for="Furtividade">Furtividade</label><br>

                            <input type="checkbox" name="pericia" value="Enganação">
                            <label for="Enganação">Enganação</label><br>

                            <input type="checkbox" name="pericia" value="Acrobacia">
                            <label for="Acrobacia">Acrobacia</label><br>

                            <input type="checkbox" name="pericia" value="Arcanismo">
                            <label for="Arcanismo">Arcanismo</label><br>

                            <input type="checkbox" name="pericia" value="Atletismo">
                            <label for="Atletismo">Atletismo</label><br>

                            <input type="checkbox" name="pericia" value="Atuação">
                            <label for="Atuação">Atuação</label><br>


                        </div>
                        <div class="separar">
                            <p>Selecione uma classe:</p>

                            <input type="radio" id="Bárbaro" name="classe" value="Bárbaro">
                            <label for="Bárbaro">Bárbaro</label><br>
                            <input type="radio" id="Bardo" name="classe" value="Bardo">
                            <label for="Bardo">Bardo</label><br>
                            <input type="radio" id="Bruxo" name="classe" value="Bruxo">
                            <label for="Bruxo">Bruxo</label><br>
                            <input type="radio" id="Clérigo" name="classe" value="Clérigo">
                            <label for="Clérigo">Clérigo</label><br>
                            <input type="radio" id="Druida" name="classe" value="Druida">
                            <label for="Druida">Druida</label><br>
                            <input type="radio" id="Feiticeiro" name="classe" value="Feiticeiro">
                            <label for="Feiticeiro">Feiticeiro</label><br>
                            <input type="radio" id="Guerreiro" name="classe" value="Guerreiro">
                            <label for="Guerreiro">Guerreiro</label><br>
                            <input type="radio" id="Ladino" name="classe" value="Ladino">
                            <label for="Ladino">Ladino</label><br>
                            <input type="radio" id="Mago" name="classe" value="Mago">
                            <label for="Mago">Mago</label><br>
                            <input type="radio" id="Paladino" name="classe" value="Paladino">
                            <label for="Paladino">Paladino</label><br>
                            <input type="radio" id="Patrulheiro" name="classe" value="Patrulheiro">
                            <label for="Patrulheiro">Patrulheiro</label><br>
                        </div>

                        <div class="separar">
                            <p>Salvaguardas com proficiência</p>

                            <input type="checkbox" id="Força" name="salvaguarda" value="Força">
                            <label for="Força"> Força</label><br>

                            <input type="checkbox" id="Destreza" name="salvaguarda" value="Destreza">
                            <label for="Destreza"> Destreza</label><br>

                            <input type="checkbox" id="Constituição" name="salvaguarda" value="Constituição">
                            <label for="Constituição"> Constituição</label><br>

                            <input type="checkbox" id="Inteligencia" name="salvaguarda" value="Inteligencia">
                            <label for="Inteligencia"> Inteligencia</label><br>

                            <input type="checkbox" id="Sabedoria" name="salvaguarda" value="Sabedoria">
                            <label for="Sabedoria"> Sabedoria</label><br>

                            <input type="checkbox" id="Carisma" name="salvaguarda" value="Carisma">
                            <label for="Carisma"> Carisma</label><br>

                        </div>



                    </div>

                </div>

                <div>

                    <div class="containerMagias">
                        <div class="boxMagias">
                            <div class="NomeMagia">
                                <p>TRUQUES</p>
                            </div>
                            <div>
                                <input type="text" class="inputMagia" name="magia1"><br>
                                <input type="text" class="inputMagia" name="magia2"><br>
                                <input type="text" class="inputMagia" name="magia3"><br>
                                <input type="text" class="inputMagia" name="magia4"><br>
                                <input type="text" class="inputMagia" name="magia5"><br>
                                <input type="text" class="inputMagia" name="magia6"><br>
                                <input type="text" class="inputMagia" name="magia7"><br>
                                <input type="text" class="inputMagia" name="magia8">
                            </div>
                        </div>

                        <!-- Bloco 2 -->
                        <div class="boxMagias">
                            <div class="NomeMagia">
                                <p>Círculo 1</p>
                            </div>
                            <div>
                                <input type="text" class="inputMagia" name="magia9"><br>
                                <input type="text" class="inputMagia" name="magia10"><br>
                                <input type="text" class="inputMagia" name="magia11"><br>
                                <input type="text" class="inputMagia" name="magia12"><br>
                                <input type="text" class="inputMagia" name="magia13"><br>
                                <input type="text" class="inputMagia" name="magia14"><br>
                                <input type="text" class="inputMagia" name="magia15"><br>
                                <input type="text" class="inputMagia" name="magia16">
                            </div>
                        </div>

                        <!-- Bloco 3 -->
                        <div class="boxMagias">
                            <div class="NomeMagia">
                                <p>Círculo 2</p>
                            </div>
                            <div>
                                <input type="text" class="inputMagia" name="magia17"><br>
                                <input type="text" class="inputMagia" name="magia18"><br>
                                <input type="text" class="inputMagia" name="magia19"><br>
                                <input type="text" class="inputMagia" name="magia20"><br>
                                <input type="text" class="inputMagia" name="magia21"><br>
                                <input type="text" class="inputMagia" name="magia22"><br>
                                <input type="text" class="inputMagia" name="magia23"><br>
                                <input type="text" class="inputMagia" name="magia24">
                            </div>
                        </div>

                        <!-- Bloco 4 -->
                        <div class="boxMagias">
                            <div class="NomeMagia">
                                <p>Círculo 3</p>
                            </div>
                            <div>
                                <input type="text" class="inputMagia" name="magia25"><br>
                                <input type="text" class="inputMagia" name="magia26"><br>
                                <input type="text" class="inputMagia" name="magia27"><br>
                                <input type="text" class="inputMagia" name="magia28"><br>
                                <input type="text" class="inputMagia" name="magia29"><br>
                                <input type="text" class="inputMagia" name="magia30"><br>
                                <input type="text" class="inputMagia" name="magia31"><br>
                                <input type="text" class="inputMagia" name="magia32">
                            </div>
                        </div>

                        <!-- Bloco 5 -->
                        <div class="boxMagias">
                            <div class="NomeMagia">
                                <p>Círculo 4</p>
                            </div>
                            <div>
                                <input type="text" class="inputMagia" name="magia33"><br>
                                <input type="text" class="inputMagia" name="magia34"><br>
                                <input type="text" class="inputMagia" name="magia35"><br>
                                <input type="text" class="inputMagia" name="magia36"><br>
                                <input type="text" class="inputMagia" name="magia37"><br>
                                <input type="text" class="inputMagia" name="magia38"><br>
                                <input type="text" class="inputMagia" name="magia39"><br>
                                <input type="text" class="inputMagia" name="magia40">
                            </div>
                        </div>

                        <!-- Bloco 6 -->
                        <div class="boxMagias">
                            <div class="NomeMagia">
                                <p>Círculo 5</p>
                            </div>
                            <div>
                                <input type="text" class="inputMagia" name="magia41"><br>
                                <input type="text" class="inputMagia" name="magia42"><br>
                                <input type="text" class="inputMagia" name="magia43"><br>
                                <input type="text" class="inputMagia" name="magia44"><br>
                                <input type="text" class="inputMagia" name="magia45"><br>
                                <input type="text" class="inputMagia" name="magia46"><br>
                                <input type="text" class="inputMagia" name="magia47"><br>
                                <input type="text" class="inputMagia" name="magia48">
                            </div>
                        </div>

                        <!-- Bloco 7 -->
                        <div class="boxMagias">
                            <div class="NomeMagia">
                                <p>Círculo 6</p>
                            </div>
                            <div>
                                <input type="text" class="inputMagia" name="magia49"><br>
                                <input type="text" class="inputMagia" name="magia50"><br>
                                <input type="text" class="inputMagia" name="magia51"><br>
                                <input type="text" class="inputMagia" name="magia52"><br>
                                <input type="text" class="inputMagia" name="magia53"><br>
                                <input type="text" class="inputMagia" name="magia54"><br>
                                <input type="text" class="inputMagia" name="magia55"><br>
                                <input type="text" class="inputMagia" name="magia56">
                            </div>
                        </div>

                        <!-- Bloco 8 -->
                        <div class="boxMagias">
                            <div class="NomeMagia">
                                <p>Círculo 7</p>
                            </div>
                            <div>
                                <input type="text" class="inputMagia" name="magia57"><br>
                                <input type="text" class="inputMagia" name="magia58"><br>
                                <input type="text" class="inputMagia" name="magia59"><br>
                                <input type="text" class="inputMagia" name="magia60"><br>
                                <input type="text" class="inputMagia" name="magia61"><br>
                                <input type="text" class="inputMagia" name="magia62"><br>
                                <input type="text" class="inputMagia" name="magia63"><br>
                                <input type="text" class="inputMagia" name="magia64">
                            </div>
                        </div>

                        <!-- Bloco 9 -->
                        <div class="boxMagias">
                            <div class="NomeMagia">
                                <p>Círculo 8</p>
                            </div>
                            <div>
                                <input type="text" class="inputMagia" name="magia65"><br>
                                <input type="text" class="inputMagia" name="magia66"><br>
                                <input type="text" class="inputMagia" name="magia67"><br>
                                <input type="text" class="inputMagia" name="magia68"><br>
                                <input type="text" class="inputMagia" name="magia69"><br>
                                <input type="text" class="inputMagia" name="magia70"><br>
                                <input type="text" class="inputMagia" name="magia71"><br>
                                <input type="text" class="inputMagia" name="magia72">
                            </div>
                        </div>

                        <div class="boxMagias">
                            <div class="NomeMagia">
                                <p>Círculo 9</p>
                            </div>
                            <div>
                                <input type="text" class="inputMagia" name="magia73"><br>
                                <input type="text" class="inputMagia" name="magia73"><br>
                                <input type="text" class="inputMagia" name="magia75"><br>
                                <input type="text" class="inputMagia" name="magia76"><br>
                                <input type="text" class="inputMagia" name="magia77"><br>
                                <input type="text" class="inputMagia" name="magia78"><br>
                                <input type="text" class="inputMagia" name="magia79"><br>
                                <input type="text" class="inputMagia" name="magia80">
                            </div>
                        </div>
                    </div>


                    <div class="ContainerClasseDesc">
                        <select name="classeDesc" id="classeDesc" onchange="mostrarclasse()">
                            <option value="">...</option>
                            <option value="infoBarbaro">Bárbaro</option>
                            <option value="infoGuerreiro">Guerreiro</option>
                        </select>



                        <iframe src="Descricao_classes/barbaro.html" class="ContainerClasse" id="infoBarbaro"></iframe>
                        <iframe src="Descricao_classes/guerreiro.html" class="ContainerClasse" id="infoGuerreiro"></iframe>

                    </div>

                </div>


            </div>



        </form>

    </main>
</body>

</html>