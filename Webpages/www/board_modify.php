<!-- 서버&웹 개발자 : 조영호-->
<!-- 저작권이 보호받는 페이지입니다 -->
<?php
@session_start();
include ("./include.php");
if(!$_SESSION["user_id"]){
    ?>
    <script>
        alert("로그인 하셔야 합니다.");
        location.replace("board_login.php");
    </script>
    <?php
}
$sql = "select * from tb_board where b_idx = '".$_GET['b_idx']."' ";	
$result = sql_query($sql);
$data = mysql_fetch_array($result);
if(!$data["b_idx"]){
    ?>
    <script>
        alert("존재하지 않는 글입니다");
        history.back();
    </script>
    <?php
}
if($data["m_id"] != $_SESSION["user_id"]){
    ?>
    <script>
        alert("본인의 글이 아닙니다.");
        history.back();
    </script>
    <?php
}
?>
<form name="bWriteForm" method="post" action="./board_modify_save.php" style="margin:0px;">
<input type="hidden" name="b_idx" value="<?=$data["b_idx"]?>">
<table style="width:100%;height:70%;">
    <tr>
        <td align="center" valign="middle" style="width:20%;height:5%;background-color:#22304e;"> <font size="2%" color="white"><b>글제목</td>
        <td align="left" valign="middle" style="width:80%;height:20%;border:1px #ddd solid;"><input type="text" name="b_title" style="width:100%;height:100%;font-size:100%; color:#172134;font-family:'Hanna',serif;" value="<?=$data["b_title"]?>"></td>
    </tr>
    <tr>
        <td align="center" valign="middle" style="width:20%;height:5%;background-color:#22304e;"> <font size="2%" color="white"><b>글내용</td>
        <td align="left" valign="middle" style="width:80%;height:70%;border:1px #ddd solid;">
		<textarea name="b_contents" style="width:100%;height:100%; color:#172134;"><?=$data["b_contents"]?></textarea>
        </td>
    </tr>
	<tr>
        <td align="center" valign="middle" colspan="2">
		<input style="width:20%;background-color:#22304e;color:#fff8f2;border:1px solid #22304e;font-family:'Hanna',serif;padding:2px" type="button" value=" 수정확인 " onClick="write_save();">&nbsp;&nbsp;&nbsp;
		<input style="width:20%;background-color:#22304e;color:#fff8f2;border:1px solid #22304e;font-family:'Hanna',serif;padding:2px" type="button" value=" 뒤로가기 " onClick="history.back();"></td>
    </tr>
</table>
</form>
<script>
function write_save()
{
    var f = document.bWriteForm;
    if(f.b_title.value == ""){
        alert("글제목을 입력해 주세요.");
        return false;
    }
    if(f.b_contents.value == ""){
        alert("글내용을 입력해 주세요.");
        return false;
    }
    f.submit();
}
</script>