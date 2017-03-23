<!-- 서버&웹 개발자 : 조영호 -->
<!-- 저작권이 보호받는 페이지입니다 -->
<?php
@session_start();

include ("./include.php");
$sql = "select * from tb_board where b_idx = '".$_GET["b_idx"]."' ";
$result = sql_query($sql);
$data = mysql_fetch_array($result);
if(!$data["b_idx"]){
    ?>
    <script>
        alert("존재하지 않는 글입니다.");
        history.back();
    </script>
    <?
}
?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("fast");
    });
});
</script>
</head>


<table cellspacing="1" align="center" style="width:98%;height:40%;background-color:#999999;border-collapse:collapse;border-top:1px solid #ccc;table-layout:fixed">
    <tr>
        <td align="center" valign="middle" style="width:20%;height:2%;background-color:#fffcfa;border-bottom:1px solid #ccc;"> <font size="2%" color="#22304e"><b>글제목</td>
        <td align="left" valign="middle" style="width:80%;background-color:#fffcfa;padding:5px;border-bottom:1px solid #dddddd;"><font size="1%" color="#172134"><b><?=$data["b_title"]?></td>
    </tr>
    <tr>
        <td align="center" valign="middle" style="width:20%;height:2%;background-color:#fffcfa;border-bottom:1px solid #ccc;"> <font size="2%" color="#22304e"><b>작성자</td>
        <td align="left" valign="middle" style="width:80%;background-color:#fffcfa;padding:5px;border-bottom:1px solid #ccc;"> <font size="1%" color="#172134"><b><?=$data["m_name"]?></td>
    </tr>
    <tr>
        <td align="center" valign="middle" style="width:20%;height:2%;background-color:#fffcfa;border-bottom:1px solid #ccc;"> <font size="2%" color="#22304e"><b>작성일</td>
        <td align="left" valign="middle" style="width:80%;background-color:#fffcfa;padding:5px;border-bottom:1px solid #ccc;"> <font size="1%" color="#172134"><b><?=substr($data["b_regdate"],0,16)?></td>
    </tr>
    <tr>
        <td align="center" valign="middle" style="width:20%;height:34%;background-color:#fffcfa;border-bottom:1px solid #dddddd;"> <font size="2%" color="#22304e"><b>글내용</td>
        <td align="left" valign="top" style="width:80%;background-color:#fffcfa;padding:5px;border-bottom:1px solid #ccc;"> <font size="2%" color="#172134"><b><?=nl2Br($data["b_contents"])?></td>
    </tr>
</table>

<br>

		<div id="flip"><font style="font-size:13px;width:20%;font-family:'Hanna',serif;color:#22304e;">댓글 목록</font></div>
		<div id="panel">
			<?php
		$sql="select * from re where cnum='".$data["b_idx"]."' order by cindex";
		$result=sql_query($sql, $connect);
while($com=mysql_fetch_array($result)){
		?>

		<div width="100%">

					<li style=" list-style:none; padding-left:10px"> 
						<div class="name">
						<font style="font-size:60%;width:20%;font-family:'Hanna',serif;color:#2230bf">
						<b><?=$com["cname"]?></b></font> 
						<font style="font-size:1%;width:20%;color:gray;">
						<?=substr($com["ctime"],5,11)?></font>
						
						<?php
						if($_SESSION["user_name"]==$com["cname"]){
						?>
						<font color="red" size="1%">
						<input type="button" value="x" style="color:red;border:0px;background-color:#fff8f2;" onClick="delete_comment('<?=$com["cname"]?>', '<?=$com["cindex"]?>')"></font>
						<?php
						}

						if(@$_SESSION["user_id"] =='관리자'){
						?>
						<font color="red" size="1%">
						<input type="button" value="x" style="color:red;border:0px;background-color:#fff8f2;" onClick="delete_comment('<?=$com["cname"]?>', '<?=$com["cindex"]?>')"></font>
						<?php
						}
						?>
						</div>
						<div class="listBody">
						<font style="font-size:90%;width:20%;font-family:'Jeju Gothic',sans-serif;">&nbsp;
						<?=$com["cc"]?></font>
						</div>
						<hr style="margin:0%">
					</li>
		</div>
<?php
}
?>
<br>
</div>
<?php
	if(@$_SESSION["user_id"]){
?>
<form method="post" name="formcomment" action="comment_save.php">
<table>
			<tr>
			<td>
				<font face="'Hanna',serif" size="1%" style="color:#22304e;">&nbsp;&nbsp;&nbsp;<b><?=@$_SESSION["user_name"]?> : </b></font>
			</td>
			<td style="height:33px"><input name="b_comment" id="cs" type="text" value="댓글을 입력하세요" onfocus="this.value=''" style="width:100%;height:100%;font-size:90%;" size="22" autocomplete="off"></input></td>
			<td><input id="send" type="button" value=" 작성 " onClick="sendcomment();" style="background-color:#22304e;color:white;border:1px solid #22304e;padding:2px;"><td>
			<td><input type="hidden" name="idxs" value="<? echo $data["b_idx"]?>"></td>
			<input type="hidden" name="url" value="<? echo $_SERVER["REQUEST_URI"]?>">
			</tr>
</table>
</form>
<?php
	}
?>
<table style="width:100%;height:50px;">
    <tr>
        <td align="center" valign="middle">
        <input style="width:20%;background-color:#22304e;color:#fff8f2;border:1px solid #22304e;font-family:'Hanna',serif;padding:2px" type="button" value=" 목록 " onClick="location.href='./board_list.php?page=<?=$_GET["page"]?>';">
        <?php
		?>
        <?php
		if(@$_SESSION["user_id"]){
		?>
        &nbsp;&nbsp;<input style="width:20%;background-color:#22304e;color:#fff8f2;border:1px solid #22304e;font-family:'Hanna',serif;padding:2px" type="button" value="글수정" onClick="location.href='./board_modify.php?b_idx=<?=$data["b_idx"]?>';">
        <?php
		}
		?>
        <?php
		if(@$_SESSION["user_id"] == $data["m_id"] || @$_SESSION["user_id"] =='관리자'){
		?>
        &nbsp;
		<input style="width:20%;background-color:#22304e;color:#fff8f2;border:1px solid #22304e;font-family:'Hanna',serif;padding:2px" type="button" value="삭제하기" onClick="board_delete('<?=$data["b_idx"]?>');">
        <?php
		}
		?>
        </td>
    </tr>
</table>

<script>
function board_delete(b_idx)
{
    if(confirm('글을 삭제 하시겠습니까?'))
		location.href='./board_delete.php?b_idx=' + b_idx;
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
	if(confirm('댓글이 지워집니다.'))
		location.href='delete_comment.php?cname='+cname+'&cindex='+cindex;
}
</script>
<?php
include("include2.php");
?>
</html>