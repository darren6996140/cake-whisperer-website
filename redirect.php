<?php
include("session.php");

if ($class == 1){
    header('Location: mainpageAdmin.php');
    exit();
}

elseif ($class == 2){
    header('Location: mainpageUser.php');
    exit();
}

else{
    die();
}

?>