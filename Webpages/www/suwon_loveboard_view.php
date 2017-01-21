<?
@session_start();
include ("./loveboard_lib.php");
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);

$insertq="update tb_board3 set view=view+1 where b_num='".$_GET['b_num']."' ";
$insertr= sql_query($insertq);
$insertb="update tb_board3 set best=best+1 where b_num='".$_GET['b_num']."' ";
$insertb= sql_query($insertb);

?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <title>수원톡톡</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<!--산세리프 폰트-->
<link href='http://fonts.googleapis.com/earlyaccess/notosanskr.css' rel='stylesheet' type='text/css'> 
<style type="text/css">
html,body { 
	margin: 0px;
	padding: 0px;
		word-break:break-all;

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
	width:100%;
	height:30px;
	color:#595757;
	border:#ccc 1px solid;
	margin:0;
	padding:0;
	border-radius:5px;
	outline:none;
	-webkit-appearance:none;
}
a:link{
	color:#595757;
	text-decoration:none;
	font-size:70%;
}
a:visited{
	color:#595757;
}
a:active{
	color:#595757;
}

.bodydiv{
	background-color:#fff;
	width:100%;
	height:90%;
}
.board{
	width:100%;
	height:85%;
}
.name{
	padding-left:3%;
}
.listBody{
	margin-left:3%;
	margin-right:3%;
}
</style>
</head>

<body id="top">
	<?
	include("./suwon_include.html");
	include("./suwon_include_button.php");
	?>

<div class="bodydiv">
	<div class="board">
		<div class="boardbody">	
<!-------------------------------------------->	
<?
$sql = "select * from tb_board3 where b_idx = '".$_GET["b_num"]."' ";
$result = sql_query($sql);
$data = mysql_fetch_array($result);
//데이터없을때 뒤로가기
if(!$data[0]){
	?>
	<script>
		alert("글이 없습니다");
		history.back();
	</script>
	<?
}
?>
<table style="width:100%;height:60%;background-color:#fff">
    <tr>
        <td style="width:70%;height:20%;padding:0;padding-left:5%;">
			<font size="3%" style="font-family: 'Nanum Gothic', serif;color:#595757;"><b><?=$data['b_title']?></b>
		</td>
        <td align="left" style="width:30%;">
			<font size="1%" style="font-family: 'Noto Sans KR', sans-serif;color:#9FA0A0">
				<!--ip출력-->
				<?
				if(strlen(substr($data["ip"],0,7))=='7'){?>
				 <?
				 echo substr($data["ip"],0,10)?>.XX</td>
				<?
				}else if(strlen(substr($data["ip"],0,7))=='6'){?>
				 <?
				 echo substr($data["ip"],0,9)?>X.XX</td>
				<?
				}else if(strlen(substr($data["ip"],0,7))=='5'){?>
				 <?
				 echo substr($data["ip"],0,8)?>XX.XX</td>
				<?
				}?>
		</td>
    </tr>
    <tr>
        <td colspan="2" align="left" style="height:80%;padding-left:5%;padding-right:5%;vertical-align:top;line-height:1.5em">
			<font size="3%" style="font-family: 'Nanum Gothic', serif;"><?=$data["b_contents"]?></font>
		</td>
    </tr>
</table>

<div style="background-color:#fff">
	<div id="flip" style="width:94%;border-top:1px #aaa solid;border-bottom:1px #aaa solid;margin-left:2%;padding:1%;">
		<table style="width:100%;"><tr>
		<td style="width:35%;">
			<font size="2" align="left">댓글목록</font>
		</td>
		<td style="width:65%;text-align:right;">
			<font size="2" color="#898989" style="font-family: 'Noto Sans KR', sans-serif;"><?=substr($data["b_regdate"],0,10)?>&nbsp;&nbsp;|&nbsp;&nbsp;조회 <?=$data["view"]?></font>
		</td></tr>
		</table>
	</div>

	<div id="panel">
		<?php
		$sql="select * from re3 where cnum='".$data["b_idx"]."' order by cindex";
		$result=sql_query($sql, $connect);
		
		while($com=mysql_fetch_array($result)){
		?>
		<div width="100%">
			<li style=" list-style:none; padding-left:8px"> 
				<div class="name">
					<table>
						<tr>
							<td rowspan="2" style="width:10%;padding-top:3%;padding-right:2%;">
								<img src="./pic/people1.png" style="width:100%;"/>
							</td>
							<td>
								<font style="font-size:2%;width:20%;color:#898989;font-family: 'Noto Sans KR', sans-serif;">
								<b><?echo substr($com["ip"],0,10)?>.XX</b></font> 
								<font style="font-size:1%;width:20%;color:gray;">
								<?=substr($com["ctime"],5,11)?></font>

								<?php
								if($_SERVER["REMOTE_ADDR"]==$com["ip"]){
								?>
								<input type="button" value="x" style="width:15px;height:15px;color:red;border:0px;background-color:#fff;" onClick="delete_comment('<?=$com["cname"]?>', '<?=$com["cindex"]?>')"></font>
								<?php
								}
								?>

								<!--관리자 댓글 삭제 모드-->
								<?php
								if($_SESSION["m_name"] =='관리자'){
								?>
								<font color="red" size="1%">
								<input type="button" value="x" style="width:15px;height:15px;color:red;border:0px;background-color:#fff;" onClick="delete_comment('<?=$com["cname"]?>', '<?=$com["cindex"]?>')"></font>
								<?php
								}
								?>
							</td>
						</tr>
					<tr>
						<td>
							<font style="font-size:90%;width:20%;font-family: 'Nanum Gothic', serif;">
							<?echo stripslashes($com["cc"])?></font>
						</td>
					</tr>
				</table>
				</div>
				<hr color="#DCDDDD" noshade size=1>
			</li>
		</div>
	<?php
	}
	?>
	<hr style="margin:2%;border:1px solid #fff">
	</div>
</div>

<form method="post" name="formcomment" action="suwon_lovecomment_save.php"  style="background-color:#fff">
<table style="width:100%;margin:0;">
			<tr>
			<td style="width:80%;height:33px">
				<input name="b_comment" id="cs" type="text" value=" 댓글을 입력하세요" onfocus="this.value=''" style="width:95%;height:100%;font-size:90%;margin-left:5%;padding-left:2%;-webkit-appearance:none;background-color:#EFEFEF;font-family: 'Nanum Gothic', serif;" size="35" autocomplete="off"></input>
			</td>
			<td><input id="send" type="button" value=" 게시 " onClick="sendcomment();" style="width:90%;background-color:#898989;color:#fff;border:none;padding:2px;-webkit-appearance:none;">
			</td>
			<td><input type="hidden" name="idxs" value="<? echo $data["b_idx"]?>"></td>
			<input type="hidden" name="url" value="<? echo $_SERVER["REQUEST_URI"]?>">
			<input type="hidden" name="ip" value="<? echo $_SERVER['REMOTE_ADDR']?>">
			</tr>
</table>
</form>

<table style="width:100%;height:11%;margin-top:-3%;margin-bottom:0%;background-color:#DCDDDD;">
    <tr>
		<td width="34%" align="center" style="padding-left:1%;">
			<a href="./suwon_loveboard_view.php?b_num=<?=$data["b_num"]+1?>">
				<img src="./pic/up.png" style="width:45px;"/>
			</a>
			&nbsp;
			<a href="./suwon_loveboard_view.php?b_num=<?=$data["b_num"]-1?>">
				<img src="./pic/down.png" style="width:45px;margin-top:0%;"/>
			</a>
		</td>

        <td width="32%" align="center" valign="middle">
        <input style="width:55%;height:86%;background-color:#898989;color:#fff;border:1px solid #fff;padding-top:2px;padding-bottom:2px;-webkit-appearance:none;" type="button" value=" 목록 " onClick="location.href='./suwon_loveboard.php?page=<?=$_GET["page"]?>';">
        </td>
		<td width="33%">
		<?php
		if($_SERVER['GEOIP_ADDR'] == $data["ip"] || $_SESSION["user_name"]== '관리자'){
		?>
        <input style="width:40px;background-color:#898989;color:#fff;border:none;padding:2px;border:1px solid #fff;padding-bottom:4px;" type="button" value="삭제" onClick="board_delete('<?=$data["b_idx"]?>');">
        <?php
		}
		if($_SERVER['GEOIP_ADDR'] == $data["ip"]){
		?>
        <input style="width:40px;background-color:#898989;color:#fff;border:none;padding:2px;border:1px solid #fff;padding-bottom:4px;" type="button" value="수정" onClick="location.href='./suwon_lovemodify.php?b_idx=<?=$data["b_idx"]?>';">
        <?php
		}
		?>
		</td>
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
function board_delete(b_idx)
{
    if(confirm('글을 삭제 하시겠습니까?'))
		location.href='./suwon_lovedelete.php?b_idx=' + b_idx;
}
function sendcomment(){
	var s=document.formcomment;
	var k=document.getElementById('cs').value;
	if(k=='')
	{	alert("댓글을 입력해 주세요");
		return false;
	}
	s.submit();
}
function delete_comment(cname, cindex)
{
	if(confirm("삭제 하시겠습니까?"))
		location.href='suwon_loveboard_delete_comment.php?cname='+cname+'&cindex='+cindex;
}

function change1(){
	var image= document.getElementById('1st');
		image.src="./pic/goup1.png";
		setTimeout(function(){
			image.src="./pic/goup.png";
		},500);
}
</script>