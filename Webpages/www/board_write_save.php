<!-- 서버&웹 개발자 : 조영호 -->
<!-- 저작권이 보호받는 페이지입니다 -->
<?php
@session_start();

include ("./include.php");
if(!$_SESSION["user_id"]){
    ?>
    <script>
        alert("로그인 하셔야 합니다.");
        location.replace("board_login.php");
    </script>
    <?php
}

if(trim($_POST["b_title"]) == ""){
    ?>
    <script>
        alert("글제목을 입력해 주세요.");
        history.back();
    </script>
    <?php
    exit;
}
if(trim($_POST["b_contents"]) == ""){
    ?>
    <script>
        alert("글내용을 입력해 주세요.");
        history.back();
    </script>
    <?php
    exit;
}

$c="select m_id from tb_board order by b_idx desc;";
$rec=mysql_query($c);
$resultc= mysql_fetch_array($rec);
/*
if($resultc[0]==$_SESSION["user_id"]){
?>
	<script>
	alert("연속해서 글을 쓸 수 없습니다.");
	</script>
<?php
}
else{
*/

/*
//select
$sel=$_POST["sel"];
//back
if($sel=='n'){
    ?>
    <script>
        alert("게시판 종류를 선택해주세요.");
		history.back();
    </script>
    <?php
}
//write
if($sel=='a'){
*/
$sql = "insert into tb_board set b_reply = '', m_id = '".$_SESSION["user_id"]."', m_name = '".$_SESSION["user_name"]."', b_title = '".$_POST["b_title"]."', b_contents = '".$_POST["b_contents"]."', b_regdate = now()";
sql_query($sql);
//b_idx는없어서 추가해줌.
$b_idx = mysql_insert_id();
$sql = "update tb_board set b_num = '".$b_idx."' where b_idx = '".$b_idx."'";
sql_query($sql);
?>
<script>
location.replace("./board_list.php");
</script>
<!--
//<?
//}
if($sel=='b'){
$sql = "insert into tb_board2 set b_reply = '', m_id = '".$_SESSION["user_id"]."', m_name = '".$_SESSION["user_name"]."', b_title = '".addslashes(htmlspecialchars($_POST["b_title"]))."', b_contents = '".addslashes(htmlspecialchars($_POST["b_contents"]))."', b_regdate = now()";
sql_query($sql);
//b_idx는없어서 추가해줌.
$b_idx = mysql_insert_id();
$sql = "update tb_board2 set b_num = '".$b_idx."' where b_idx = '".$b_idx."'";
sql_query($sql);
?>
<script>
location.replace("./2board_list.php");
</script>
<?
}

if($sel=='c'){
$sql = "insert into tb_board3 set b_reply = '', m_id = '".$_SESSION["user_id"]."', m_name = '".$_SESSION["user_name"]."', b_title = '".addslashes(htmlspecialchars($_POST["b_title"]))."', b_contents = '".addslashes(htmlspecialchars($_POST["b_contents"]))."', b_regdate = now()";
sql_query($sql);
//b_idx는없어서 추가해줌.
$b_idx = mysql_insert_id();
$sql = "update tb_board3 set b_num = '".$b_idx."' where b_idx = '".$b_idx."'";
sql_query($sql);
?>
<script>
location.replace("./3board_list.php");
</script>
<?
}

if($sel=='d'){
$sql = "insert into tb_board4 set b_reply = '', m_id = '".$_SESSION["user_id"]."', m_name = '".$_SESSION["user_name"]."', b_title = '".addslashes(htmlspecialchars($_POST["b_title"]))."', b_contents = '".addslashes(htmlspecialchars($_POST["b_contents"]))."', b_regdate = now()";
sql_query($sql);
//b_idx는없어서 추가해줌.
$b_idx = mysql_insert_id();
$sql = "update tb_board4 set b_num = '".$b_idx."' where b_idx = '".$b_idx."'";
sql_query($sql);
?>
<script>
location.replace("./4board_list.php");
</script>
<?
}

if($sel=='e'){
$sql = "insert into tb_board5 set b_reply = '', m_id = '".$_SESSION["user_id"]."', m_name = '".$_SESSION["user_name"]."', b_title = '".addslashes(htmlspecialchars($_POST["b_title"]))."', b_contents = '".addslashes(htmlspecialchars($_POST["b_contents"]))."', b_regdate = now()";
sql_query($sql);
//b_idx는없어서 추가해줌.
$b_idx = mysql_insert_id();
$sql = "update tb_board5 set b_num = '".$b_idx."' where b_idx = '".$b_idx."'";
sql_query($sql);
?>
<script>
location.replace("./5board_list.php");
</script>
<?
}

if($sel=='f'){
$sql = "insert into tb_board6 set b_reply = '', m_id = '".$_SESSION["user_id"]."', m_name = '".$_SESSION["user_name"]."', b_title = '".addslashes(htmlspecialchars($_POST["b_title"]))."', b_contents = '".addslashes(htmlspecialchars($_POST["b_contents"]))."', b_regdate = now()";
sql_query($sql);
//b_idx는없어서 추가해줌.
$b_idx = mysql_insert_id();
$sql = "update tb_board6 set b_num = '".$b_idx."' where b_idx = '".$b_idx."'";
sql_query($sql);
?>
<script>
location.replace("./6board_list.php");
</script>
<?
}
//}
?>
-->