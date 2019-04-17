<?php
    $sql = "SELECT posts.id, posts.title, posts.created_at, posts.author, posts.body
    FROM posts ORDER BY created_at DESC 
    LIMIT 5";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $posts = $statement->fetchAll();
?>
<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>Latest posts</h4>
        <ul>
            <?php foreach($posts as $post){ ;?>
                <li>
                    <a href="single-post.php?post_id=<?php echo($post['id']) ?>"><p><?php echo ($post['title']); ?><p></a>
                </li>
            <?php } ;?>
        </ul>
    </div>
            
</aside>