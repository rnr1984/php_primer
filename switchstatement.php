<?php 
    $title="Switch Statement";
    include 'includes/header.php'
?>
    <h1>Switch Statement</h1>
    <?php
    $grade='A';
    Switch($grade)
    {
        case 'A':
            echo '<h3 style="color:green">YOU ARE A SUPERSTAR</h3>';
            break;
        case 'B':
            echo'<h3 style="color:green">YOU DID WELL</h3>';
            break;     
        default:
            echo '<h3 style="color:red">YOU HAVE FAILED...</h3>';
            break;
    }
    ?>
<?php require 'includes/footer.php'?>