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
        
        
        $sql = " INSERT INTO persona (nome_jogador, nome_personagem, idade, altura, 
        nivel, peso, cor_cabelo, cor_olho, cor_pele) 
        VALUE ('$Jname','$Pname','$idade','$altura','$nivel','$peso','$Cabelo','$olhos','$pele')";

        
        if ($conn->query($sql) === true) {
            echo "Novo registro criado com sucesso.";
        } else {
            echo "Erro " . $sql . '<br>' . $conn->error;
        }
        $conn->close();

    }
?>