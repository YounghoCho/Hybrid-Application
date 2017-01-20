<!-- 서버&웹 개발자 : 조영호 -->
<!-- 저작권이 보호받는 페이지입니다 -->
<?php
ini_set("session.cookie_lifetime", "86400"); 
ini_set("session.cache_expire", "86400"); 
ini_set("session.gc_maxlifetime", "86400"); 
@session_start(); 
include ("./freeboard_lib.php");
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);

if(trim($_POST["m_id"]) == ""){
?>
    <script>
        alert("Input your ID");
        history.back();
</script>
<?php
    exit;
}

if($_POST["m_pass"] == ""){
    ?>
<script>
        alert("Input your password");
        history.back();
</script>
<?php
    exit;
}

//로그인
//암호 복호화
$password=$_POST["m_pass"];
$chk_sql = "select * from tb_member where m_id = '".trim($_POST["m_id"])."'";
$chk_result = sql_query($chk_sql);
$chk_data = mysql_fetch_array($chk_result);
$hash_password=$chk_data['m_pass'];
include("./password.php");
if($chk_data["m_idx"]){
if (password_verify($password, $hash_password)) { // 비밀번호가 일치하는지 비교합니다. 
// 비밀번호가 일치할 경우 로그인 세션을 생성합니다.
        $_SESSION["user_idx"] = $chk_data["m_idx"];
        $_SESSION["user_id"] = $chk_data["m_id"];
        $_SESSION["user_name"] = $chk_data["m_name"];
?>
	    <script>
       location.replace("./suwon_admin.php"); //http://www.suin.woobi.co.kr로바꾸면됨
        </script>
<?php
        exit;
} else { 
?>
    <script>
        alert("Wrong password!");
        history.back();
    </script>
<?php
    exit;
}
}
else
{
?>
    <script>
        alert("The ID doesn't exist");
        history.back();
    </script>
<?php
    exit;
}
/*if($chk_data["m_idx"]){ //select로 불러온 결과들중, 회원고유번호(m_idx)가 있고
    if($_POST["m_pass"] == $chk_data["m_pass"]){//form으로 넘겨받은 비번과 디비의 비번이 일치하면
		//세션을 등록해준다.
        $_SESSION["user_idx"] = $chk_data["m_idx"];
        $_SESSION["user_id"] = $chk_data["m_id"];
        $_SESSION["user_name"] = $chk_data["m_name"];
?>
	    <script>
        location.replace("home.php");
        </script>
<?php
        exit;
    }else{
?>
        <script>
            alert("비밀번호가 다릅니다.");
            history.back();
        </script>
<?php
        exit;
    }
}
else
{
?>
    <script>
        alert("존재하지 않는 회원입니다.");
        history.back();
    </script>
<?php
    exit;
}
*/
?>