<?
include ("./sellboard_lib.php");
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);
?>
<head>
  <title>수원톡톡</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
 
<style type="text/css">
html,body { 
	margin:0;
	padding:0;
	width:100%;
	height:100%;
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
}
a:link{
	text-decoration:none;
	color:#000;
}
a:visited{
	color:#000;
}
a:active{
	color:#0689FF;
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
	margin-right:9%;
}

.board{
	width:100%;
	height:81%;
	margin-top:-1%;
}
.boardhead{
	background-color:#898989;
	color:#fff;
	width:100%;
	height:7%;
	font-size:87%;
	padding-top:2%;
	padding-bottom:1%;
}
.boardbody{
	background-color:#fff;
	width:100%;
	height:92%;

}
</style>
</head>

<body id="top">
	<?
	include("./suwon_include.html");
	include("./suwon_include_button.php");
	?>

	<div class="board">
		<div class="boardhead">
			<div style="width:49%;height:20px;float:left">
				<table style="color:#fff;line-height:140%;"><tr><td><b>&nbsp;검색결과</b></td></tr></table>
			</div>
			<div style="width:49%;height:20px;float:left">
				<a href="./suwon_boardwrite.php">
				<table style="">
					<tr>
					<td style="width:47%;"></td>
					<td style="width:43%;border:1px solid;line-height:100%;background-color:#fff;border-radius:8px;padding:2%;border:none;">
						<img src="./pic/boardwrite.png" style="width:16%"/>
						<font size="3px" color="#595757">글쓰기</font>
					</td>
					<td style="width:10%;"></td>
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
$page_row = 100;
$page_scale = 3;
$paging_str = "";
$sql = "select count(*) as cnt from tb_board5 where b_title like '%".$_GET['sell']."%';";
$total_count = sql_total($sql);
$paging_str = paging($page, $page_row, $page_scale, $total_count);
$from_record = ($page - 1) * $page_row;

$query = "select * from tb_board5 where b_title like '%".$_GET['sell']."%' order by b_num desc, b_reply asc limit ".$from_record.", ".$page_row;
$result = mysql_query($query, $connect);

	if(mysql_num_rows($result)==0){
		?>
		<center>
		<img src="./pic/noresult.png" style="width:50%;margin-top:20%;" />
		</center>
		<?
	}

$i = 0;
while($data = mysql_fetch_array($result))
	{
	$count="select count(*) from re5 where cnum='".$data["b_idx"]."';";
	$cq=mysql_query($count, $connect);
	$cresult=mysql_fetch_array($cq);
?>

	<tr>
		<td style="width:90%;height:60px;align:left;background-color:#fff;padding:3px;padding-left:7px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;border-bottom:1px solid #ccc;">
			<!--inner table-->
			<table style="width:100%;height:100%;table-layout: fixed">
			<tr>
				<td style="overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">
					<a href="./suwon_sellboard_view.php?b_num=<?=$data["b_num"]?>&page=<?=$page?>">
					<font size="2%"><b><?=$data["b_title"]?></b></font></a>&nbsp;
				</td>
			</tr>
			<tr>
				<td><font size="1%" color="#aaa">
					<?=substr($data["b_regdate"],0,11)?>&nbsp;&nbsp;|&nbsp;&nbsp;조회 <?=$data["view"]?></font>
				</td>
			</tr>
			</table>
		</td>
		<td style="width:10%;padding-right:1%;colspan:2;border-bottom:1px solid #ccc;">
				<?php
				if($cresult[0]>0)
				{
				?>
				<div style="width:100%;height:60%;text-align:center;line-height:150%;background-image: url('./pic/comment.png');background-repeat:no-repeat;">
					
					<font size="3%" style="color:#0689FF"><?=$cresult[0]?></font>&nbsp;
				</div>		
		</td>
				<?php
				}
			    $i++;
	}
	?>
	</tr>
</table>
<!-------------------------------------------->	
		</div>
	</div>

</div>
<div style="position:fixed;bottom:2%;right:2%;">
	<a href="#top">
	<img src="./pic/goup.png" style="width:40px;height:40px;" id="1st" onClick="change1()"></a>

</div>
</body>
</html>
<script>
function change1(){
	var image= document.getElementById('1st');
		image.src="./pic/goup1.png";
		setTimeout(function(){
			image.src="./pic/goup.png";
		},500);
}
</script>