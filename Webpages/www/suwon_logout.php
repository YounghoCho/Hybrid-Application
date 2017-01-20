<?php
@session_start();
?>

<?php
include ("./include.php");
$_SESSION["user_idx"] = ""; 
$_SESSION["user_id"] = "";  
$_SESSION["user_name"] = ""; 
?>

<script>
location.replace("./index.php");
</script>