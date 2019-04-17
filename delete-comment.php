<?php
    
    include("database.php");
    
    $id = $_GET['id'];
    $post_id = $_GET['post_id'];


         $sqlDelete = "DELETE FROM comments WHERE id = $id;";
         $statementDelete = $connection->prepare($sqlDelete);
         $statementDelete->execute();
         $statementDelete->setFetchMode(PDO::FETCH_ASSOC);
     
     
         header("Location: http://localhost:8080/single-post.php?post_id=$post_id");

?> 