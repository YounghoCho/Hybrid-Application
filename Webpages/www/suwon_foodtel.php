<head>
  <title>수원톡톡</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
 
<style type="text/css">
html,body { 
	margin: 0px;
	padding: 0px;
	overflow:hidden;
	background-color:#DCDDDD;
}
button{
	background-color:#fff;
	border:none;
	outline:none;
}
input{
	width:137%;
	height:30px;
	color:#B5B5B6;
	margin:0;
	padding:0;
	border-radius:5px;
	border:none;
	outline:none;
}
a:link{
	text-decoration:none;
	color:#000;
}
a:visited{
	color:#000;
}
a:active{
	color:blue;
}
.bodydiv{
	background-color:#DCDDDD;
	width:100%;
	height:94%;
}
.bodyhead{
	width:100%;
	height:9%;
	margin-left:5%;
}
.search{
	width:64%;
	height:10%;
	display:inline-block;
	float:left;
	margin-top:2%;
}
.go{	
	width:10%;
	height:10%;
	display:inline-block;
	margin-top:2%;
	float:right;
	margin-right:10%;
}

.foodbutton{
	width:90%;
	height:33%;
	margin-left:5%;
	margin-top:-2px;
}
.foodbutton td{
	background-color:#fff;
	
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
.left{
	width:50%;
	height:30%;
	margin-top:1%;
}
.right{
	width:50%;
	height:30%;
	margin-top:1%;
}

.boardbody{
	background-color:#DCDDDD;
	width:100%;
	height:60%;
	padding-right:5%;
}
/*76% 높이 차이*/
.underupper{
	width:90%;
	height:10%;
	margin-left:5%;
	margin-top:1%;
	background-color:#0689FF;
	color:#fff;
	border-radius:8px;
}

/* 광고영역 */
/* Slideshow container */
.slideshow-container {
  width: 100%;
}
.mySlides{
	width:90%;
	height:16%;
	position:absolute;
	bottom:5%;
	right:5%;
}
/* The dots/bullets/indicators */
.dotmother{
	position:absolute;
	bottom:1%;
	right:45%;
}
.dot {
  height: 9px;
  width: 9px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #31CCC9;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1s;
  animation-name: fade;
  animation-duration: 1s;
}

@-webkit-keyframes fade {
  from {opacity: .5} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .5} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 100%) {
  .text {font-size: 11px}
}

</style>
</head>

<body id="top">
	<?
	include("./suwon_include.html");
	?>

<div class="bodydiv">
	<div class="bodyhead">
			<div class="search">
				<form name="foodlist" action="./suwon_foodsearch.php" method="GET" autocomplete="on">
				<input name="food" type="text" size="30" value="업체/음식명으로 검색해주세요." onfocus="this.value=''" style="padding-left:6%;margin-left:2%;border:none;margin-top:4px"  autocomplete="off">
			</div>
			<div class="go">
				<button type="submit" style="border:none;width:30px;height:26px;bacground-color:#fff;margin-top:4;border-radius:5px"><img src="./pic/go.png" style="width:100%;"/></button>
			</div>
			</form>
	</div>

		<div class="boardbody">

			<table class="foodbutton"><tr>
				<td id="leftradius" class="left" style="width:50%;height:100%;">
					<center>
					<button>
					<img src="./pic/food/korea.png" style="width:60px;;" id="1st" onclick="change1()"/><br><font size="2%" color="#595757">한식</button>
				</td>

				<td  id="rightradius" class="right" style="width:50%;">
					<center>
					<button>
					<img src="./pic/food/china.png" style="width:60px;" id="2nd" onclick="change2()"/><br><font size="2%" color="#595757">중식</button>
				</td>
				</tr>
			</table>

			<table class="foodbutton"><tr>
				<td class="left" style="width:50%;height:100%;">
					<center>
					<button>
					<img src="./pic/food/america.png" style="width:60px;" id="3rd" onclick="change3()"/><br><font size="2%" color="#595757">양식</button>
				</td>

				<td class="right" style="width:50%;">
					<center>
					<button>
					<img src="./pic/food/meat.png" style="width:60px;" id="4th" onclick="change4()"/><br><font size="2%" color="#595757">육류</button>
				</td>
				</tr>
			</table>

			<table class="foodbutton"><tr>
				<td class="left" id="bottomleftradius" style="width:50%;height:100%;">
					<center>
					<button>
					<img src="./pic/food/cafe.png" style="width:60px;" id="5th" onclick="change5()"/><br><font size="2%" color="#595757">카페 & 주류</button>
				</td>

				<td class="right"  id="bottomrightradius" style="width:50%;">
					<center>
					<button>
					<img src="./pic/food/etc.png" style="width:60px;" id="6th" onclick="change6()"/><br><font size="2%" color="#595757">분식 & 기타</button>
				</td>
				</tr>
			</table>

			<button class="underupper" onclick="location.href='./daum.html'">지도에서 검색 가능합니다.</button>
		</div>
	
	<!--광고영역-->
	<div class="slideshow-container">

		<div class="mySlides fade">
		  <img src="./pic/food/banner1.png" style="width:100%">
		</div>
		<div class="mySlides fade">
		  <img src="./pic/food/banner2edit.png" style="width:100%;background-color:#fff;">
		</div>
		<div class="mySlides fade">
		  <img src="./pic/food/banner3.png" style="width:100%;">
		</div>

	</div>
	<br>

	<div class="dotmother" style="text-align:center">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	</div>

</div>

</body>
</html>
<script>
//이미지 클릭 변환
function change1(){
	var image= document.getElementById('1st');
		image.src="./pic/food/korea1.png";
		setTimeout(function(){
			image.src="./pic/food/korea.png";
			location.href='suwon_foodsort.php?num=1';
		},500);
}
function change2(){
	var image= document.getElementById('2nd');
		image.src="./pic/food/china1.png";
		setTimeout(function(){
			image.src="./pic/food/china.png";
			location.href='suwon_foodsort.php?num=2';
		},500);
}
function change3(){
	var image= document.getElementById('3rd');
		image.src="./pic/food/america1.png";
		setTimeout(function(){
			image.src="./pic/food/america.png";
			location.href='suwon_foodsort.php?num=3';
		},500);
}
function change4(){
	var image= document.getElementById('4th');
		image.src="./pic/food/meat1.png";
		setTimeout(function(){
			image.src="./pic/food/meat.png";
			location.href='suwon_foodsort.php?num=4';
		},500);
}
function change5(){
	var image= document.getElementById('5th');
		image.src="./pic/food/cafe1.png";
		setTimeout(function(){
			image.src="./pic/food/cafe.png";
			location.href='suwon_foodsort.php?num=5';
		},500);
}
function change6(){
	var image= document.getElementById('6th');
		image.src="./pic/food/etc1.png";
		setTimeout(function(){
			image.src="./pic/food/etc.png";
			location.href='suwon_foodsort.php?num=6';
		},500);
}

//광고영역
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    
    if (slideIndex> slides.length) {
    	slideIndex = 1
    }    
    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 1500); // Change image every 1.5 seconds
}
</script>

