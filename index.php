<!--2016-12-23-->
<head>
  <title>수원톡톡</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta http-equiv="content-type" content="text/html; charset=euc-kr">
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
.bodycontainer {
	height:100%;
}
.banner {
	height:32%;
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
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
	-webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}
#inner{
	height:8%;
	line-height:150%;
	border-radius:8px;
	border:none;
	margin-bottom:2%;
	background-color:#fff;
	color:black;
}
#pad{
	position:absolute;
	bottom:0;
	right:0;
	width:100%;
	height:65%;
	border:none;
	background-color:#DCDDDD;

}
#cancel, #cancel2, #cancel3{
	border:none;
	background-color:#fff;
	border-radius:8px;
	height:8%;
	line-height:120%;
}
/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}
@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1;}
}
</style>
</head>

<body style="background-color:#ddd" height="100%">

<div class="bodycontainer">
	<?
	include("./suwon_include.html");
	?>
	<div class="banner">
		<center><img src="./pic/banner.png" style="width:90%;"/></center>	
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
						<img src="./pic/monitor.png" style="width:100%;background-color:#fff;" id="1st" onclick="change1()"/>
						
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
						<img src="./pic/popup.png" style="width:25%;margin-top:40%;"/>
					</td></tr>
					<tr><td></td><td><center><font style="font-size:70%;">교내사이트
					</font></center></td></tr>	
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
						<img src="./pic/telbook.png" style="width:80%;background-color:#fff" id="2nd" onclick="change2()"/>

						<span id="id02" class="modal2">

						<div id="pad">
							<a href="./suwon_foodtel.php"><div id="inner">음식점 전화번호</div></a>
							<a href="./suwon_univtel.php"><div id="inner">교내 전화번호</div></a>
							<div id="cancel2" onclick="blackout2()">취소</div>
						</div>
						
						</span>

						</button>
					</td>
					<td style="width:32%;">
						<img src="./pic/popup.png" style="width:25%;margin-top:90%;"/>
					</td></tr>
					<tr><td></td><td><center><font style="font-size:70%;">전화번호부
					</font></center></td></tr>	
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
						<a href="./suwon_board.php">
						<button class="popup" style="margin-bottom:8%;">
						<img src="./pic/board.png" style="width:100%;" id="3rd" onclick="change3()"/>
						</button></a>
					</td>
					<td style="width:32%;">
					</td></tr>
					<tr><td></td><td><center><font style="font-size:70%;">게시판
					</font></center></td></tr>	
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
						<a href="http://m.suwon.ac.kr/community/listConvenienceMenu.do">
						<button class="popup" style="margin-bottom:8%;">
						<img src="./pic/food.png" style="width:80%;" id="4th" onclick="change4()"/>
						</button></a>
					</td>
					<td style="width:32%;">
					</td></tr>
					<tr><td></td><td><center><font style="font-size:70%;">식단표
					</font></center></td></tr>	
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
						<img src="./pic/timetable.png" style="width:100%;background-color:#fff;" id="5th" onclick="change5()"/>

						<span id="id03" class="modal3">
						
						<div id="pad">
							<a href="http://m.suwon.ac.kr/jsp/community/convenience/shuttlebus.html"><div id="inner">대중교통, 셔틀버스</div></a>
							<a href="./bus.php"><div id="inner">교내셔틀 시간표</div></a>
							<div id="cancel3" onclick="blackout3()">취소</div>

						</div>
						</span>
						</button>
						</td>
					<td style="width:32%;">
						<img src="./pic/popup.png" style="width:25%;margin-top:75%;"/>
					</td></tr>
					<tr><td></td><td><center><font style="font-size:70%;">버스시간표
					</font></center></td></tr>					
				</table>	
			</div>
		</div>

		<!--5-->
		<div>
			<div id="bottomrightradius">
				<table style="width:100%;height:80%;margin-top:5%;"><tr>
					<td style="width:32%;">
					</td>
					<td style="width:36%;">
						<a href="./service.php">
						<button class="popup" style="margin-bottom:8%;">
						<img src="./pic/service.png" style="width:90%;" id="6th" onclick="change6()"/>
						</button></a>
					</td>
					<td style="width:32%;">
					</td></tr>
					<tr><td></td><td><center><font style="font-size:70%;">고객센터
					</font></center></td></tr>
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
	var modal = document.getElementById('id01');0
	window.onclick = function(event) {
    if (event.target == cancel) {
        modal.style.display = "none";
		}
	}
}
function blackout2(){
	var cancel = document.getElementById('cancel2');
	var modal = document.getElementById('id02');0
	window.onclick = function(event) {
    if (event.target == cancel2) {
        modal2.style.display = "none";
		}
	}
}
function blackout3(){
	var cancel = document.getElementById('cancel3');
	var modal = document.getElementById('id03');0
	window.onclick = function(event) {
    if (event.target == cancel3) {
        modal3.style.display = "none";
		}
	}
}
</script>

<script>

//이미지 클릭 변환
function change1(){
	var image= document.getElementById('1st');
		image.src="./pic/monitor1.png";
		setTimeout(function(){
			image.src="./pic/monitor.png";
		},500);
}
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
		},500);
}
function change4(){
	var image= document.getElementById('4th');
		image.src="./pic/food1.png";
		setTimeout(function(){
			image.src="./pic/food.png";
		},500);
}
function change5(){
	var image= document.getElementById('5th');
		image.src="./pic/timetable1.png";
		setTimeout(function(){
			image.src="./pic/timetable.png";
		},500);
}
function change6(){
	var image= document.getElementById('6th');
		image.src="./pic/service1.png";
		setTimeout(function(){
			image.src="./pic/service.png";
		},500);
}

</script>

</body>
</html>
