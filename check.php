<meta charset="utf8"
<?php
session_start();
?>
<?php

$sID = "nuk";
$sPWD = "123";

$uID = $_GET["uID"];
$uPWD = $_GET["uPWD"];

if($uID == $sID && $uPWD == $sPWD){
    $_SESSION["check"] = "Yes";
    header("Location:success.php");
}
else{
    $_SESSION["check"] = "No";
    header("Location:fail.php");
}

?>