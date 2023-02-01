<?php 
    $title="User Defined Function";
    include 'includes/header.php'
?>
    <h1>User defined functions</h1>
    <?php
       /* defining a function */
      function writeMessage()
      {
        echo "You are really nice person. Have a nice time.<br/>";
      }

      /* calling a function */
      writeMessage();
      /* defining function with parameters */
      function addFunction($num1,$num2)
      {
       $sum=$num1+$num2;
       echo 'Sum of '.$num1.' and '.$num2.' is '.$sum. '.<br/>';
      }
      function changeNum(&$num2,&$num3)
      {
        $num2=$num2+10;
        $num3=$num3+20;
      }

      function returnProduct($num1,$num2)
      {
        $prod=$num1*$num2;
        return $prod;
      }
      /* calling function */
      $num2=500;
      $num3=300;
      addFunction (10,5);
      addFunction($num2,$num3);
      changeNum($num2,$num3);
      echo $num2.' and '.$num3. '<br/>';
      $return_value=returnProduct(10,10);
      echo 'Return Function Value is '.$return_value.'.</br>';
?>
<?php require 'includes/footer.php'?>