<?php 
session_start();
$hello = 1;
    if(isset($_POST['cache']) && $_POST['cache'] == 1) :
        $hello ="hello";
        session_destroy();
    endif;  
    header('Location: index.php?Test=' . $hello);
?>