<?php 
    $title="Array";
    include 'includes/header.php'
?>
    <h1>Array</h1>
    <?php
    $Number=array(1,2,3,4,5,6,7,8,9,10);
    echo "$Number[2]";
    $size=count($Number);
    echo"</br>Size of Array is: $size";
    $num=0;
    while ($num<10)
    {
        echo "</br>Number is: $Number[$num]";
        $num++;
    }
    echo '</br>EXIT LOOP!';
    ?>
<?php require 'includes/footer.php'?>