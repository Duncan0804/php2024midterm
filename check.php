<?php
ob_start();
session_start();
?>

<meta charset="utf8">
<?php
$sId1="chair";
$sPwd1="123";
$sId2="reviewer";
$sPwd2="234";
$sId3="author";
$sPwd3="345";
$uId=$_GET["uId"];
$uPwd=$_GET["uPwd"];

if($sId1==$uId&&$sPwd1==$uPwd){
    $_SESSION["check"]="Yes";
    header("Location:chair.php");
}else if($sId2==$uId&&$sPwd2==$uPwd){
    $_SESSION["check"]="Yes";
    header("Location:reviewer.php");
}else if($sId3==$uId&&$sPwd3==$uPwd){
    $_SESSION["check"]="Yes";
    header("Location:author.php");
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}
ob_flush();//緩衝區
?>