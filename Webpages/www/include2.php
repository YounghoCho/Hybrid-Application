
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $("#flip2").click(function(){
			$("#panel2").slideToggle("fast");
		});
});
</script>
 <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/earlyaccess/hanna.css' >
 <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/jejugothic.css">
<style type="text/css">
        html {
            margin-left: 10px;
            margin-right: 10px;
        }
#panel2, #flip2{
    color:#22304e;
    padding: 6px;
	padding-top:10px;
    text-align: center;
    background-color:#fff8f2;
	width:100%;

}

#panel2 {
    display: none;
    padding: 17px;
	font-family:'Hanna',serif;
}
.f {  font-family:'Hanna',serif;
	font-size:100%;
}

</style>

<body style="background-color:#fff8f2">
<hr style="margin:2%;border:#dedede 1px solid">
<table class="f" align="center" style="width:100%;">
	<tr>
		
		<td align="center" valign="middle" width="33.3%">
        <?php

		if(@$_SESSION["user_id"]){
        ?>
		<input type="button" valign="center" value="로그아웃" onClick="location.href='./board_logout.php'" style="width:100%;background-color:#fff8f2;color:#22304e;border:none;padding-top:5px;padding: 6px;font-size:90%	">
	     <?php
		}
		else
		{
		?>
		<input type="button" value="로그인" onClick="location.href='./board_login.php'" style="width:100%;background-color:#fff8f2;color:#22304e;border:none;padding-top:5px;padding: 6px;font-size:90%"><!--background-color:#cc8f00-->
        <?php
		}
		?>
        </td>
		<td align="center" valign="middle" width="33.3%">
		<?php
		if(@$_SESSION["user_id"]){
        ?>
        <input type="button" value="정보수정" onClick="location.href='./board_member_modify.php'" style="width:100%;background-color:#fff8f2;color:#22304e;border:none;padding-top:5px;padding: 6px;font-size:90%	">
		<?php
		}
		else{
		?>
		<input type="button" valign="bottom" value="회원가입" onClick="location.href='./board_register.php'" style="width:100%;background-color:#fff8f2;color:#22304e;border:none;padding-top:5px;padding: 6px;font-size:90%">
       <?php
		}
		?>
        </td>

<td align="left" valign="middle" width="33.3%">
  <input type="button" id="flip2" value="고객센터" style="font-family:'Hanna',serif;border:none;font-size:90%">
</td>
    </tr>
</table>
<center>
<div id="panel2"><font size="1%" color="#777">수원大인 대표 : 조영호<hr style="margin:1%;border:none;">서비스 문의 | 광고문의 | FeedBack<hr style="margin:0%;border:none;">대표 이메일 : dodghek1@naver.com</font>
<font size=1 color="#64aaff"><br>본 사이트는 저작권법의 보호를 받는바, 무단 전재, 복사, 배포 등을 금합니다.</font>
<font size=1 color="#aaa"><br>Copyright 2016 수원大인 All Rights Reserved</font>
<hr style="margin:2%;border:none">
</div>
</center>
</body>