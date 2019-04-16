<?php

    $sql = "SELECT posts.id, posts.title, posts.created_at, posts.author, posts.body
    FROM posts ORDER BY created_at DESC";

    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $posts = $statement->fetchAll();
    

?>


<?php foreach($posts as $post){ ;?>

    <div class="blog-post">

        <a href= "single-post.php?post_id=<?php echo($post['id']) ?>"><h2 class="blog-post-title"><?php echo ($post['title']); ?></h2></a>
        
        <p class="blog-post-meta"><?php echo ($post['created_at']); ?> by <a href="#"><?php echo ($post['author']); ?></a></p>
        
        <p><?php echo ($post['body']); ?></p>
    
    </div>

<?php };?>