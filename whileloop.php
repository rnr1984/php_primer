<?php 
    $title="While Loop";
    include 'includes/header.php'
?>
    <h1>While Loop</h1>
    <?php
    $grade=0;
    //while is a pre condition.
    while($grade<10)
    {
        echo '<h3>I AM LESS THAN 10 and Grade is '.$grade.' </h3>';
        $grade++;
    }
    echo 'EXIT LOOP';
?>
<?php require 'includes/footer.php'?>