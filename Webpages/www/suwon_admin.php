<?
session_start();
if($_SESSION["user_name"]=='관리자'){
//관리자만 볼수 있습니다.

include('./suwon_include.html');

include("./freeboard_lib.php");
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);

?>

<body style="margin:0">
<button onClick="location.href='./suwon_logout.php'">로그아웃</button>
<button onClick="location.href='./suwon_best_reset.php'">BEST 조회수 초기화</button>
<br>
<hr>

<form action="./suwon_blacklist.php" method="GET">
IP : <input name="black" type="text" size="20"/><br>
사유 : <input name="reason" type="text"/><br>
<button type="submit">차단</button>
</form>
<hr>

<table>
	<tr>
	<td style="border-bottom:1px solid">아이피</td>
	<td style="border-bottom:1px solid">사유</td>
	</tr>
	
	<?
	$sql="select * from blacklist";
	$q=mysql_query($sql);
	while($d=mysql_fetch_array($q)){
	?>
		<tr>
		<td style="border-right:1px solid"><?echo ($d['black_ip'])?></td>
		<td><?echo ($d['reason'])?></td>
		</tr>
	<?
	}


	?>
</body>
<?
}
?>