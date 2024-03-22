<meta charset="utf8">
<?php
$sName = $_POST["sName"];
echo "你的名字:".$sName."<br/>";
$sSNumber = $_POST["sSNumber"];
echo "你的學號:".$sSNumber."<br/>";
$sEmail = $_POST["sEmail"];
echo "你的Email:".$sEmail."<br/>";
$sGrade = $_POST["sGrade"];
echo "你的年級:".$sGrade."<br/>";
$sInterest = $_POST["sInterest"];

echo "你的興趣:";
foreach($sInterest as $vaule){
    echo $vaule." ";
}
$sColor = $_POST["sColor"];

echo "喜歡的顏色:".$sColor."<br/>";
$sDate = $_POST["sDate"];
$sTime = $_POST["sTime"];
echo "生日:".$sDate.$sTime."<br/>";
$sNumber = $_POST["sNumber"];
echo "喜歡的數字:".$sNumber."<br/>";

echo "人生目標:";
$sTarget = $_POST["sTarget"];
$x = count($sTarget);
for($i=0;$i<$x;$i++){
    if($i<($x-1)){
        echo $sTarget[$i]."、";
    }
    else{
        echo $sTarget[$i];
    }
}
echo "</br>";
$sText = $_POST["sText"];
echo "你的問題:".$sText."<br/>";

echo "<a href = 'logout.php'>登出";
?>