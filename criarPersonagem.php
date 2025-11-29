<?php
include 'adicionarDados/persona.php';
include 'adicionarDados/magias.php';
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
                            <input type="text" id="Dvida" name="Dvida" class="status">
                            <label for="QDvida">Quantidade Dado de vida</label><br>
                            <input type="text" id="QDvida" name="QDvida" class="status">
                        </div>

                        <div class="separar">
                            <p>Raça:</p>
                            <select name="raca" id="raca">
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
                            <label for="antecedente">Antecedente:</label><br>
                            <input type="text" id="antecedente" name="antecedente">

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

                            <label for="conjuracao">Atributo de conjuração</label><br>
                            <input type="text" id="conjuracao" name="conjuracao" class="status"><br>


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
                                <input type="text" class="inputMagia" name="magia0"><br>
                                <input type="text" class="inputMagia" name="magia1"><br>
                                <input type="text" class="inputMagia" name="magia2"><br>
                                <input type="text" class="inputMagia" name="magia3"><br>
                                <input type="text" class="inputMagia" name="magia4"><br>
                                <input type="text" class="inputMagia" name="magia5"><br>
                                <input type="text" class="inputMagia" name="magia6"><br>
                                <input type="text" class="inputMagia" name="magia7">
                            </div>
                        </div>
                        <?php
                        $circulo = 1;
                        $numMagia = 8;
                        for ($i = 1; $i < 10; $i++) {

                            echo "
                                <div class='boxMagias'>
                                    <div class='NomeMagia'>
                                        <p>Círculo $circulo</p>
                                    </div>
                                    <div>
                                    ";
                            echo "<input type='text' class='inputMagia' name='magia$numMagia'><br>";
                            $numMagia++;
                            echo "<input type='text' class='inputMagia' name='magia$numMagia'><br>";
                            $numMagia++;
                            echo "<input type='text' class='inputMagia' name='magia$numMagia'><br>";
                            $numMagia++;
                            echo "<input type='text' class='inputMagia' name='magia$numMagia'><br>";
                            $numMagia++;
                            echo "<input type='text' class='inputMagia' name='magia$numMagia'><br>";
                            $numMagia++;
                            echo "<input type='text' class='inputMagia' name='magia$numMagia'><br>";
                            $numMagia++;
                            echo "<input type='text' class='inputMagia' name='magia$numMagia'><br>";
                            $numMagia++;
                            echo " <input type='text' class='inputMagia' name='magia$numMagia'>
                                    </div>
                                </div>";

                            $circulo++;
                            $numMagia++;
                        }
                        ?>
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


                <button type="subimit">enviar</button>
        </form>

    </main>
</body>

</html>