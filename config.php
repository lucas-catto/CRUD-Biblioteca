
<?php
    $host     = "localhost";
    $dbname   = "Biblioteca";
    $user     = "root";
    $password = "";
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
    }
    catch (PDOException $error){
        echo "<p>Erro ao conectar ao Bancoi de Dados. Erro: " . $error . "</p>";
    }
?>
