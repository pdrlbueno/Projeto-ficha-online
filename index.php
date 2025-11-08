
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="scripts/TrocaDePaginas.js"></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body class="ficha">
    <header>
        <div class="tittle_headder">
            <h2>Crie seu personagem de D&D</h2>

        </div>
       
    </header>
    <main >
        <div class="criarPersonagem">

            <p>Novo personagem</p><br>
            <div class="buttonAdi">
                <a href="criarPersonagem.php"  >+</a>
            </div>
        </div>

        <?php

            include 'db.php';

            $sql = "SELECT * FROM persona";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            echo"
            <div class='criarPersonagem'>

            <p>{$row['nome_personagem']} </p><br>
            <div class='buttonAdi'>
            <a href='verPersonagem.php?id={$row['id']}' >Editar<a>
            </div>
            </div>";
            
              
            }
            }

            $conn -> close();
            
           
        ?>
       
    </main>
</body>

</html>