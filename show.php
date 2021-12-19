<?php
require_once 'send.php';
$posts = getPost();
foreach (array_reverse($posts) as $post ):
        ?>
        <div class="blog">
        <p class="blog_text"><?php echo "$post[text]"; ?></p>
        </div>
        <?php
        endforeach;
?>