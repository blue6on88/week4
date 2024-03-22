<?php
session_start();
?>
<?php

if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes"){
   
    }
    else{
        echo "非法進入，1秒後返回";
        header("Refresh:1; url=login.php");
    }
}
else{
    echo "非法進入，1秒後返回";
    header("Refresh:1; url=login.php");
}
?>

<html>

<head>
<meta charset="utf8">
<title>資管晚會報名表單</title>
</head>

<body>

<form action="result.php" method="post">
姓名:<input type="text" name = "sName" value="" placeholder="請輸入姓名"><br/>
學號:<input type="text" name = "sSNumber" value="" required placeholder="請輸入學號" require></br>
Email:<input type="email" name="sEmail" value=""><br/>
年級:<input type="radio" name="sGrade" value="one">一
<input type="radio" name="sGrade" value="two" checked>二
<input type="radio" name="sGrade" value="three">三
<input type="radio" name="sGrade" value="four">四<br/>
<br/>
感興趣的項目:<input type="checkbox" name="sInterest[]" value="music" checked>音樂
<input type="checkbox" name="sInterest[]" value="dance">跳舞
<input type="checkbox" name="sInterest[]" value="game">遊戲<br/>
最喜歡的顏色:<input type="color" name="sColor" value=""><br/>
生日:<input type="date" name="sDate" value="">
<input type="time" name="sTime" value=""><br/>
頭像:<input type="file" name="nFile"><br/>
<input type="hidden" name="sHidden" value="I hate u"><br/>
選擇喜歡的數字:<input type="number" name="sNumber" value=""><br/>
你的腦容量:<input type="range"><br/>
請選擇人生目標:
<br/>
<select name="sTarget[]" multiple>
<option value="eat" selected>吃
<option value="drink">喝    
<option value="play">玩    
<option value="fun">樂        
</select>
<br/>
你的意見:</br>
<textarea name="sText" value="" rows="10" cols = "50">
</textarea>
</br>
</br>
<input type="submit">
<input type="reset">
</form>

</body>

</html>


    