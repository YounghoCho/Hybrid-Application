<?php
include ("./classboard_lib.php");
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);

$sql = "select * from tb_board4 where b_idx = '".$_GET["b_idx"]."'";
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
$sql_delete = "delete from tb_board4 where b_num = '".$data["b_num"]."' and b_reply like '".$data["b_reply"]."%'";
sql_query($sql_delete);

//newest table에서도 지워줘야 합니다.
$sql_delete = "delete from newest where b_num = '".$data["b_num"]."' and b_reply like '".$data["b_reply"]."%'";
sql_query($sql_delete);
?>
<script>
location.replace("./suwon_classboard.php");
</script>