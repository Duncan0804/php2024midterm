<html>
<head>
<meta charset="utf8">
</head>
<form action="showreview.php"method="post">
<center>
<B><h2>Reviewer您好，歡迎進入論文評論網頁</h2></B>
論文評審決定:
<input type="radio"name="sDecide"value="Accept"checked>Accept
<input type="radio"name="sDecide"value="Minor Revision">Minor Revision
<input type="radio"name="sDecide"value="Major Revision">Major Revision
<input type="radio"name="sDecide"value="Reject">Reject
<br/>
論文評論評語:
<textarea name="sComment"value=""rows="10"cols="50">
</textarea>
<br/>
<input type="submit"value="提交">
<br/>