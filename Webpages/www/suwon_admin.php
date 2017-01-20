<?
session_start();
if($_SESSION["user_name"]=='관리자'){
//관리자만 볼수 있습니다.

include('./suwon_include.html');
?>

<body style="margin:0">
<button onClick="location.href='./suwon_logout.php'">로그아웃</button>
<button onClick="location.href='./suwon_best_reset.php'">BEST 조회수 초기화</button>
<br>
<br>
<form action="./suwon_blacklist.php" method="GET">
IP : <input name="black" type="text" size="20"/><button type="submit">차단</button>

</form>
</body>
<?
}
?>