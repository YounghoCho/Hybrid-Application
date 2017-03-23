<!-- 서버&웹 개발자 : 조영호 -->
<!-- 저작권이 보호받는 페이지입니다 -->
<?php

include ("./include.php");

//회원가입 데이터 삽입부분★6시간걸림★
//test.php부분으로부터 변수5개를 js로 넘겨받음. 이때는 get을 사용한다★6시간걸림★

//비밀번호 암호화
$password=$_GET["m_pass"];
include ("./password.php");
$hash= password_hash($password, PASSWORD_DEFAULT);//암호화

$sql = "insert into tb_member (m_id, m_name, m_pass, email) values ('".trim(@$_GET["m_id"])."', '".trim(@$_GET["m_name"])."', '".$hash."','".trim(@$_GET["email"])."')";
sql_query($sql);

?>
<script>
alert("회원가입이 완료 되었습니다.");
location.replace("board_login.php");
</script>