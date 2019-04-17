<?php

include 'database.php';

$id = $_POST['id'];

    if(!empty($_POST['author'])){
        
        $author = $_POST['author'];
    
    } else {

        header("Location: http://localhost:8080/single-post.php?post_id=$id&required=false");
        exit;
    
    }

    if(!empty($_POST['comment'])) {
        
        $comment = $_POST['comment'];

    } else {
        
        header("Location: http://localhost:8080/single-post.php?post_id=$id&required=false");
        exit;
    
    } 
        
        $sqlInsert = "INSERT INTO comments (author, text, post_id) VALUES ('{$author}', '{$comment}', {$id});";
        
        $statementInsert = $connection->prepare($sqlInsert);
        $statementInsert->execute();
        $statementInsert->setFetchMode(PDO::FETCH_ASSOC);
        
    header("Location: http://localhost:8080/single-post.php?post_id=$id&required=true");
    
?>