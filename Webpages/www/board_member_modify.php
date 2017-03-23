<!-- 서버&웹 개발자 : 조영호 -->
<!-- 저작권이 보호받는 페이지입니다 -->
<?php
//phpinfo();
include ("./include.php");

if(!$_SESSION["user_id"]){
    ?>
    <script>
        alert("로그인 하셔야 합니다.");
        location.replace("board_login.php");
    </script>
    <?php
}
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
						<form name="modifyForm" method="post" action="./board_member_modify_save.php">
						  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  							<tr>
  								<td class="stitle" style="color:#172134;font-family:'Jeju Gothic',sans-serif;">
								<font style=" color:#f38a8a;font-family:'Jeju Gothic',sans-serif;">&nbsp;<?=$_SESSION["user_name"]?></font>님 정보수정</td>
  							</tr>
  					      </table>
						  <table width="100%" border="0" cellspacing="1" class="regtable">
								<tr>
  								<td align="center"  width="26%" height="18%" bgcolor="#f4f4f4" style="font-family:'Hanna', serif;background-color:#22304e;color:white;padding:10px">새 비밀번호</td>
  								<td width="130">
									<input type="password" name="m_pass" size="11" style="height:100%">
								</td>
								<td rowspan="2" align="center">
								<input type="button" value=" 정보수정 " onClick="member_save();" style="padding:10px;background-color:#22304e;color:white;border:1px solid #22304e"></td>
								</tr>
  								<tr>
  								<td align="center"  width="26%" height="18%" bgcolor="#f4f4f4" style="font-family:'Hanna', serif;background-color:#22304e;color:white;padding:10px">비번 확인</td>
  								<td>
								<input type="password" name="m_pass2" size="11" style="height:100%">			
  								</td>
  							</tr>
						  </table>
					  </form>
<hr style="border:none;margin:35%">
						  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  							<tr align="center">
  								<td class="stitle" style=" color:#172134;font-family:'Jeju Gothic',sans-serif;">회원탈퇴</td>
  							</tr>
  					      </table>
						  <table border="0"width="100%" cellspacing="1" >
								<tr">
								<td align="center" border="1" rowspan="2" align="left">
								<input type="button" value=" 회원탈퇴로 이동 " onClick="location.href='board_member_remove.php';" style="padding:10px;background-color:#22304e;color:white;border:1px solid #22304e;align:center;">
								</td>
								</tr>
								<tr>
  							</tr>
							</table>


</body>
<script>
function member_save()
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