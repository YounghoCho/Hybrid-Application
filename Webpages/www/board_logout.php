<!-- ����&�� ������ : ����ȣ -->
<!-- ���۱��� ��ȣ�޴� �������Դϴ� -->
<?php
@session_start();
?>

<?php
include ("./include.php");
//���� ������ �ʱ�ȭ�Ѵ�.
$_SESSION["user_idx"] = ""; //ȸ�� ������ȣ
$_SESSION["user_id"] = "";  //ȸ�� �ƾƵ�
$_SESSION["user_name"] = ""; //ȸ�� �г���
2016-08-18
?>

<script>
location.replace("home.php");
</script>