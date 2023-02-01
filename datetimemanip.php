<?php 
    $title="Date and Time";
    include 'includes/header.php'
?>
    <h1>Date Time manipulation</h1>
    <?php
    $datenow=getdate();
    echo "Today's date :" . $datenow['mday'] .'/'. $datenow['mon']. '/'.$datenow['year'];
    echo '</br>Time :'.time();
    ?>
<?php require 'includes/footer.php'?>