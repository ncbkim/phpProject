<?php
	include "../dbconnect.php";

	$user_id=$_POST['user_id'];
	$user_name=$_POST['user_name'];
	$user_pass1=$_POST['user_pass'];
	$user_tel=$_POST['user_tel'];
	$user_addr=$_POST['user_addr'];
	$user_email=$_POST['user_email'];
	$sql = '';
	if($user_pass1==''){
		$sql = "
			UPDATE user_info SET
				user_name = '$user_name',
				user_tel = '$user_tel',
				user_addr = '$user_addr',
				user_email = '$user_email',
				update_flag = 1,
				updated_at = NOW()
			WHERE user_id='$user_id'
		";
	} else {
		$user_pass2=md5($user_pass1);
		$sql = "
			UPDATE user_info SET
				user_name = '$user_name',
				user_pass = '$user_pass2',
				user_tel = '$user_tel',
				user_addr = '$user_addr',
				user_email = '$user_email',
				update_flag = 1,
				updated_at = NOW()
			WHERE user_id='$user_id'
		";
	}
	$result = mysqli_query($conn, $sql);
	if($result === false){
		echo "<script>alert(\"저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요ssss\");</script>";
		error_log(mysqli_error($conn));
	}else{
		echo "<script>alert(\"会員情報更新しました。\");</script>";
		session_start();
		$_SESSION['user_name']=$user_name;
		echo "<script>location.href='./mypage.php'</script>";
	}
?>