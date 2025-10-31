<?php

include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM persona where id=$id";

$result = $conn->query($sql);

$row = $result->fetch_assoc();



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="separar">
        <label for="Jname">Nome do jogador:</label><br>
        <input type="text" id="Jname" name="Jname" VALUE="<?php echo "{$row['nome_jogador']}" ?>"><br>
        <label for="Pname">Nome do personagem:</label><br>
        <input type="text" id="Pname" name="Pname" VALUE="<?php echo "{$row['nome_personagem']}" ?>"><br>
        <label for="idade">Idade do personagem:</label>
        <input type="number" id="idade" name="idade" class="caixa" VALUE="<?php echo "{$row['idade']}" ?>">
        <label for="altura">Altura do personagem:</label>
        <input type="number" id="altura" name="altura" class="caixa" VALUE="<?php echo "{$row['altura']}" ?>">
        <label for="nivel">Nível do personagem:</label>
        <input type="number" id="nivel" name="nivel" min="1" max="20" class="caixa" VALUE="<?php echo "{$row['nivel']}" ?>"><br>
    </div>
    
    <div class="separar">
        <label for="peso">Peso do personagem(Kg):</label>
        <input type="number" id="peso" name="peso" min="1" class="caixa" VALUE="<?php echo "{$row['peso']}" ?>">
        <br>
        <label for="Cabelo">Cor do cabelo :</label>
        <input type="color" id="Cabelo" name="Cabelo" VALUE="<?php echo "{$row['cor_cabelo']}" ?>"><br>
        <label for="olhos">Cor dos olhos:</label>
        <input type="color" id="olhos" name="olhos" VALUE="<?php echo "{$row['cor_olho']}" ?>"><br>
        <label for="pele">Cor da pele:</label>
        <input type="color" id="pele" name="pele" VALUE="<?php echo "{$row['cor_pele']}" ?>"><br>
    </div>
</body>
</html>

<br>
<a href="index.php">voltar</a>