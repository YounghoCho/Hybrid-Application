<?php

include ("./sellboard_lib.php");
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);

if(trim($_POST["b_title"]) == ""){
    ?>
    <script>
        alert("글제목을 입력해 주세요.");
        history.back();
    </script>
    <?php
    exit;
}
if(trim($_POST["b_contents"]) == ""){
    ?>
    <script>
        alert("글내용을 입력해 주세요.");
        history.back();
    </script>
    <?php
    exit;
}
//도배방지
$c="select ip from tb_board5 order by b_idx desc;";
$rec=mysql_query($c);
$resultc= mysql_fetch_array($rec);

if($resultc[0]==$_SERVER["REMOTE_ADDR"]){
?>
	<script>
	alert("연속해서 글을 쓸 수 없습니다.");
	
	</script>
<?
}else{

$sql = "insert into tb_board5 set b_reply = '', m_id = '".$_SESSION["user_id"]."', m_name = '".$_SESSION["user_name"]."', b_title = '".$_POST["b_title"]."', b_contents = '".nl2br($_POST["b_contents"])."', b_regdate = now(), ip='".$_POST["ip"]."';";
sql_query($sql);

//이전의 insert작업을 하고 auto_increased된 id를 반환한다.
$b_idx = mysql_insert_id();

//새로운 글의 번호를 삽입해줘야하니까, 이런 방식으로 삽입하는거야.
$sql = "update tb_board5 set b_num = '".$b_idx."' where b_idx = '".$b_idx."'";
sql_query($sql);
//}


//newest
$sql2 = "insert into newest set b_reply = '', m_id = '".$_SESSION["user_id"]."', m_name = '".$_SESSION["user_name"]."', b_title = '".$_POST["b_title"]."', b_contents = '".$_POST["b_contents"]."', b_regdate = now(), ip='".$_POST["ip"]."';";
sql_query($sql2);


//위에서 삽입했던 b_idx를 그대로 b_num에 넣어야, 글을 삭제할때 newest에서도 같은 b_num을 참조해서 지운다.
$b_idx2 = mysql_insert_id();
$sql3 = "update newest set b_num = '".$b_idx."' where b_idx = '".$b_idx2."'";
sql_query($sql3);

	}
?>

<script>
location.replace("./suwon_sellboard.php");
</script>