<?php 
    $title="If Statement";
    include 'includes/header.php'
?>
<h1>If statement</h1>
    <?php
    echo '<h2>If statement</h2>';
    $grade=50;
    if($grade>=50)
    {
        echo '<h3 style="color:green">YOU HAVE PASSED.</h3>';
    }
    else
    {
    echo '<h3 style="color:red">YOU HAVE FAILED.</h3>';
    }
?>
<?php require 'includes/footer.php'?>