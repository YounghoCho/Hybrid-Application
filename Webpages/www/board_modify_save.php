<!-- 서버&웹 개발자 : 조영호 -->
<!-- 저작권이 보호받는 페이지입니다 -->
<?php
include ("./include.php");
if(!$_SESSION["user_id"]){
    ?>
    <script>
        alert("로그인 하셔야 합니다.");
        location.replace("board_login.php");
    </script>
    <?php
}


if(trim($_POST["b_idx"]) == ""){
    ?>
    <script>
        alert("없는 글입니다.");
        history.back();
    </script>
    <?php
    exit;
}

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


$sql = "select * from tb_board where b_idx = '".$_POST["b_idx"]."'";
$result = sql_query($sql);
$data = mysql_fetch_array($result);


if(!$data["b_idx"]){
    ?>
    <script>
        alert("존재하지 않는 글입니다.");
        history.back();
    </script>
    <?php
}


if($data["m_id"] != $_SESSION["user_id"]){
    ?>
    <script>
        alert("본인의 글이 아닙니다.");
        history.back();
    </script>
    <?
}


$sql = "update tb_board set b_title = '".$_POST["b_title"]."', b_contents = '".$_POST["b_contents"]."' where b_idx = '".$_POST["b_idx"]."'";
sql_query($sql);


?>
<script>
location.replace("./board_list.php");
</script>