<head>
  <title>수원톡톡</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
 
<style type="text/css">
html,body { 
	margin: 0px;
	padding: 0px;
	overflow:hidden;
}
button{
	background-color:#fff;
	border:none;
	height:80%;
	margin-top:5px;
	border-radius:5px;
	width:90%;
	height:16%;
	font-size:100%;
	outline:none;
	color:#595757;
}
input{
	width:138%;
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
	color:#0689FF;
}
.bodydiv{
	background-color:#ccc;
	width:100%;
	height:94%;
}
.bodyhead{
	width:100%;
	height:9%;
	margin-left:4%;
	margin-bottom:;
}
.search{
	width:65%;
	height:10%;
	display:inline-block;
	float:left;
	margin-top:2%;
}
.go{	
	width:10%;
	height:10%;
	float:right;
	margin-right:10%;
	display:inline-block;
	margin-top:2%;
}

.board{
	width:100%;
	height:85%;
}
.boardhead{
	background-color:#fff;
	width:100%;
	height:20%;
	font-size:87%;
	padding-left:20%;
	padding-top:3%;
}
.boardbody{
	background-color:#ccc;
	width:100%;
	height:60%;
	padding-right:5%;
	padding-top:4%;

}
.inner{
	margin-left:5%;
}
#present{
	background-color:#eee;
	}
#present:active{
	background-color:0689FF;
	}
.inner:active{
	background-color:0689FF;
}
</style>
</head>

<body>
	
	<?
	include("./suwon_include.html");
	?>

<div class="bodydiv">
	<div class="bodyhead">
			<div class="search">
				<form name="sf" action="suwon_univsearch.php" method="GET" autocomplete="on">
				<input name="univdep" type="text" size="30" value="학과/부서명으로 검색해주세요." onfocus="this.value=''" style="padding-left:6%;margin-left:2%;margin-top:3;" autocomplete="off">
			</div>
			<div class="go">
				<button type="submit" style="border:none;width:30px;height:26px;bacground-color:#fff;margin-top:4;border-radius:5px;"><img src="./pic/go.png" style="width:100%;"/></button>
			</div>
			</form>
	</div>

	<div class="board">
		<div class="boardhead">
		<button style="width:60%;height:20%;border:none;background-color:#fff;color:#222"><b>수원대학교 대표 번호</b></button><br>
			<a href="tel:031-220-2611">
			<button id="present" style="width:60%;height:45%;border:1px solid #B5B5B6;border-radius:8px;color:#595757;background-color:#F5F5F5;outline:none;">
				<img src="./pic/num.png"/ style="float:left;width:12%;padding-left:7%;">
				<div style="width:70%;padding-top:1%;float:right;"><font size="3">031-220-2611</font></div>
			</button>
			</a>
		</div>

		<div class="boardbody">
			<button class="inner" onclick="location.href='suwon_telsort.php?num=1'">인문사회&nbsp;&nbsp;대학</button>
			<button class="inner" onclick="location.href='suwon_telsort.php?num=2'">법정,경상&nbsp;대학</button>
			<button class="inner" onclick="location.href='suwon_telsort.php?num=3'">공과,&nbsp;IT&nbsp;&nbsp;&nbsp;대학</button>
			<button class="inner" onclick="location.href='suwon_telsort.php?num=4'">자연과학&nbsp;&nbsp;대학</button>
			<button class="inner" onclick="location.href='suwon_telsort.php?num=5'">예&nbsp;체&nbsp;능&nbsp;&nbsp;&nbsp;대학</button>
			<button class="inner" onclick="location.href='suwon_telsort.php?num=6'">생활과학&nbsp;&nbsp;대학</button>
			<button class="inner" onclick="location.href='suwon_telsort.php?num=7'">기&nbsp;&nbsp;&nbsp;타&nbsp;&nbsp;&nbsp;기&nbsp;&nbsp;&nbsp;관</button>
		</div>
	</div>

</div>

</body>
</html>
