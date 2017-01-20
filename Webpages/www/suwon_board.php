<?
include ("./freeboard_lib.php");
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);
?>
<head>
  <title>수원톡톡</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<!--고딕-->
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/earlyaccess/nanumgothic.css'>

<style type="text/css">
html,body { 
	margin: 0px;
	padding: 0px;
	overflow:hidden;
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
	width:142%;
	height:30px;
	color:#B5B5B6;
	margin:0;
	padding:0;
	border-radius:5px;
	border:none;
	outline:none;
}
table tr td{
	font-family: 'Nanum Gothic', serif;
}
a:link{
	text-decoration:none;
	color:#3E3A39;
}
a:visited{
	color:#3E3A39;
	text-decoration:none;
}
a:active{
	color:#3E3A39;
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
	height:7%;
	margin-left:4%;
	margin-bottom:-10;
}
.search{
	width:65%;
	height:8%;
	display:inline-block;
	float:left;
	margin-top:2%;
}
.go{	
	width:10%;
	display:inline-block;
	float:right;
	margin-right:9%;
	margin-top:1%;
}
.board{
	width:91%;
	height:43%;
	margin-left:4%;
	border-radius:5px;
	margin-top:6%;
}
.boardhead{
	background-color:#898989;
	width:100%;
	height:15%;
	font-size:87%;
	padding-left:5px;
	padding-top:5px;
	border-top-left-radius:5px;
	border-top-right-radius:5px;
}
.boardhead table{
	color:#fff;
}
.boardbody{
	background-color:#fff;
	width:100%;
	height:80%;
	padding-right:5px;
	border-bottom-left-radius:5px;
	border-bottom-right-radius:5px;
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
				<form name="sf" action="suwon_boardsearch.php" method="GET" autocomplete="on">
				<input name="free" type="text" size="30" value="검색어를 입력해주세요" onfocus="this.value=''" autocomplete="off" style="padding-left:6%;-webkit-appearance:none;font-family: 'Nanum Gothic', serif;">
			</div>
			<!--검색-->
			<div class="go">
				<button type="submit" style="border:none;width:30px;height:26px;bacground-color:#fff;margin-top:4;" ><img src="./pic/go.png" style="width:100%;"/></button>
			</div></form>
	</div>

<!--인기게시글-->
	<div class="board">
		<div class="boardhead">
			<table width="100%">
				<tr>
				<td width="10%"><b>BEST</b></td><td style="padding-top:1%;font-size:85%;"> 자유글</td>
				<td style="width:50%;text-align:right;padding-right:3%;padding-top:1%">
				</td>
				
				</tr>
			</table>
		</div>
		<div class="boardbody">
			<table style="width:100%;height:97%;table-layout: fixed;margin-left:2%;">
			<?
			//STACK
			//배열선언
			$arr=array();
			$sort=array();
			$temp;

			//10개 까지만 가져와서 best의 순위를 매깁니다.
			$query = "select * from tb_board2 order by b_num desc limit 0,10;";
			$result = mysql_query($query, $connect);
			//best만 push한다.               
			while($data = mysql_fetch_array($result)){	
				array_push($arr, $data[10]);
			}

			//내림차순 버블정렬
			for($i=0;$i<sizeof($arr);$i++){
				for($j=0; $j<sizeof($arr); $j++){
					if($arr[$i]>$arr[$j+1]){
						$temp=$arr[$i];
						$arr[$i]=$arr[$j+1];
						$arr[$j+1]=$temp;
					}
				}
			}
			//free출력
			for($i=1; $i<5; $i++){
				$query2="select * from tb_board2 where best='".$arr[$i]."';";
				$result2 = mysql_query($query2, $connect);
				$data2 = mysql_fetch_array($result2);
			
			?>
			<!--출력형태-->
			<tr>
				<td style="width:79%;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">
					<font size="2%" style="color:#3E3A39"><b>·&nbsp;
					<a href="./suwon_freeboard_view.php?b_num=<?=$data2["b_num"]?>&page=<?=$page?>">
					<?=$data2[5]?></b></font></a>&nbsp;
				</td>
				<td style="width:3%;">
				</td>
				<td style="width:18%">
					<font style="color:#898989;font-size:66%;">조회 <?=$arr[$i]?></font>
				</td>
			</tr>
			<?
			}
		
			?>		
			</table>
		</div>
	</div>






<!--최신게시글-->
	<div class="board" style="margin-top:1%;">
		<div class="boardhead">
		<table width="100%">
			<tr>
			<td width="10%">
				<b>NEW</b></td>
			<td style="padding-top:1%;font-size:85%;"> 게시글</td>
			<td style="width:50%;text-align:right;padding-right:3%;padding-top:1%">
			</td>
			</tr>
		</table>
	</div>
		<div class="boardbody">
			<table style="width:100%;height:97%;table-layout: fixed;margin-left:2%;">
			<?
			//최신 글들이 newest에 insert 되므로, 4개만 불러오면되.
			$query = "select * from newest order by b_num desc limit 0,4;";
			$result = mysql_query($query, $connect);
			
			for($i=1; $i<5; $i++){
				$data = mysql_fetch_array($result);
			?>
			<!--출력형태-->
			<tr>
				<td style="width:97%;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">
					<font size="2%" style="color:#3E3A39"><b>·&nbsp;
					<a href="./suwon_freeboard_view.php?b_num=<?=$data["b_num"]?>&page=<?=$page?>">
					<?=$data[5]?></b></font></a>&nbsp;
				</td>
				<td style="width:3%;">
				</td>
			</tr>
			<?
			}
		
			?>		
			</table>
		</div>
	</div>

</div>

</body>
</html>
