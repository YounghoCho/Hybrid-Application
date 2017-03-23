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

if($_POST["m_pass"] == ""){
    ?>
    <script>
        alert("비밀번호를 입력해 주세요.");
        history.back();
    </script>
    <?php
    exit;
}

if($_POST["m_pass"] != $_POST["m_pass2"]){
    ?>
    <script>
        alert("비밀번호를 확인해 주세요.");
        history.back();
    </script>
    <?php
    exit;
}

//form으로 넘겨받은 input name="m_pass"와 세션에서 유지되고있는 아이디를 받아와서 해당위치에 데이터 저장
//암호화
$password=$_POST["m_pass"];
include ("./password.php");
$hash= password_hash($password, PASSWORD_DEFAULT);

$sql = "update tb_member set m_pass = '".$hash."' where m_id = '".$_SESSION["user_id"]."'";
sql_query($sql);

// 첫 페이지로 보내기
?>
<script>
alert("회원정보가 수정 되었습니다.");
location.replace("home.php");
</script>