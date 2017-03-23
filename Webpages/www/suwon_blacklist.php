<?
include ("./freeboard_lib.php");
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);
print_r($_GET);
$sql="insert into blacklist values ('".$_GET['black']."', '".$_GET['reason']."');";
$query=sql_query($sql);

?>
<script>
history.back();
</script>