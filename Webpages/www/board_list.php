<!-- 서버&웹 개발자 : 조영호 -->
<!-- 저작권이 보호받는 페이지입니다 -->
<?php
@session_start();
include ("./include.php");
?>

<br/>
<head>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/jejugothic.css"><style>
a:link{color:black;}
a:visited{color:black;}
.b{border-collapse: collapse;}
#z {color:#f38a8a;}
a {text-decoration:none;}
</style></head>
<font style=" color:#08087f;font-family:'Hanna',serif;" size="2%">&nbsp;강의평가</font>
<table class="cc" cellspacing="1" style="width:100%;border-collapse:collapse;table-layout:fixed">
    <tr>
        <td align="center" valign="middle" style="width:10%;height:30px;background-color:#ffffff;border-top:1px solid black;font-family:'Hanna',serif;"> <font size="2%" color="#22304e">번호</td>
        <td align="center" valign="middle" style="width:50%;height:30px;background-color:#ffffff;border-top:1px solid black;font-family:'Hanna',serif;"> <font size="2%" color="#22304e">글제목</td>
        <td align="center" valign="middle" style="width:20%;height:30px;background-color:#ffffff;border-top:1px solid black;font-family:'Hanna',serif;"> <font size="2%" color="#22304e">글쓴이</td>
        <td align="center" valign="middle" style="width:14%;height:30px;background-color:#ffffff;border-top:1px solid black;font-family:'Hanna',serif;"> <font size="2%" color="#22304e">작성일</td>
    </tr>
<?php
if(@$_GET["page"] && @$_GET["page"] > 0){
    $page = $_GET["page"];
}
else{
    $page = 1;
}
$page_row = 10;
$page_scale = 10;
$paging_str = "";
$sql = "select count(*) as cnt from tb_board";
$total_count = sql_total($sql);
$paging_str = paging($page, $page_row, $page_scale, $total_count);
$from_record = ($page - 1) * $page_row;
$query = "select * from tb_board order by b_num desc, b_reply asc limit ".$from_record.", ".$page_row;
$result = mysql_query($query, $connect);
$i = 0;
while($data = mysql_fetch_array($result)){
	$reply_str = "";
    $reply_depth = strlen($data["b_reply"]);
$count="select count(*) from re where cnum='".$data["b_idx"]."';";
$cq=mysql_query($count, $connect);
@$cresult=mysql_fetch_array($cq);

	if($data["m_name"]=='관리자'){
?>
	
    <tr class="b" style="font-family:'Hanna',serif">
        <td height="25px" align="center" valign="middle" style="background-color:#ffffff;"><font size="1%"><?=($total_count - (($page - 1) * $page_row) - $i )?></td>
		<td height="25px" align="left" valign="middle" style="background-color:#ffffff;padding:3px;padding-left:7px">
		<font size="2%" color="black"><?=$reply_str?>
		<a href="./board_view.php?b_idx=<?=$data["b_idx"]?>&page=<?=$page?>"><font color="black"><?=$data["b_title"]?></font></a>&nbsp;<font size="1%" color="f38a8a">
		<?php
		if($cresult[0]>0){
		?>
		+<font size="1%"><?=$cresult[0]?></font>
		<?php
		}
		?></td>
		<td id="z" height="25px" align="center" valign="middle" style="background-color:#ffffff;"><font size="1%"><?=$data["m_name"]?></td>
        <td height="25px" align="center" valign="middle" style="background-color:#ffffff;"><font size="1%"><?=substr($data["b_regdate"],5,6)?></td>
    </tr>
	<?php
	}
	else{
	?>
	<tr class="b" >
        <td height="25px" align="center" valign="middle" style="background-color:#ffffff;"><font size="1%"><?=($total_count - (($page - 1) * $page_row) - $i )?></td>
		<td height="25px" align="left" valign="middle" style="background-color:#ffffff;padding:3px;padding-left:7px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">
		<font size="2%" color="black"><?=$reply_str?>
		<a href="./board_view.php?b_idx=<?=$data["b_idx"]?>&page=<?=$page?>"><font color="black"><?=$data["b_title"]?></font></a>&nbsp;<font size="1%" color="f38a8a">
		<?php
		if($cresult[0]>0){
		?>
		+<font size="1%"><?=$cresult[0]?></font>
		<?php
		}
		?></td>
		<td height="25px" align="center" valign="middle" style="background-color:#ffffff;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;"><font size="1%"><?=$data["m_name"]?></td>
        <td height="25px" align="center" valign="middle" style="background-color:#ffffff;"><font size="1%"><?=substr($data["b_regdate"],5,6)?></td>	
<?php
	}
    $i++;
}
if($i == 0){
?>
    <tr>
        <td align="center" valign="middle" colspan="4" style="height:50px;background-color:#FFFFFF;">자료가 하나도 없습니다.</td>
    </tr>

<?php
}
?>
</table>
<br>
<table colspan="2" style="width:100%;height:50px;">
    <tr>
        <td colspan="2" align="center" valign="middle" style="font-family: 'Jeju Gothic', sans-serif;font-size:12px;"><br><?=$paging_str?></td>
    </tr>
	<tr>
		<td align="right" valign="middle;"><br>
			<input style="width:50%;background-color:#22304e;color:#fff8f2;border:1px solid #22304e;font-family:'Hanna',serif;padding:2px;" type="button" value=" 글쓰기 " onClick="location.href='./board_write.php';">&nbsp;
		</td>
        <td align="left" valign="middle"><br>
		&nbsp;<input style="width:50%;background-color:#22304e;color:#fff8f2;border:1px solid #22304e;font-family:'Hanna',serif;padding:2px;" type="button" value=" 홈으로 " onClick="gotohome();">
		</td>
    </tr>
</table>
 <script>
	function gotohome(){
	location.replace("./home.php");
	}
 </script>
<?php
include("include2.php");
?>