<?php
    $pdo = new PDO( "mysql:host = localhost;dbname=rp32ajax", "root", "root");
    $bd = "INSERT INTO text (text) VALUE (:text)";
    $statement = $pdo->prepare($bd);
    $statement->execute(['text'=>$_POST['text']])
    ?>