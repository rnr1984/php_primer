<?php 
    $title="Do while loop";
    include 'includes/header.php'
?>
    <h2>Do While Loop</h2>
    <?php
    $grade=0;
    //do while is a post condition
    do
    {
        echo '<h3>I AM LESS THAN 10 and Grade is '.$grade.' </h3>';
        $grade++;
    }while($grade<10);
    echo 'EXIT LOOP!';
?>
<?php require 'includes/footer.php'?>