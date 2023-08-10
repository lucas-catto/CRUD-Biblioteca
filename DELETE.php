
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DELETE</title>
        <link rel="stylesheet" href="./_root/CSS/DELETE/style.css">
        <link rel="stylesheet" href="./_root/CONTAINER/style.css">
        <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <?php require_once "./classes/config.php"; ?>
        <?php require_once "./_root/READER/index.php"; ?>

        <div class="container">
            <?php
                $sql = $pdo->prepare("SELECT * FROM Livro");
                $sql->execute();

                echo "<table class='table'>";
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th>Id</th>";
                            echo "<th>Nome do Livro</th>";
                            echo "<th>IdAutor</th>";
                            echo "<th>Ano</th>";
                            echo "<th>Descrição</th>";
                        echo "</tr>";
                    echo "</thead>";
                
                    foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $view) {
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th>" . $view['Id']        . "</th>";
                                echo "<th>" . $view['NomeLivro'] . "</th>";
                                echo "<th>" . $view["IdAutor"]   . "</th>";
                                echo "<th>" . $view["Ano"]       . "</th>";
                                echo "<th>" . $view["Descricao"] . "</th>";
                            echo "</tr>";
                        echo "</thead>";
                    }
                echo "</table>";
            ?>
        </div>

        <script src="./Bootstrap/js/bootstrap.min.js"></script>
        <?php require_once "./_root/FOOTER/index.php"; ?>
    </body>
</html>
