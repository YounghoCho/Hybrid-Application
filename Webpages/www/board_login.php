<!-- 서버&웹 개발자 : 조영호 -->
<!-- 저작권이 보호받는 페이지입니다 -->
<?php
@session_start();
?>
<?php
include ("./include.php");

if(@$_SESSION["user_id"]){
    ?>
    <script>
        alert("로그인 하신 상태입니다.");
        history.back();
    </script>
<?php
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/jejugothic.css">
</head>
<body style="background-color:#fff9f3">
 <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table2">
	<tr>
		<td style="padding:10px 0 0 0">
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td style="padding:15px;">
						<form name="loginForm" method="post" action="./login_chk.php">
						  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  							<tr>
  								<td class="stitle" style="color:black;font-family:'Jeju Gothic',sans-serif;">로그인</td>
  							</tr>
  					      </table>
						  <table width="100%" border="0" cellspacing="1" class="regtable">
								<tr>
  								<td class="nts" align="center" width="26%" height="18%" bgcolor="#f4f4f4" style="font-family:'Hanna', serif;background-color:#22304e;color:white;font-size:80%">아이디</td>
  								<td>
									<input class="cts" type="text" name="m_id" size="20" style="margin:5px;height:100%;width:90%">
								</td>
								<td rowspan="2" align="left">
								<div class="bts" ><input type="button" value=" 로그인" onClick="login_chk();" style="padding:10px;background-color:#22304e;color:white;border:1px solid #22304e;font-weight:bold;"></div></td>
								</tr>
  								<tr>
  								<td align="center" width="26%" height="18%" bgcolor="#f4f4f4" style="font-family:'Hanna', serif;background-color:#22304e;color:white;font-size:80%">비밀번호</td>
  								<td>
								<input class="cts" type="password" name="m_pass" size="20" style="margin:5px;height:100%;width:90%">								
  								</td>
  							</tr>  
						  </table>
						 </form>
						   <br><br>
						  <form method="post" name="passForm" action="passfind.php">
						  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  							<tr>
  								<td class="stitle" style=" color:#172134;font-family:'Jeju Gothic',sans-serif;">비밀번호 찾기</td>
  							</tr>
  					      </table>
						  <table width="100%" border="0" cellspacing="1" class="regtable">
								<tr>
  								<td class="nts" align="center" width="26%" height="18%" bgcolor="#f4f4f4" style="font-family:'Hanna', serif;background-color:#22304e;color:white;font-size:80%">아이디</td>
  								<td>
									<input class="cts" type="text" name="pfname" size="20" style="margin:5px;height:100%;width:90%">
								</td>
								<td rowspan="2" align="left">
								<div class="bts" ><input type="button" value=" 찾  기 " onClick="pass_f();" style="padding:10px;background-color:#22304e;color:white;border:1px solid #22304e;font-weight:bold;"></div></td>
								</tr>
								<tr>
  								<td align="center" width="26%" height="18%" bgcolor="#f4f4f4" style="font-family:'Hanna', serif;background-color:#22304e;color:white;font-size:80%">이메일</td>
  								<td>
								<input class="cts" type="email" name="pfemail" size="20" style="margin:5px;height:100%;width:90%">
  								</td>
  							</tr>
							</table>
						</form>
<!--3-->
<hr style="border:none;margin:35%"
						  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  							<tr align="center">
  								<td class="stitle" style=" color:#172134;font-family:'Jeju Gothic',sans-serif;">회원가입</td>
  							</tr>
  					      </table>
						  <table border="0"width="100%" cellspacing="1" >
								<tr">
								<td align="center" border="1" rowspan="2" align="left">
								<input type="button" value=" 회원가입으로 이동 " onClick="location.href='board_register.php';" style="padding:10px;background-color:#22304e;color:white;border:1px solid #22304e;font-weight:bold;align:center">
								</td>
								</tr>
								<tr>
  							</tr>
							</table>
<!---->

					 </table>
				</table>
</body>
<script>
function login_chk()
{  
    var f = document.loginForm;
	if(f.m_id.value == ""){
		alert("아이디를 입력해 주세요.");
		f.m_id.focus();
		return false;
		}
    if(f.m_pass.value == ""){
        alert("비밀번호를 입력해 주세요.");
		f.m_pass.focus();
        return false;
    }
    f.submit();
}
function pass_f()
{
	var pf= document.passForm;
	if(pf.pfname.value == ""){
		alert("아이디를 입력해 주세요");
		return false;
	}
	if(pf.pfemail.value == ""){
		alert("이메일을 입력해 주세요");
		return false;
	}
	pf.submit();
}
</script>
