
<style>


    html, body{
        width:  100%;
        height: 100%;
        background-color: #1E90FF;
    }

    .container{
        width:            100%;
        max-width:        1200px;
        height:           100%;
        margin:           auto;
        display:          flex;
        background-color: #1A1E66;
        flex-wrap:        wrap;
        justify-content:  center;
        align-items:      center;
    }

    .card{
        margin:           10px 10px 10px 0;
        padding:          10px;
        width:            250px;
        height:           180px;
        background-color: #6959CD;
        border:           2px solid white;
        border-radius:    16px;
    }

</style>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>READ</title>
        <link rel="stylesheet" href="./_root/CSS/READ/style.css">
        <link rel="stylesheet" href="./_root/CONTAINER/style.css">
    </head>
    <body>
        <?php require_once "./_root/READER/index.php"; ?>

        <div class="container"></div>

        <?php require_once "./_root/FOOTER/index.php"; ?>

        
        
        
    </body>
</html>



    <!-- <div class="container">

        <?php
            // require "./classes/config.php";

            // $sql = $pdo->prepare("SELECT Autor.NomeAutor, Livro.Id, Livro.NomeLivro, Livro.Ano, Livro.Descricao FROM Autor INNER JOIN Livro ON Autor.Id = Livro.IdAutor;");
            // $sql->execute();
            // $views = $sql->fetchAll(PDO::FETCH_ASSOC);

            // foreach ($views as $view) {
            //     echo "<div class='card'>";
            //         echo "Id: "        . $view["Id"]        . "</br>";
            //         echo "Nome: "      . $view["NomeLivro"] . "</br>";
            //         echo "Autor: "     . $view["NomeAutor"]   . "</br>";
            //         echo "Ano: "       . $view["Ano"]       . "</br>";
            //         echo "Descrição: " . $view["Descricao"] . "</br>";
            //     echo "</div>";
            // }

        ?>
    </div> -->