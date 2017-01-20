<?php
@session_start();
include ("./loveboard_lib.php");
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);

$sql = "select * from re3 where cname = '".$_GET["cname"]."'";
$result = sql_query($sql);
$data = mysql_fetch_array($result);
$sql_delete = "delete from re3 where cname = '".$data["cname"]."' and cindex ='".$_GET["cindex"]."' ";
$d_result= sql_query($sql_delete);
$url=$_SERVER["HTTP_REFERER"];
?>
<script>
location.replace("<?echo $url?>");
</script>
