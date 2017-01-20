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
	overflow:hidden;
}
button{
	background-color:#fff;
	border:none;
	width:22%;
	height:80%;
	margin-top:5px;
	border-radius:5px;
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
	border:1px solid;
	width:100%;
	height:90%;
}
.bodyhead{
	width:80%;
	height:10%;
	margin-left:10%;
	margin-bottom:0;
}
.board{
	width:100%;
	height:85%;
}
.boardhead{
	background-color:#666;
	color:#fff;
	width:100%;
	height:6%;
	font-size:87%;
	padding-left:5px;
	padding-top:3%;
}
.boardbody{
	background-color:#fff;
	width:100%;
	height:89%;
	padding-right:5px;

}
</style>
</head>

<body>
	<?
	include("./suwon_include.html");
	include("./suwon_include_button.php");

	?>

<div class="bodydiv">
	<div class="board">
		<div class="boardhead">
			<div style="position:absolute;top:20%;">검색결과</div>
				<a href="./suwon_boardwrite.php">
				<table style="width:22%;margin-top:-1%;border:none;border-radius:8px;background-color:white;float:right;margin-right:5%"><tr>
					<td style="width:20%;">
						<img src="./pic/boardwrite.png" style="width:100%;margin-left:30%"/>
					</td>
					<td style="width:70%;text-align:center"><font size="2">글쓰기</font>
					</td></tr>
				</table></a>
		</div>

		<div class="boardbody">	
<!-------------------------------------------->	
<table style="width:100%;height:100%;cellspacing=1;border-collapse:collapse;table-layout:fixed;">
<?php
if(@$_GET["page"] && @$_GET["page"] > 0){
    $page = $_GET["page"];
}
else{
    $page = 1;
}
$page_row = 7;
$page_scale = 3;
$paging_str = "";
$sql = "select count(*) as cnt from tb_board2 where b_title like '%".$_GET['free']."%';";
$total_count = sql_total($sql);
$paging_str = paging($page, $page_row, $page_scale, $total_count);
$from_record = ($page - 1) * $page_row;

$query = "select * from tb_board2 where b_title like '%".$_GET['free']."%' order by b_num desc, b_reply asc limit ".$from_record.", ".$page_row;
$result = mysql_query($query, $connect);
$i = 0;
while($data = mysql_fetch_array($result))
	{
	$count="select count(*) from re2 where cnum='".$data["b_idx"]."';";
	$cq=mysql_query($count, $connect);
	$cresult=mysql_fetch_array($cq);
?>

	<tr>
		<td style="width:90%;align:left;background-color:#fff;padding:3px;padding-left:7px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">
			<!--inner table-->
			<table style="width:100%;height:100%;table-layout: fixed">
			<tr>
				<td style="overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">
					<a href="./suwon_freeboard_view.php?b_idx=<?=$data["b_idx"]?>&page=<?=$page?>">
					<font size="2%"><?=$data["b_title"]?></font></a>&nbsp;
				</td>
			</tr>
			<tr>
				<td><font size="1%" color="#aaa">
					<?=substr($data["b_regdate"],0,11)?>| 조회 <?=$data["view"]?></font>
				</td>
			</tr>
			</table>
		</td>
		<td style="width:10%;padding-right:1%;colspan:2;">
				<?php
				if($cresult[0]>0)
				{
				?>
				<div style="border:1px #ccc solid;width:100%;text-align:center;margin-right:10%;padding-top:6%;padding-bottom:6%;background-image: URL('./pic/go.png');"><font size="2%"><?=$cresult[0]?></font></div>	
		</td>
				<?php
				}
			    $i++;
	}
	?>
	</tr>
</table>
<table style="width:100%;">
    <tr>
        <td align="center"><font size="3%"><?=$paging_str?></font></td>
    </tr>
</table>
<!-------------------------------------------->	
		</div>
	</div>

</div>

</body>
</html>
