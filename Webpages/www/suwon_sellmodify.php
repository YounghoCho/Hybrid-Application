<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

<head>
<style>
html,body { 
	margin: 0px;
	padding: 0px;
	overflow:hidden;
}

button{
	background-color:#fff;
	border:none;
	width:22%;
	height:75%;
	margin-top:8px;
	border-radius:5px;
}
</style>
</head>
<body>
	<?
	include("./suwon_include.html");
	include("./suwon_include_button.php");
	
	include ("./sellboard_lib.php");
	$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);

	$sql = "select * from tb_board5 where b_idx = '".$_GET['b_idx']."' ";	
	$result = sql_query($sql);
	$data = mysql_fetch_array($result);

	?>
	<form name="bWriteForm" method="post" action="./suwon_sellmodify_save.php" style="margin:0px;">
	<input type="hidden" name="b_idx" value="<?=$data["b_idx"]?>">
	<table style="width:100%;height:90%;border:none;">
		<tr>
			<td align="left" valign="middle" style="width:80%;height:10%;border-bottom:1px solid #aaa;">
				<input id="t" type="text" name="b_title" style="width:100%;height:100%;font-size:120%;color:#898989;font-weight:bold;border:none;padding-left:4%;" value="<?=$data["b_title"]?>">
			</td>
		</tr>
		<tr>
			<td align="left" valign="middle" style="width:80%;height:60%;">
			<textarea id="ccc" name="b_contents" style="width:100%;height:100%;font-size:100%;color:#898989;border:none;padding-left:4%;"><?=str_replace('<br />', '',$data["b_contents"])?></textarea>
			</td>
		</tr>
		<tr>
        <td align="center" valign="middle" colspan="2">
		<input style="width:25%;height:25%;color:#fff;background-color:#898989;border:1px solid #898989;border-radius:8px;padding:2px;-webkit-appearance:none;" type="button" value=" 수정확인 " onClick="write_save();">
		<input style="width:25%;height:25%;color:#fff;background-color:#898989;border:1px solid #898989;border-radius:8px;padding:2px;-webkit-appearance:none;" type="button" value=" 뒤로가기 " onClick="history.back();"></td>
    </tr>
	</table>
	</form>
</body>
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