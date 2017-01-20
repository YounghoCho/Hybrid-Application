<!doctype html>
<html lang="en">
 <head>
<style>
html, body{
	margin:0;
	padding:0;
}
.head{
	background-color:#898989;
	width:100%;
	height:9%;
	margin:0;
	padding:0;
	border:none;
	outline:none;
}
#a, #a1, #a2, #a3{
	border-radius:8px;
	height:80%;
	width:100%;
	margin-bottom:10%;
	margin:0;
	padding:0;
}
</style>
</head>

<div class="head">
	<center>
		<table style="width:94%;height:100%;">
			<tr>
			<td style="width:24%;">
				<button id="a" onclick="changecolor()" style="outline: none;"><b><font size="2%" style="font-family: 'Nanum Gothic', serif;color:#3E3A39;">자유톡톡</button></td>
			<td style="width:24%;;">
				<button id="a1" onclick="changecolor1()" style="outline: none;"><b><font size="2%" style="font-family: 'Nanum Gothic', serif;color:#3E3A39;">취향저격</button></td>
			<td style="width:24%;">
				<button id="a2" onclick="changecolor2()" style="outline: none;"><b><font size="2%" style="font-family: 'Nanum Gothic', serif;color:#3E3A39;">강의꿀팁</button></td>
			<td style="width:24%;">
				<button id="a3" onclick="changecolor3()" style="outline: none;"><b><font size="2%" style="font-family: 'Nanum Gothic', serif;color:#3E3A39;">벼룩시장</button></td>
			</tr>
		</table>
	</center>
</div> 

<script>
function changecolor(){
document.getElementById('a').style.backgroundColor="#0689FF";
document.getElementById('a').style.color="#fff";
document.getElementById('a').style.border="2px solid #fff";

		setTimeout(function(){
		location.href='suwon_freeboard.php';		
		},100);
}
function changecolor1(){
document.getElementById('a1').style.backgroundColor="#0689FF";
document.getElementById('a1').style.color="#fff";
document.getElementById('a1').style.border="2px solid #fff";

		setTimeout(function(){
		location.href='suwon_loveboard.php';		
		},100);
}
function changecolor2(){
document.getElementById('a2').style.backgroundColor="#0689FF";
document.getElementById('a2').style.color="#fff";
document.getElementById('a2').style.border="2px solid #fff";

		setTimeout(function(){
		location.href='suwon_classboard.php';		
		},100);
}
function changecolor3(){
document.getElementById('a3').style.backgroundColor="#0689FF";
document.getElementById('a3').style.color="#fff";
document.getElementById('a3').style.border="2px solid #fff";

		setTimeout(function(){
		location.href='suwon_sellboard.php';		
		},100);
}
</script>
