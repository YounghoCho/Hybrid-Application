<!-- 서버&웹 개발자 : 조영호 -->
<!-- 저작권이 보호받는 페이지입니다 -->
<?php
include ("./include.php");

//입력받은 비밀번호, 비밀번호확인이 일치하면
if($_POST["m_pass"] == $_POST["m_pass2"])
{
//비밀번호 암호화
$password=$_POST["m_pass"];
include ("./password.php");
$hash= password_hash($password, PASSWORD_DEFAULT);//암호화

//아이디와 이메일이 동시에 해당되는 곳의 비밀번호를 수정한다.
$sql = "update tb_member set m_pass = '".$hash."' where email = '".$_POST["pfemail"]."' and m_name = '".$_POST["pfname"]."' ";
sql_query($sql);
}
?>
<script>
alert("회원정보가 수정 되었습니다.");
location.replace("board_login.php");
</script>