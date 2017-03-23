<!-- 서버&웹 개발자 : 조영호 -->
<!-- 저작권이 보호받는 페이지입니다 -->
<?php
include ("./include.php");
?>

<head>
<style>
body {font-family:'Hanna', serif;}
input {font-family:'Hanna', serif;}
</style>
<body style="background-color:#fff9f3">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table2">
	<tr>
		<td style="padding:20px 0 0 0">
			<table width="100%%" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td style="padding:10px;">
						<form name="modifyForm" method="post" action="./board_member_remove_save.php">
						  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  							<tr>
  								<td class="stitle" style="color:#172134;font-family:'Jeju Gothic',sans-serif;">
								<font style=" color:#f38a8a;font-family:'Jeju Gothic',sans-serif;">&nbsp;</font>회원탈퇴</td>
  							</tr>
  					      </table>
						  <table width="100%" border="0" cellspacing="1" class="regtable">
								<tr>
  								<td align="center"  width="26%" height="18%" bgcolor="#f4f4f4" style="font-family:'Hanna', serif;background-color:#22304e;color:white;padding:10px">비밀번호</td>
  								<td width="130">
									<input type="password" name="m_pass" size="11" style="height:100%">
								</td>
								</tr>

  								<tr>
  								<td align="center"  width="26%" height="18%" bgcolor="#f4f4f4" style="font-family:'Hanna', serif;background-color:#22304e;color:white;padding:10px">비번확인</td>
  								<td>
								<input type="password" name="m_pass2" size="11" style="height:100%">			
  								</td>
  								</tr>
								
								<tr>
								<td colspan="2" height="30%" style="padding-top:5%;"><font style="font-size:100%;font-family:'Hanna', serif;">회원 탈퇴하시는 이유가 무엇인가요?</font>
								</td></tr>
							</table>
						<hr style="border:none;margin-top:0%">
						
						&nbsp;
						<textarea name="contents" style="width:50%;height:60; color:#172134;font-family:'Hanna', serif;"></textarea>
						<hr style="border:none;margin:3%">
						<center>
						<input type="button" value=" 회원탈퇴 " onClick="member_remove();" style="padding:10px;background-color:#22304e;color:white;border:1px solid #22304e">
						</center>
			</form>
		</table>
	</table>
</body>
<script>
function member_remove()
{
    var f = document.modifyForm;
	if(f.m_pass.value == ""){
        alert("비밀번호를 입력해 주세요.");
        return false;
    }
    if(f.m_pass.value != f.m_pass2.value){
        alert("비밀번호를 확인해 주세요.");
        return false;
    }
    f.submit();
}
</script>