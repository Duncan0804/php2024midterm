<html>
<head>
<meta charset="utf8">
</head>
<form action="showpaper.php"method="post">
<center>
<B><h2>Author您好，歡迎進入論文投稿網頁</h2></B>
論文標題:<input type="text" name="sTitle" value=""><br/>
作者姓名:<input type="text" name="sName" value=""><br/>
作者Email:<input type="email"name="sEmail"value=""><br/>
論文摘要:
<textarea name="sComment"value=""rows="20"cols="80">
</textarea>
<br/>
<input type="submit"value="提交">
<br/>
<include "include.inc";>