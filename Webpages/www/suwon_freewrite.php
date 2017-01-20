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
	?>
	<form name="bWriteForm" method="post" action="./suwon_freewrite_save.php" style="margin:0px;">
	<table style="width:100%;height:90%;border:none;">
		<tr>
			<td align="left" valign="middle" style="width:80%;height:10%;border-bottom:1px solid #aaa;">
				<input id="t" type="text" name="b_title" style="width:100%;height:100%;font-size:120%;color:#898989;font-weight:bold;border:none;padding-left:4%;" value="제목을 입력해주세요." onfocus="this.value=''">
			</td>
		</tr>
		<tr>
			<td align="left" valign="middle" style="width:80%;height:60%;">
			<textarea id="ccc" name="b_contents" style="width:100%;height:100%;font-size:100%;color:#898989;border:none;padding-left:4%;" onfocus="this.value=''">내용을 입력해주세요.</textarea>
			</td>
		</tr>
		<tr>
			<td align="center" valign="middle" colspan="2">
			<input type="hidden" name="ip" value="<?echo $_SERVER["REMOTE_ADDR"]?>">
			<input style="width:25%;height:25%;color:#fff;background-color:#898989;border:1px solid #898989;border-radius:8px;padding:2px;-webkit-appearance:none;" type="button" value=" 글쓰기 " onClick="write_save();"></td>
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
var arr=['10새끼','니미','10새기','10새리','10세리','10쉐이','10쉑','10쌔','10쎄','10창','10탱','18것','18넘','18놈','18뇬','18럼','18롬','18새','18섹','18쉑','18스','18아', 
'c파','c팔','fuck','ㄱㅐ','ㄲㅏ','ㄲㅑ','ㄲㅣ','ㅅㅂㄹㅁ','ㅅㅐ','ㅆㅂㄹㅁ','ㅆㅍ','ㅆㅣ','ㅆ앙','凸','갈보년','같은년','같은뇬','개같은','개구라','개년','개놈','씹팔','씹8','씹년','개뇬','개대중','개독','개돼중','개랄','개보지','개뻥','개뿔','개새','개새기','개새','개색','개섀','개세','개소리','개쑈','개쇳기','개수작','개쉐','개쉑','개쉽','개스끼','개시키','개십','야동','개쐑','개씹','개자슥','개자지','개좆','개좌식','개허접','걔새', 'ㅗ','개수작','개시끼','개시키','걔썌','걸레','게색기','게색끼','광뇬','구녕','개보지','구라','백보지','빽보지','그년','그새끼','뇬','눈깔','뉘미럴','니귀미','니기미','보비적','니어매','니어메','니어미','닝기','대가리', '허벌녀','도라이','돈놈','돌아이','돌은놈','되질래','뒈져','뒈져라','뒈진','뒈진다','뒈질','보짓','후까시','뒤질래','등신','디져라','디진다','디질래','딩시','따식','때놈','또라이','똘아이','똘아이','따먹','뙈놈','뙤놈','뙨넘','뙨놈','뚜쟁','띠바','띠발','띠불','띠팔','메친넘','메친놈','미췬','보징어','미췬','미틴넘','미틴년','딜도','s e x','바랄년','뱅신','벼엉신','병쉰','병신','부랄','부럴','불알','붕가','S E X','뷰웅','븅','븅신','빙시','빙신','빠가','빠구리','빠굴','빠큐','뻐큐', '섹ㅍㅏ','s  e  x','뻑큐','상넘이','상놈','샹놈','썅','새갸','새꺄','새새끼','섹파','S  E  X','색끼','생쑈','세갸','세꺄','섹스','쇼하네','쉐기','쉐끼','쉐리','쉐에기','사까시','쉐키','쉑','쉣','쉨','쉬발','쉬밸','쉬벌','쉬뻘','쉬펄','쉽알','스패킹','스팽','시끼','시댕','시뎅','시발','시벌','시부랄','시부럴','시부리','시불','시브랄','시팍', '허벌보지','시팔','시펄','십8','십라','십새','십새끼','십세','십쉐','십쉐이','십스키','십쌔','십창','십탱','싶알','싸가지','싹아지','쌉년','쌍넘','쌍년','쌍놈','쌍뇬','쌔끼','sex','SEX','쌩쑈','쌴년','썅년','썅놈','썡쇼','썩을년','썩을놈','쎄꺄','쎄엑', '후장','쒸벌','쒸뻘','쒸팔','쒸펄','쓰바','쓰박','쓰발','쓰벌','쓰팔','씁새','씁얼','씌파','씨8','강간','씨끼','씨댕','씨뎅','씨바','씨박','씨발','씨방','씨밸','씨뱅','씨벌','씨벨','씨봉','씨봉알','씨부랄','씨부럴','씨부렁','씨부리','씨불','씨붕','씨브랄', '섹ㅅ', '섻','씨빠','씨빨','씨뽀랄','씨앙','씨파','씨팍','씨펄','씸년','씸뇬','씸새끼','씹같','씹년','씹뇬','씹보지','씹새','씹새기','씹새끼','씹새리','씹세','씹쉐','씹스키','씹쌔','씹이','씹자지','씹질','씹창','씹탱','씹퇭','씹팔','씹할','씹헐','아가리','아갈이','아갈통', 'ㅈㄴ','아구창','아구통','아굴','얌마','양넘','양년','양놈','엄창','엠병','여물통','염병','엿같','옘병','옘빙','욤병','육갑','은년','이새끼','이새키','이스끼','자슥','잡것','잡넘','잡년','잡놈','저년','저새끼','접년','젖밥','조까', '조까치','조낸','조또','조랭','조빠','조쟁이','조지냐','조진다','조찐','조질래','존나','존나게','존니','존만','좀물','좁년','좁밥','좆','좃까','좃또','좃만','좃밥','좃이','좃찐','찐따','주글래','주데이','주뎅','주뎅이','주둥아리','주둥이','주접','주접떨','죽고잡','죽을래','죽통','쥐랄','쥐롤','쥬디','지랄','지럴','지롤','지미랄','쪼다','쫍빱','찌랄','창녀','캐년','캐놈','캐스끼','캐스키','캐시키','팔럼','퍽큐','후라들','후래','후레','후뢰','출장','.net','카톡상담','마사지','콜걸','업소','070','잠자리','조건만남','출장만남','애인대행','출장마사지','출장안마','부부대행','이색알바','아가씨','항시대기','www','com','co.kr'];
	var ctext=document.getElementById('t').value;
	for(var i=0; i<arr.length; i++)
		if(ctext.indexOf(arr[i]) != -1){
			alert("부적절한 단어 사용 금지! ->"+arr[i]);

			return false;
		}
	var ccon=document.getElementById('ccc').value;
	for(var i=0; i<arr.length; i++)
		if(ccon.indexOf(arr[i]) != -1){
			alert("부적절한 단어 사용 금지 ->"+arr[i]);
			return false;
		}
	f.submit();
}
</script>