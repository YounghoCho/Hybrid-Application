<?php
@session_start();
include ("./include.php");
$sql = "select * from re where cname = '".$_GET["cname"]."'";
$result = sql_query($sql);
$data = mysql_fetch_array($result);
$sql_delete = "delete from re where cname = '".$data["cname"]."' and cindex ='".$_GET["cindex"]."' ";
$d_result= sql_query($sql_delete);
$url=$_SERVER["HTTP_REFERER"];
?>
<script>
location.replace("<?echo $url?>");

</script>
