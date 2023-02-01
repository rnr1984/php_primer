<?php 
    $title="String Manipulation";
    include 'includes/header.php'
?>
    <h1>String Manipulation</h1>
    <?php
    $phrase1="I love u";
    $phrase2="and I care for you";
    $name="rajeshwari joshi";
    echo $phrase1. " named Tushar Joshi " .$phrase2;
    echo '<br/>';
    echo 'Uppercase first letter '.ucfirst($name). '<br/>';
    echo 'Uppercase first letter of each words '.ucwords($name). '<br/>';
    echo 'Uppercase  '.strtoupper($name). '<br/>';
    echo 'Lowercase  '.strtolower($name). '<br/>';
    echo 'Lowercase  '.strtolower("THIS WAS ALL UPPERCASE."). '<br/>';
    echo 'Repeat String '.str_repeat('a',10).'<br/>';
    echo 'Repeat String '.str_repeat($name,3).'<br/>';
    echo 'Repeat String - Nested function '.strtoupper(str_repeat('a',10)).'<br/>';
    echo 'Get a Sub String '.substr($name,5,10). '</br>';
    echo 'Get a Psition of String '.strpos($name,'w'). '</br>';
    echo 'Find character "r": '.strchr($name,'r').'</br>';
    echo 'Find character "w": '.strchr($name,'w').'</br>';
    echo 'Find character "j": '.strchr($name,'j').'</br>';
    echo 'Find length of string: '.strlen($name).'</br>';
    echo 'without Trim : '. "A". " B C D ". "E" .'</br>';
    echo 'Trim : '."A". trim (" B C D "). "E" .'</br>';
    echo 'Trim left spaces: '."A". ltrim (" B C D "). "E" .'</br>';
    echo 'Trim right spaces: '."A". rtrim (" B C D "). "E" .'</br>';
    echo 'replace string with another : '.str_replace('care for','like',$phrase2).'</br>';
?>
<?php require 'includes/footer.php'?>