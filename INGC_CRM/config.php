
<?php

session_start();


if(isset($_SESSION['id']))
{
//    sdfkjsldk
    
}elseif(isset($_GET['eid'])){
// get employee id
}
else{
    header("location: login.php");
}
?>