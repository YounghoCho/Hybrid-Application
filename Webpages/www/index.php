<?
@session_start();
include ("./freeboard_lib.php");
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);

$black="select black_ip from blacklist;";
$black1=sql_query($black);
$black2=mysql_fetch_array($black1);

if($_SERVER["REMOTE_ADDR"]==$black2[0]){
	?>
	<script>
	location.href="suwon_blackout.html";
	</script>
	<?
}
if($_SESSION['user_name']=='관리자'){
	?>
	<button onclick="location.href='./suwon_admin.php'">관리자 페이지</button>
	<?
}
?>

<!--2016-12-30-->
<head>
  <title>수원톡톡</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<!-- 메인폰트는 고딕-->
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/earlyaccess/nanumgothic.css' >
  
<style>
html, body {
	padding:0px;
	margin:0px;
	overflow:hidden;
}
a:link{
	color:white;
}
a:visited{
	color:white;
}
button{
	background-color:rgba(255, 255, 255, 0);/*이렇게해야 배경색투명 조절됨*/
}
font{
	color:#595757;
	font-weight: bold;
}
.bodycontainer {
	height:100%;
}
.banner {
	padding-top:1%;
	height:30%;
	background-color:white;
}
.iconsection {
	height:62%;
	width:100%;
	background-color:#DCDDDD;
	margin-top:5%;
	margin-left:5%;
	margin-right:5%;
	margin-bottom:4%;
}
.iconsection div{
	height:30%;
	width:45%;
	float:left;
}
.iconsection div div{
	background-color:white;
	height:99%;
	width:99%;
	border:none;
	padding:0;
	margin:0;
	font-size:70%;
}
#rightradius{
	border-top-right-radius:8px;
}
#leftradius{
	border-top-left-radius:8px;
}
#bottomrightradius{
	border-bottom-right-radius:8px;
}
#bottomleftradius{
	border-bottom-left-radius:8px;
}
/*팝업 안의 div영역*/
.iconsection div div div{
	border:1px solid;
	border-radius:3px;
	width:80%;
	height:15%;
	background-color:#666;
	font-size:100%;
	margin-left:10%;
	padding-top:5%;
}

.iconsection div div button{
	margin:0;
	padding:0;
	margin-top:10%;
	border:none;
	outline:none;
}

.iconsection div div img{
	width:80px;
}
.nobutton{
	margin-top:10%;
}

/* Popup container - can be anything you want */
.popup {
    position: relative;
	background-color:#fff;
}

/* The Modal (background) */
.modal, .modal2, .modal3 {
    display:none; /* none by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.6); /* Black w/ opacity */
    padding-top: 60px;
	-webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}
#inner{
	height:33px;
	line-height:100%;
	border-radius:8px;
	border:none;
	margin-bottom:5%;
	background-color:#fff;
	color:black;
	box-shadow: 3px 1px 8px 1px lightgray;
	font-size:120%;
}
#pad{
	position:absolute;
	bottom:0;
	right:0;
	width:100%;
	height:70%;
	border:none;
	background-color:#EBEBEB;
	color:#595757;
	font-weight: bold;
}

#pad a div{
	color:#595757;
}
#pad2{
	position:absolute;
	bottom:0;
	right:0;
	width:100%;
	height:44%;
	border:none;
	background-color:#EBEBEB;
	color:#595757;
	font-weight: bold;
}
#pad2 a div{
	color:#595757;
}
#pad3{
	position:absolute;
	bottom:0;
	right:0;
	width:100%;
	height:44%;
	border:none;
	background-color:#EBEBEB;
	color:#595757;
	font-weight: bold;
}
#pad3 a div{
	color:#595757;
}
#cancel, #cancel2, #cancel3{
	border:none;
	background-color:#fff;
	color:#9fa0a0;
	border-radius:8px;
	height:33px;
	line-height:100%;
	box-shadow: 3px 1px 8px 1px lightgray;
	font-size:120%;
}
/* Add animation (fade in the popup)
@-webkit-keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}
@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1;}
} */
</style>
</head>

<body style="background-color:#ddd" height="100%">
<div class="bodycontainer">
	<?
	include("./suwon_include.html");
	?>
	<div class="banner">
		<center><img src="./pic/main_banner.png" style="width:85%;"/></center>	
	</div>

	<div class="iconsection">
		<!--1-->
		<div>
			<div id="leftradius"  class="popup">
				<table style="width:100%;height:80%;margin-top:5%;"><tr>
					<td style="width:32%;">
					</td>
					<td style="width:36%;">
						<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;margin-bottom:8%;">
						<img src="./pic/monitor.png" style="width:60px;background-color:#fff;" id="1st"/>
						<font size="2%">교내사이트</font>
						
						<span id="id01" class="modal">
						
						<div id="pad">
							<a href="http://m.suwon.ac.kr/"><div id="inner">홈페이지</div></a>
							<a href="http://portal.suwon.ac.kr/"><div id="inner">포털사이트</div></a>
							<a href="https://blackboard.suwon.ac.kr/"><div id="inner">블랙보드</div></a>
							<a href="http://ic.suwon.ac.kr/home-ko/"><div id="inner">국제대학</div></a>
							<div id="cancel" onclick="blackout()">취소</div>
						</div>						

						</span>
						
						</button>
		
					</td>
					<td style="width:32%;">
						<img src="./pic/popup.png" style="width:13px;margin-top:0%;margin-left:-17%;"/>
					</td></tr>	
				</table>	
			</div>
		</div>
		
		<!--2 popuptext부분은 사실 공간을 차지할뿐 hidden되어있다. 그래서 일반 범위를 넘어가서 스크롤이 생겨버린다.body에 overflow:hidden으로 넘어가는 부분을 짤라줬다.-->
		<div>
			<div id="rightradius" class="popup">
				<table style="width:100%;height:80%;margin-top:5%;"><tr>
					<td style="width:32%;">
					</td>
					<td style="width:36%;">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;margin-bottom:8%;">
						<img src="./pic/telbook.png" style="width:60px;background-color:#fff" id="2nd" onclick="change2()"/>
						
						<font size="2%">전화번호부</font>

						<span id="id02" class="modal2">

						<div id="pad2">
							<a href="./suwon_foodtel.php"><div id="inner">음식점 전화번호</div></a>
							<a href="./suwon_univtel.php"><div id="inner">교내 전화번호</div></a>
							<div id="cancel2" onclick="blackout2()">취소</div>
						</div>
						
						</span>

						</button>
					</td>
					<td style="width:32%;">
						<img src="./pic/popup.png" style="width:13px;margin-top:30%;margin-left:-29%;"/>
					</td></tr>	
				</table>	
			</div>
		</div>

		<!--3-->
		<div>
			<div>
				<table style="width:100%;height:80%;margin-top:5%;"><tr>
					<td style="width:32%;">
					</td>
					<td style="width:36%;">
						<button class="popup" style="margin-bottom:8%;background-color:rgba(255, 255, 255, 0);">
						<img src="./pic/board.png" style="width:60px;" id="3rd" onclick="change3()"/>
						<font size="2%">게시판</font>
						</button>
					</td>
					<td style="width:32%;">
					</td></tr>
				</table>	
			</div>
		</div>
	
		<!--4:-->
		<div>
			<div>
				<table style="width:100%;height:80%;margin-top:5%;"><tr>
					<td style="width:32%;">
					</td>
					<td style="width:36%;">
						<button class="popup" style="margin-bottom:8%;background-color:rgba(255, 255, 255, 0);">
						<img src="./pic/food.png" style="width:60px;" id="4th" onclick="change4()"/>
						<font size="2%">학식메뉴</font>
						</button>
					</td>
					<td style="width:32%;">
					</td></tr>
				</table>	
			</div>
		</div>
		
		<!--5-->
		<div>
			<div id="bottomleftradius">
				<table style="width:100%;height:80%;margin-top:5%;"><tr>
					<td style="width:32%;">
					</td>
					<td style="width:36%;">
						<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;margin-bottom:8%;">
						<img src="./pic/timetable.png" style="width:60px;background-color:#fff;" id="5th"/>
						<font size="2%">버스시간표</font>

						<span id="id03" class="modal3">
						
						<div id="pad3">
							<a href="http://m.suwon.ac.kr/jsp/community/convenience/shuttlebus.html"><div id="inner">대중교통, 셔틀버스</div></a>
							<a href="./suwon_bus.php"><div id="inner">교내셔틀 시간표</div></a>
							<div id="cancel3" onclick="blackout3()">취소</div>

						</div>
						</span>
						</button>
						</td>
					<td style="width:32%;">
						<img src="./pic/popup.png" style="width:13px;margin-top:18%;margin-left:-20%;"/>
					</td></tr>					
				</table>	
			</div>
		</div>

		<!--6-->
		<div>
			<div id="bottomrightradius">
				<table style="width:100%;height:80%;margin-top:5%;"><tr>
					<td style="width:32%;">
					</td>
					<td style="width:36%;">
						<button class="popup" style="margin-bottom:8%;background-color:rgba(255, 255, 255, 0);">
						<img src="./pic/service0.png" style="width:60px;" id="6th" onclick="change6()"/>
						<font size="2%">고객센터</font>
						</button>
					</td>
					<td style="width:32%;">
					</td></tr>
				</table>	
			</div>
		</div>
		

	</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');
var modal3 = document.getElementById('id03');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
	if (event.target == modal2) {
        modal2.style.display = "none";
    }
	if (event.target == modal3) {
        modal3.style.display = "none";
    }
}

function blackout(){
	var cancel = document.getElementById('cancel');
	var modal = document.getElementById('id01');
	window.onclick = function(event) {
    if (event.target == cancel) {
        modal.style.display = "none";
		}
	}
}
function blackout2(){
	var cancel = document.getElementById('cancel2');
	var modal = document.getElementById('id02');
	window.onclick = function(event) {
    if (event.target == cancel2) {
        modal2.style.display = "none";
		}
	}
}
function blackout3(){
	var cancel = document.getElementById('cancel3');
	var modal = document.getElementById('id03');
	window.onclick = function(event) {
    if (event.target == cancel3) {
        modal3.style.display = "none";
		}
	}
}
</script>

<script>

//이미지 클릭 변환
function change2(){
	var image= document.getElementById('2nd');
		image.src="./pic/telbook1.png";
		setTimeout(function(){
			image.src="./pic/telbook.png";
		},500);
}
function change3(){
	var image= document.getElementById('3rd');
		image.src="./pic/board1.png";
		setTimeout(function(){
			image.src="./pic/board.png";
			location.href="./suwon_freeboard.php";
		},200);
}
function change4(){
	var image= document.getElementById('4th');
		image.src="./pic/food1.png";
		setTimeout(function(){
			image.src="./pic/food.png";
			location.href="http://m.suwon.ac.kr/community/listConvenienceMenu.do";
		},200);
}
function change6(){
	var image= document.getElementById('6th');
		image.src="./pic/service1.png";
		setTimeout(function(){
			image.src="./pic/service0.png";
			location.href="./suwon_service.php";
		},200);
		
}

</script>

</body>
</html>
