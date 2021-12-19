<?php
    $pdo = new PDO( "mysql:host = localhost;dbname=rp32ajax", "root", "root");
    $bd = "INSERT INTO text (text) VALUE (:text)";
    $statement = $pdo->prepare($bd);
    $statement->execute(['text'=>$_POST['text']]);
    
    function getPost()
{
    $db = new PDO( "mysql:host = localhost;dbname=rp32ajax", "root", "root");
    $statement = $db->prepare("SELECT * FROM text");
    $statement->execute();
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $posts;
}
        $posts = getPost();
foreach (array_reverse($posts) as $post ):
        ?>
        <div class="blog">
        <p class="blog_text"><?php echo "$post[text]"; ?></p>
        </div>
        <?php
        endforeach;
?>
      
          
    
