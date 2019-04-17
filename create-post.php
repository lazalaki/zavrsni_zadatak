<?php
     include("database.php");
     if(!empty($_POST['author'])){
        $author = $_POST['author'];
    } else{
        header("Location: http://localhost:8080/create.php?required=false");
        exit;
    }
     if(!empty($_POST['title'])){
        $title = $_POST['title'];
    } else {
        header("Location: http://localhost:8080/create.php?required=false");
        exit;
    } 
    if(!empty($_POST['body'])){
        $body = $_POST['body'];
    } else {
        header("Location: http://localhost:8080/create.php?required=false");
        exit;
    } 
        
    $date = date('Y-m-d H:i:s');
         $sqlCreate = "INSERT INTO posts (title, body, author, created_at) VALUES ('{$title}', '{$body}', '{$author}', '{$date}');";
         $statementCreate = $connection->prepare($sqlCreate);
         $statementCreate->execute();
         $statementCreate->setFetchMode(PDO::FETCH_ASSOC);
     header("Location: http://localhost:8080/index.php");
?> 