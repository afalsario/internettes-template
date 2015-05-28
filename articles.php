<?php include 'masterindex.php' ?>
<?php
echo $header . $nav . $content_before;
?>

<h1>My Articles</h1>
<div class="article-list large-8 large-centered columns">
    <a href="article.php">This is an article.</a>
    <p>Author, Publication</p>
    <a href="article.php">This is the same article</a>
    <p>Author, Publication</p>
</div>



<?php echo $content_after; ?>

<?php echo $footer; ?>
