<!-- 서버&웹 개발자 : 조영호 -->
<!-- 저작권이 보호받는 페이지입니다 -->
<?php
include ("./include.php");
?>
<style>
body {font-family:'Hanna', serif;}
input {font-family:'Hanna', serif;}
</style>
<?php
$sql="select m_pass from tb_member where m_id='".$_POST["pfname"]."' and email='".$_POST["pfemail"]."';";
$mid=mysql_query($sql);
$result=mysql_fetch_array($mid);
if($result[0]){
?>
<body style="background-color:#fff9f3">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table2">
	<tr>
		<td style="padding:20px 0 0 0">
			<table width="100%%" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td style="padding:10px;">
						<form name="modifyForm" method="post" action="./passfind_save.php">
						  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  							<tr>
  								<td class="stitle" style=" color:#172134;font-family:'Jeju Gothic',sans-serif;">비밀번호 재설정</td>
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
								<input type="hidden" name="pfname" value="<?echo ($_POST["pfname"])?>">
								<input type="hidden" name="pfemail" value="<?echo ($_POST["pfemail"])?>">

  								</td>
  							</tr>
						  </table>
					  </form>
</body>
<?php
}
else{
	echo ("등록된 이메일 주소가 없습니다.");
?>
<br><br>
<?php
	echo("3초후 로그인 페이지로 이동합니다.");
?>
<script>
setTimeout("history.back()",3000);
</script>
<?php
}
?>
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