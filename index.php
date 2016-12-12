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
.bodycontainer {
	height:100%;
}
.banner {
	height:35%;
	background-color:white;
}
.iconsection {
	height:65%;
	width:100%;
	background-color:#666;
}
.iconsection div{
	height:33%;
	width:50%;
	float:left;
}
.iconsection div div{
	background-color:white;
	height:94%;
	width:96%;
	margin:5%;
	border:none;
	border-radius:10px;
	padding:0;
	margin:0;
	margin-left:3%;
	margin-top:4%;
	font-size:70%;
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
.xbutton{
	float:right;
	margin:6px;
	margin-bottom:-3px;
	font-size:160%;
}
/*****popup CSS부분********/
/* Popup container - can be anything you want */
.popup {
    position: relative;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 300%;
    background-color: #666;
    color: #fff;
    text-align: center;
    padding: 5px;
	padding-bottom:54px;
    position:absolute;
    z-index: 1;
	margin-left:-100%;
	margin-top:-50%;
	outline-style:none;
	border:none;
	border-radius:5px;
	}
.popup .popuptext2 {
    visibility: hidden;
    width: 300%;
    background-color: #666;
    color: #fff;
    text-align: center;
    padding: 5px;
    position:absolute;
    z-index: 1;
	margin-left:-320%;
	margin-top:-50%;
	outline-style:none;
	border:none;
	border-radius:5px;
	}
.popup .popuptext3 {
    visibility: hidden;
    width: 300%;
    background-color: #666;
    color: #fff;
    text-align: center;
    padding: 5px;
    position:absolute;
    z-index: 1;
	margin-left:-95%;
	margin-top:-325%;
	outline-style:none;
	border:none;
	border-radius:5px;
	}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}
@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
/***********팝업CSS끝***********/
}

</style>
</head>

<body style="background-color:#ddd" height="100%">
<div class="bodycontainer">
	<div class="banner">
		<img src="" style="height:100%;width:100%;"/>		
	</div>

	<div class="iconsection">
		<!--1-->
		<div><div><center><button class="popup" onclick="myFunction()"><img src="newicon.png"/><span class="popuptext" id="myPopup" style="height:200px"><span class="xbutton">&times;</span><br>
		<a href="http://www.naver.com"><div>홈페이지</div></a>
		<div>포털사이트</div>
		<div>블랙보드</div>
		<div>국제대학</div>
		</span>
</button><br>교내사이트</div></div>
		
		<!--2 popuptext부분은 사실 공간을 차지할뿐 hidden되어있다. 그래서 일반 범위를 넘어가서 스크롤이 생겨버린다.body에 overflow:hidden으로 넘어가는 부분을 짤라줬다.-->
		<div><div><center><button class="popup" onclick="myFunction2()"><img src="newicon.png"/><span class="popuptext2" id="myPopup2" style="height:200px"><span class="xbutton">&times;</span><br>
		<a href="http://www.naver.com"><div>음식점 전화번호</div></a>
		<div>교내 전화번호</div>
		</span></button><br>전화번호부</div></div>
		
		<!--3-->
		<div><div><center><a href=""><img class="nobutton" src="newicon.png"/></a><br>게시판</div></div>
		<!--4:-->
		<div><div><center><img class="nobutton" src="newicon.png"/><br>오늘의 식단표</div></div>
		<!--5-->
		<div><div><center><button class="popup" onclick="myFunction3()"><img src="newicon.png"/><span class="popuptext3" id="myPopup3" style="height:200px"><span class="xbutton">&times;</span><br><div>대중교통 시간표</div>
		<div>교내셔틀 시간표</div></span></button><br>시간표</div></div>
		<!--5-->
		<div><div><center><img class="nobutton" src="newicon.png"/><br>고객센터</div></div>
	</div>
</div>

<script>
//팝업 script, 각 팝업별로 css도 따로, class도 따로, function도 따로!
function myFunction() {
    var popup = document.getElementById('myPopup');
    popup.classList.toggle('show');
}
function myFunction2() {
    var popup = document.getElementById('myPopup2');
    popup.classList.toggle('show');
}
function myFunction3() {
    var popup = document.getElementById('myPopup3');
    popup.classList.toggle('show');
}</script>

</body>
</html>
