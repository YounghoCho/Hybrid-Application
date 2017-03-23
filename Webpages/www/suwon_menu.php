<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<style>
body{
	margin:0;
}
/*********************로그인************************/
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
img.avatar {
    width: 40%;
    border-radius: 50%;
}
.login_container {
    padding: 16px;
}
span.psw {
    float: right;
    padding-top: 16px;
}
.login {
    display: none; /* Hidden by default */
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
}
/* Modal Content/Box */
.login-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}
/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}
/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
} 
@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>

<style>
/* Menu css S*/
#navContainer{
	border:1px solid;
	margin:0;
	width:100%;
	height:100%;
}
.menuIcon{
	font-size:35px;
	cursor:pointer;
	float:right;
	margin-right:10px;
	z-index:3;
}
.sidenav{
	text-align:center;
    width: 0px;
	height:100%;
    position: fixed;
    z-index: 2;
    top: 0; /*버튼크기 만큼 내릴수있음*/
    left: -3px;
    background-color:rgba(0,0,0,0.7);
    overflow-x: hidden;
}
.nav{
	border:1px solid;
    background-color: #26f;
	width:250px;
	height:100%;
	padding-top:10px;
}
.sidenav button{
	border:1px solid;
	width:200px;
	margin:10px;
	padding:10px;
}
/* Menu css E*/
</style>
<!--***********************슬라이드 네비게이션********************-->
<body>

<div id="navContainer">
	<!--MENU icon-->
	 <span class="menuIcon" onclick="go()">&#9776;</span>

	<!--slide nav-->
	<div id="mySidenav" class="sidenav">
		<div class="nav">
			<button id="loginButton" onclick="document.getElementById('id01').style.display='block'">로그인</button>
			<button>설정</button>
		</div>
	</div>

</div>


<!--************************로그인**************************-->
<div id="id01" class="login">
  
  <form class="login-content animate" action="">
    <div class="imgcontainer">
	   <!--onclick하면 꺼짐-->
      <span onclick="document.getElementById('id01').style.display='none'" class="close">&times;</span>
      <img src="./pic/banner.png" class="avatar" style="z-index:10">
    </div>

    <div class="login_container">
		<div style="border:1px solid;width:80%;padding:10px;margin:10px;">페이스북 로그인</div>
		<div style="border:1px solid;width:80%;padding:10px;margin:10px;">카카오 로그인</div>
		<div style="border:1px solid;width:80%;padding:10px;margin:10px;">네이버 로그인</div>

	</div>
  </form>
</div>

</body>
<script>
//black out sidenav
var con= document.getElementById('mySidenav');
var lbutton= document.getElementById('loginButton');

window.onclick = function(event) {
    if (event.target == con || event.target == lbutton) {
        con.style.width = "0px";
    }
}
//menu icon
function go(){
			document.getElementById("mySidenav").style.width = "100%";
}

</script>
