<!DOCTYPE html>
<html>

<?php
require 'vendor/autoload.php';
$Essence = new Essence\Essence();
$Media = $Essence->extract('https://www.youtube.com/watch?v=XA0Mcb8cWd0');
?>

<article>
    <header>
        <h1><?php echo $Media->title; ?></h1>
        <p>By <?php echo $Media->authorName; ?></p>
        <br/>
        <p>URL: <?php echo $Media->url; ?></p>
        
    </header>

    <div class="player">
        <?php echo $Media->html; ?>
    </div>
</article>

</html>