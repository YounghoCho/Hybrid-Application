<!-- 서버&웹 개발자 : 조영호 -->
<!-- 저작권이 보호받는 페이지입니다 -->
<?php
@session_start();

include ("./include.php");

$sql = "insert into m_remove set contents = '".$_POST["contents"]."', user_id='".$_SESSION["user_id"]."', user_name='".$_SESSION["user_name"]."', time=now();";
sql_query($sql);

$sql2="delete from tb_member where m_name='".$_SESSION["user_name"]."';";
sql_query($sql2);

?>
<script>
alert("그동안의 관심에 감사드립니다.");
location.replace("./board_logout.php");
</script>
