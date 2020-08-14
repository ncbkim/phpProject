<?session_start(); ?>
<?php
	include "../dbconnect.php";

	$sql = "DELETE FROM user_info WHERE user_id='".$_SESSION['user_id']."'";

	$result = mysqli_query($conn, $sql);
	if($result === false){
		echo "<script>alert(\"会員退会に問題がでました。\");</script>";
		error_log(mysqli_error($conn));
	}else{
		echo "<script>confirm(\"会員退会しました。\");</script>";
		session_destroy();
		echo "<script>location.href='../index.php'</script>";
	}
?>
