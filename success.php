<meta charset="utf8">
<?php
session_start();
?>
<?php

if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes"){
        echo "登入成功，3秒後進入表單";
        header("Refresh:3; url=main.php");
    }
    else{
        echo "非法進入，3秒後返回";
        header("Refresh:3; url=login.php");
    }
}
else{
    echo "非法進入，3秒後返回";
    header("Refresh:3; url=login.php");
}

?>