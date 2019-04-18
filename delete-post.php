<?php
     
     include("database.php");

    $id = $_GET['id'];
         $sqlDeletePost = "DELETE FROM posts WHERE id = $id ;";
         $statementDeletePost = $connection->prepare($sqlDeletePost);
         $statementDeletePost->execute();
         $statementDeletePost->setFetchMode(PDO::FETCH_ASSOC);

     header("Location: http://localhost:8080/index.php");

?>