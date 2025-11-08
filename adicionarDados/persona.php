<?php

    include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Jname   = $_POST['Jname'];     
        $Pname   = $_POST['Pname'];   
        $idade   = $_POST['idade'];   
        $altura  = $_POST['altura'];   
        $nivel   = $_POST['nivel'];    
        $peso    = $_POST['peso'];      
        $Cabelo  = $_POST['Cabelo'];    
        $olhos   = $_POST['olhos'];     
        $pele    = $_POST['pele'];  
        $deslocamento = $_POST['deslocamento'];
        $pontosVida = $_POST['Pvida'];
        $dadoVida = $_POST['Dvida'];
        $quantidade_dado  = $_POST['QDvida'];
        $raca = $_POST['raca'];
        $antecedente = $_POST['antecedente'];
        $alinhamento = $_POST['alinhamento'];
        $atributoConju = $_POST['conjuracao'];
        $cdMagias = $_POST['CDmagias'];
        $modificadorMagias = $_POST['MODmagia'];
        $classe = $_POST['classe'];
        
        
        $sql = " INSERT INTO persona (nome_jogador, nome_personagem, idade, altura, 
        nivel, peso, cor_cabelo, cor_olho, cor_pele,deslocamento, pontos_vida, dado_vida, quantidade_dado, raca, antecedente, alinhamento, atributo_conju, cd_magias, modificador_magias, classe) VALUE ('$Jname','$Pname','$idade','$altura','$nivel','$peso','$Cabelo','$olhos','$pele','$deslocamento','$pontosVida','$dadoVida','$quantidade_dado','$raca','$antecedente','$alinhamento','$atributoConju','$cdMagias','$modificadorMagias','$classe')";

        
        if ($conn->query($sql) === true) {
            echo "Novo registro criado com sucesso.";
        } else {
            echo "Erro " . $sql . '<br>' . $conn->error;
        }
        $conn->close();

    }
