<?php 
    $title="Index";
    include 'includes/header.php'
?>
    <h1>Hello World</h1>
    <?php
    echo'hello php!';
    echo '<br/>';
    echo 'Hello ';
    $name= 'Rajeshwari Joshi';
    echo '<h2>My name is: '.$name. '</h2>';
    ?>
    <button type="button" class="btn btn-primary">click me</button>
    <a style= "color:brown" href="http://www.heroku.com" target="_blank">Heroku.com</a>
  <?php require 'includes/footer.php'?>  