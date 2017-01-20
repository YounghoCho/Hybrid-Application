<!doctype html>
<html lang="en">
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta charset="UTF-8">
 <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/earlyaccess/nanumgothic.css'>

 </head>
 <style>
 *{
	font-family: 'Nanum Gothic', serif;
 }
 body {
	margin:0;
	padding:0;
	width:100%;
	height:90%;
 }
a:link{
	text-decoration:none;
	color:#0689FF
}
a:visited{
	color:#0689FF
}
a:active{
	color:#0689FF
}
#rule a:link{
	text-decoration:none;
	color:#595757;
}
#rule a:visited{
	color:#595757;
}
#rule a:active{
	color:#595757;
}

.container{
	width:88%;
	background-color:#f5f5f5;
	border:1px solid #b5b5b6;
	border-radius:20px;
	color:#595757;
}
.img{
	width:60px;
	margin:20%;
}
hr{
	border:none;
	margin:6%;
}
table{
	width:100%;
	hegiht:100%;
}
.foottable{
	color:#595757;
	font-size:1px;
	position:absolute;
	bottom:3%;
	width:100%;
	text-align:center;
}
.foot{
	color:#595757;
	font-size:1px;
	position:absolute;
	bottom:1%;
	width:100%;
	text-align:center;
}
 </style>
	 <?
		include("./suwon_include.html");
	 ?>
 <body>
	<center>
		<h5><font style="color:#595757">불편한 사항이나 개선 점이 있다면 언제든 알려주세요.</font></h5>
		<div class="container">
			<table><tr>
				<td width='30%'>
					<img class="img" src="./pic/facebook.png" />
				</td>
				<td width:='70%'>
				<font style="font-size:90%;font-weight:bold;">페이스북</font><br>
				<font style="font-size:70%;">메세지로 문의 해주세요!</font><br>
				<font style="font-size:100%;line-height:2.0em;color:#0689FF;font-weight:bold;">
				<a href="http://www.facebook.com/SuwonTalk">페이스북/suwontalk</a></font>
				</td></tr>
			</table>
		</div>
		<hr>

		<div class="container">
			<table><tr>
				<td width='30%'>
					<img class="img" src="./pic/kakaotalk.png" />
				</td>
				<td width:='70%'>
				<font style="font-size:90%;font-weight:bold;">카카오톡</font><br>
				<font style="font-size:70%;">옐로아이디로 문의 해주세요!</font><br>
				<font style="font-size:100%;line-height:2.0em;color:#0689FF;font-weight:bold;">수원톡톡</font><font style="font-size:85%;line-height:2.0em;color:#0689FF;font-weight:bold;">&nbsp;검색</font>
				</td></tr>
			</table>
		</div>
		<hr>

		<div class="container">
			<table><tr>
				<td width='30%'>
					<img class="img" src="./pic/naver_mail.png" />
				</td>
				<td width:='70%'>
				<font style="font-size:90%;font-weight:bold;">메일주소</font><br>
				<font style="font-size:70%;">네이버 메일로 문의 해주세요!</font><br>
				<font style="font-size:100%;line-height:2.0em;color:#0689FF;font-weight:bold;">
				<a src="mailto:dodghek1@naver.com">dodghek1@naver.com</a></font>
				</td></tr>
			</table>
		</div>
		<hr>


	<table width="100%" style="margin-top:1%;" class="foottable">
	<tr>
	
	<td align="center" id="rule">
	<a href="./suwon_service_service.php">서비스이용약관</a>&nbsp;|&nbsp;
	<a href="./suwon_service_info.php">개인정보취급방침</a>&nbsp;|&nbsp;
	<a href="./suwon_service_using.php">커뮤니티이용규칙</a>
	</td>
	
	</tr>
	</table>
	</center>

	<div class="foot">
	Copyright © <b>수원톡톡</b> Corp. All rights reserved.
	<div>
 </body>
</html>
