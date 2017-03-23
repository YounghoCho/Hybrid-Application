<!-- 서버&웹 개발자 : 조영호 -->
<!-- 저작권이 보호받는 페이지입니다 -->
<?php
include ("./include.php");
$sql = "select * from tb_board where b_idx = '".$_GET["b_idx"]."'";
$result = sql_query($sql);
$data = mysql_fetch_array($result);
if(!$data["b_idx"]){
    ?>
    <script>
        alert("존재하지 않는 글입니다.");
        history.back();
    </script>
    <?php
}
if($_SESSION["user_id"] != '관리자'){
 if($data["m_id"] != $_SESSION["user_id"]){
    ?>
    <script>
        alert("본인의 글이 아닙니다.");
        history.back();
    </script>
    <?php
 }
}
$sql_delete = "delete from tb_board where b_num = '".$data["b_num"]."' and b_reply like '".$data["b_reply"]."%'";
sql_query($sql_delete);
?>
<script>
location.replace("./board_list.php");
</script>