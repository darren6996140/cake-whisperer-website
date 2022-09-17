<?php
include("session.php");

if ($class == 0){
    header('Location: mainpageAdmin.php');
    exit();
}

elseif ($class == 1){
    header('Location: mainpageUser.php');
    exit();
}

else{
    die();
}

?>