<?
include ("./freeboard_lib.php");
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);

$sql="insert into blacklist values ('".$_GET['black']."');";
$query=sql_query($sql);
?>
<script>
history.back();
</script>