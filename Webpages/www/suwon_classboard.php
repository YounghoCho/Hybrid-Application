<?
@session_start();
include ("./classboard_lib.php");
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);
?>

<head>
  <title>수원톡톡</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<!--고딕-->
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/earlyaccess/nanumgothic.css'>

<style type="text/css">
html,body { 
	margin:0;
	padding:0;
	width:100%;
	height:100%;
	background-color:#ccc;
}
button{
	background-color:#fff;
	border:none;
	width:22%;
	height:75%;
	margin-top:8px;
	border-radius:5px;
}
input{
	width:111%;
	height:30px;
	color:#B5B5B6;
	border:none;
	outline:none;
	-webkit-appearance:none;
}
a:link{
	text-decoration:none;
	color:#000;
}
a:visited{
	color:#000;
	text-decoration:none;
}
a:active{
	color:#0689FF;
	text-decoration:none;
}
font{
	color:#3E3A39;
}
.bodydiv{
	background-color:#ccc;
	width:100%;
	height:85%;
}
.bodyhead{
	width:100%;
	height:10%;
}
.search{
	width:83%;
	height:10%;
	display:inline-block;
	float:left;
	margin-top:2%;
	margin-left:4%;
}
.go{	
	width:10%;
	height:8%;
	display:inline-block;
	float:right;
	margin-top:-1%;
	margin-right:5%;
}

.board{
	width:100%;
	margin-top:-1%;
}
.boardhead{
	background-color:#898989;
	color:#fff;
	width:100%;
	height:6%;
	font-size:87%;
	padding-top:2%;
	padding-bottom:1%;
}
.boardbody{
	background-color:#fff;
	width:100%;
}
</style>
</head>

<body>
	<?
	include("./suwon_include.html");
	include("./suwon_include_button.php");
	?>

<div class="bodydiv">
	<div class="bodyhead">
			<div class="search">
				<form name="sf" action="suwon_classsearch.php" method="GET" autocomplete="on">
				<input name="class" type="text" size="30" value="글 내용을 입력해주세요" onfocus="this.value=''" style="padding-left:4%;border-radius:5px;font-family: 'Nanum Gothic', serif;" autocomplete="off">
			</div>
			<div class="go">
				<button type="submit" style="border:none;width:25px;height:20px;bacground-color:#fff;margin-top:12%;border-radius:5px;background-image: url('./pic/go.png');;background-size:22px;background-repeat:no-repeat;"></button>
			</div>

	</div>

	<div class="board">
		<div class="boardhead">
			<div style="width:49%;height:20px;float:left">
				<table style="color:#fff;line-height:140%;"><tr><td><b>&nbsp;&nbsp;강의팁과 질문</b></td></tr></table>
			</div>
			<div style="width:49%;height:20px;float:left">
				<a href="./suwon_classwrite.php">
				<table style="">
					<tr>
					<td style="width:47%;"></td>
					<td style="width:52%;border:1px solid;line-height:100%;background-color:#fff;border-radius:8px;padding:2%;border:none;padding-left:6%;">
						<img src="./pic/boardwrite.png" style="width:16%"/>
						<font size="3px" color="#595757" style="font-family: 'Nanum Gothic', serif;">글쓰기</font>
					</td>
					<td style="width:1%;"></td>
					</tr>
				</table>
				</a>
			</div>
		</div>

		<div class="boardbody">	
<!-------------------------------------------->	
<table style="width:100%;cellspacing=1;border-collapse:collapse;table-layout:fixed;">
<?php
if(@$_GET["page"] && @$_GET["page"] > 0){
    $page = $_GET["page"];
}
else{
    $page = 1;
}
$page_row = 12;
$page_scale = 3;
$paging_str = "";
$sql = "select count(*) as cnt from tb_board4";
$total_count = sql_total($sql);
$paging_str = paging($page, $page_row, $page_scale, $total_count);
$from_record = ($page - 1) * $page_row;

$query = "select * from tb_board4 order by b_num desc, b_reply asc limit ".$from_record.", ".$page_row;
$result = mysql_query($query, $connect);
$i = 0;
while($data = mysql_fetch_array($result))
	{
	$count="select count(*) from re4 where cnum='".$data["b_idx"]."';";
	$cq=mysql_query($count, $connect);
	$cresult=mysql_fetch_array($cq);
?>

	<tr>
		<td  style="width:87%;align:left;background-color:#fff;padding:3px;padding-left:7px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;border-bottom:1px solid #ccc;">
			<!--inner table-->
			<table style="width:100%;height:100%;table-layout: fixed;" onClick="location.href='./suwon_classboard_view.php?b_num=<?=$data["b_num"]?>&page=<?=$page?>'">
			<tr>
				<td style="height:32px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">
					
					<font  size="3%"><b><?=$data["b_title"]?></b></font>&nbsp;
				</td>
			</tr>
			<tr>
				<td><font size="1%" style="font-family: 'Nanum Gothic', serif;color:#727171">
				 <?=substr($data["b_regdate"],0,11)?>&nbsp;|&nbsp;&nbsp;조회 <?=$data["view"]?></font>
				</td>
			</tr>
			</table>
		</td>
		<td style="width:13%;padding-right:4%;colspan:2;border-bottom:1px solid #ccc;" onClick="location.href='./suwon_classboard_view.php?b_num=<?=$data["b_num"]?>&page=<?=$page?>'">
				<?php
				if($cresult[0]>0)
				{
				?>
				<div style="width:30px;height:30px;text-align:center;line-height:150%;background-image: url('./pic/comment.png');background-repeat:no-repeat;padding-bottom:6px;">
					
					<font size="2%" style="color:#0689FF;font-family: 'Nanum Gothic', serif;"><b><?=$cresult[0]?></b></font>
				</div>	
		</td>
				<?php
				}
			    $i++;
	}
	?>
	</tr>
</table>
<table style="width:100%;padding:3%;background-color:#ccc;">
    <tr>
        <td align="center"><font size="4%" style="font-family: 'Nanum Gothic', serif;"><?=$paging_str?></font></td>
    </tr>
</table>
<!-------------------------------------------->	
		</div>
	</div>

</div>

</body>
</html>
