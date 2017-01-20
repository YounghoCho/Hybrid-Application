<?
session_start();
include ("./freeboard_lib.php");
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);

//자유게시판만
$sql="update tb_board2 set best=0;";
$go=sql_query($sql);
?>

<script>
history.back();
</script>
