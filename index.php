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
            <button onclick="CriarFicha()" class="buttonAdi"><h1 >+</h1></button>
        </div>

        <?php

            include 'db.php';

            $sql = "SELECT * FROM persona";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            echo"
            <div class='criarPersonagem'>
            <p>{$row['nome_jogador']} </p><br>
            <button onclick='CriarFicha()' class='buttonAdi'><h1 >+</h1></button>
            </div>";
              
            }
            }

            $conn -> close();

           
        ?>
    </main>
</body>

</html>