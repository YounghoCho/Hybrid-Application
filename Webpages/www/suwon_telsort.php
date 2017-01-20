<?
include ("./freeboard_lib.php");
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);
?>
<head>
  <title>수원톡톡</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
 
<style type="text/css">
html,body { 
	margin: 0px;
	padding: 0px;
}
button{
	background-color:#fff;
	border:none;
	border-radius:5px;
	width:85%;
	height:70%;
}
table tr td{
	border-bottom:1px solid #DCDDDD;
	height:65px;
	width:40%;
}

input{
	width:100%;
	height:30px;
	color:#ccc;
	margin:0;
	padding:0;
	border-top-left-radius:5px;
	border-bottom-left-radius:5px;
	border:1px solid;
}
a:link{
	text-decoration:none;
	color:#000;
}
a:visited{
	color:#000;
}
a:active{
	color:blue;
}
.bodydiv{
	background-color:#ccc;
	width:100%;
	height:94%;
}
.board{
	width:100%;
	height:85%;
}

</style>
</head>


	<?
	include("./suwon_include.html");
	?>
<body>
<div class="bodydiv">

	<div class="board">
<!------------------------------------------------>
<table style="width:100%;background-color:#fff;">
	
	<?
	$sql="select * from univcall;";
	$mid=mysql_query($sql);

	//넘겨온 num에 따라 번호 불러오기
	switch($_GET['num']){
		case 1:
			while($result=mysql_fetch_array($mid)){
				if($result['call_sort']=="인문대학"){
			?>
			<tr>
				<td class="tall" style="padding-left:7%;padding-bottom:1%;">
					<font size=3><?=$result['call_dep']?></font><br>
					<font size=3><?=$result['call_name']?></font>
				</td>
				<td style="width:60%">
					<button class="call" style="border:1px #B5B5B6 solid;border-radius:8px;background-color:#F5F5F5;color:#595757;"
					onclick="window.open('tel:<?=$result['call_num']?>');">
							<img src="./pic/num.png"/ style="float:left;width:12%;padding-left:8%;">
							<div style="width:70%;padding-top:1%;padding-right:2%;float:right;"><font size="3"><?=$result['call_num']?></font></div>
						</button>
				</td>
			</tr>
			<?
					}
			}
		break;	

		case 2:
			while($result=mysql_fetch_array($mid)){
				if($result['call_sort']=="법정대학"||$result['call_sort']=="경상대학"){
			?>
			<tr>
				<td class="tall" style="padding-left:7%;padding-bottom:1%;">
					<font size=3><?=$result['call_dep']?></font><br>
					<font size=3><?=$result['call_name']?></font>
				</td>
				<td style="width:60%">
					<button class="call" style="border:1px #B5B5B6 solid;border-radius:8px;background-color:#F5F5F5;color:#595757;"
					onclick="window.open('tel:<?=$result['call_num']?>');">
							<img src="./pic/num.png"/ style="float:left;width:12%;padding-left:8%;">
							<div style="width:70%;padding-top:1%;padding-right:2%;float:right;"><font size="3"><?=$result['call_num']?></font></div>
						</button>
				</td>
			</tr>
			<?
					}
			}
		break;	

		case 3:
			while($result=mysql_fetch_array($mid)){
				if($result['call_sort']=="공과대학"||$result['call_sort']=="IT대학"){
			?>
			<tr>
				<td class="tall" style="padding-left:7%;padding-bottom:1%;">
					<font size=3><?=$result['call_dep']?></font><br>
					<font size=3><?=$result['call_name']?></font>
				</td>
				<td style="width:60%">
					<button class="call" style="border:1px #B5B5B6 solid;border-radius:8px;background-color:#F5F5F5;color:#595757;"
					onclick="window.open('tel:<?=$result['call_num']?>');">
							<img src="./pic/num.png"/ style="float:left;width:12%;padding-left:8%;">
							<div style="width:70%;padding-top:1%;padding-right:2%;float:right;"><font size="3"><?=$result['call_num']?></font></div>
						</button>
				</td>
			</tr>
			<?
					}
			}
		break;	

		case 4:
			while($result=mysql_fetch_array($mid)){
				if($result['call_sort']=="자연과학대학"){
			?>
			<tr>
				<td class="tall" style="padding-left:7%;padding-bottom:1%;">
					<font size=3><?=$result['call_dep']?></font><br>
					<font size=3><?=$result['call_name']?></font>
				</td>
				<td style="width:60%">
					<button class="call" style="border:1px #B5B5B6 solid;border-radius:8px;background-color:#F5F5F5;color:#595757;"
					onclick="window.open('tel:<?=$result['call_num']?>');">
							<img src="./pic/num.png"/ style="float:left;width:12%;padding-left:8%;">
							<div style="width:70%;padding-top:1%;padding-right:2%;float:right;"><font size="3"><?=$result['call_num']?></font></div>
						</button>
				</td>
			</tr>
			<?
					}
			}
		break;	

		case 5:
			while($result=mysql_fetch_array($mid)){
				if($result['call_sort']=="체육대학"||$result['call_sort']=="미술대학"||$result['call_sort']=="음악대학"){
			?>
			<tr>
				<td class="tall" style="padding-left:7%;padding-bottom:1%;">
					<font size=3><?=$result['call_dep']?></font><br>
					<font size=3><?=$result['call_name']?></font>
				</td>
				<td style="width:60%">
					<button class="call" style="border:1px #B5B5B6 solid;border-radius:8px;background-color:#F5F5F5;color:#595757;"
					onclick="window.open('tel:<?=$result['call_num']?>');">
							<img src="./pic/num.png"/ style="float:left;width:12%;padding-left:8%;">
							<div style="width:70%;padding-top:1%;padding-right:2%;float:right;"><font size="3"><?=$result['call_num']?></font></div>
						</button>
				</td>
			</tr>
			<?
					}
			}
		break;	

		case 6:
			while($result=mysql_fetch_array($mid)){
				if($result['call_sort']=="생활과학대학"){
			?>
			<tr>
				<td class="tall" style="padding-left:7%;padding-bottom:1%;">
					<font size=3><?=$result['call_dep']?></font><br>
					<font size=3><?=$result['call_name']?></font>
				</td>
				<td style="width:60%">
					<button class="call" style="border:1px #B5B5B6 solid;border-radius:8px;background-color:#F5F5F5;color:#595757;"
					onclick="window.open('tel:<?=$result['call_num']?>');">
							<img src="./pic/num.png"/ style="float:left;width:12%;padding-left:8%;">
							<div style="width:70%;padding-top:1%;padding-right:2%;float:right;"><font size="3"><?=$result['call_num']?></font></div>
						</button>
				</td>
			</tr>
			<?
					}
			}
		break;	

		case 7:
			while($result=mysql_fetch_array($mid)){
				if($result['call_sort']!="인문대학"&&
					$result['call_sort']!="법정대학"&&
					$result['call_sort']!="경상대학"&&
					$result['call_sort']!="공과대학"&&
					$result['call_sort']!="IT대학"&&
					$result['call_sort']!="자연과학대학"&&
					$result['call_sort']!="미술대학"&&
					$result['call_sort']!="체육대학"&&
					$result['call_sort']!="음악대학"&&
					$result['call_sort']!="생활과학대학"

				){
			?>
			<tr>
				<td class="tall" style="padding-left:7%;padding-bottom:1%;">
					<font size=3><?=$result['call_dep']?></font><br>
					<font size=3><?=$result['call_name']?></font>
				</td>
				<td style="width:60%">
					<button class="call" style="border:1px #B5B5B6 solid;border-radius:8px;background-color:#F5F5F5;color:#595757;"
					onclick="window.open('tel:<?=$result['call_num']?>');">
							<img src="./pic/num.png"/ style="float:left;width:12%;padding-left:8%;">
							<div style="width:70%;padding-top:1%;padding-right:2%;float:right;"><font size="3"><?=$result['call_num']?></font></div>
						</button>
				</td>
			</tr>
			<?
					}
			}
		break;	
	}
	?>
</table>
	</div>
<!------------------------------------------------>
</div>

</div>
</body>
</html>
