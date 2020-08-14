 <!-- 세션시작 -->
  <?session_start(); ?>
<!-- 헤더 시작 -->
<?php
// 헤더 시작
include "../header.html"; 

//DB 연결하기
include "../dbconnect.php";

$sql="SELECT * FROM user_info WHERE user_id='".$_SESSION['user_id']."'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result); // 해당 아이디와 비밀번호가 있는 행의 내용들

// 검색해서 나온 행에서 원하는 값 가져오기
$user_name=$row['user_name'];
$user_addr=$row['user_addr'];
$user_tel=$row['user_tel'];
$user_email=$row['user_email'];
?>

<!DOCTYPE html>
<html>
<head>
	<link rel ="stylesheet" href="../css/bootstrap.css">
	<link rel ="stylesheet" href="../css/base.css">
	<link rel ="stylesheet" href="../css/join-theme.css">
	<script type="text/javascript" src="../js/mySignupForm.js"></script>
	<script type="text/javascript">
		function keyword_check(){ 
			if(document.search.keyword.value==""){ //검색어가 없을 경우
				alert('검색어를 입력하세요'); //경고창 띄움
				document.search.keyword.focus(); //다시 검색창으로 돌아감
				return false;
			}else return true;
		}
		function btn_js_confirm_click(){
			var check = confirm("会員退会でよろしいでしょうか？");
			if(check) location.href='./user_info_delete.php';
		}
	</script>
</head>
<body>

	<div  class="container_join">
		<div class="row">
			<div class='col-md-4'></div>
			<div class="col-md-4">
				<div class="join-box well">
					<form action="user_info_process.php" method="post">
						<legend>会員情報</legend>
						<div class="form-group">
							<p>ID</p>
							<input name="user_id" value='<?php echo $_SESSION['user_id']; ?>' type="id" class="form-control" id="user_id" />
							(半角英数字, 4~16文字)
						</div>
						<div class="form-group">
							<p>ニックネーム</p>
							<input name="user_name" value='<?php echo $user_name; ?>' type="text" class="form-control" id="user_name" />
						</div>
						<div class="form-group">
							<p>パスワード</p>
							<input name="user_pass" value='' type="password" class="form-control" id="user_pass" />
							(半角英数字, 4~16文字)
						</div>
						<div class="form-group">
							<p>パスワード 確認</p>
							<input name="user_pass2" value='' type="password" class="form-control" id="user_pass2"/>

						</div>
						<div class="form-group">
							<p>住所</p>
							<input name="user_addr" value='<?php echo $user_addr; ?>' type="text" class="form-control" id="user_addr"/>
						</div>
						<div class="form-group">
							<p>電話番号</p>
							<input name="user_tel" value='<?php echo $user_tel; ?>' type="text" class="form-control" id="user_tel"/>

						</div>
						<div class="form-group">
							<p>メール</p>
							<input name="user_email" value='<?php echo $user_email; ?>' type="text" class="form-control" ids="user_email"/>
							
						</div>

						<div class="form-group">
							<input type="submit" value="会員情報更新"/>
							<input type="button" onclick="location.href='../index.php'" value="キャンセル" />
						</div>
						<input type="button" onclick="btn_js_confirm_click();" value="会員退会"/>
					</form>
				</div>
			</div>
		</div>
		<div class='col-md-4'></div>
	</div>
</div>

<!-- 푸터시작 -->
<?php include "../footer.html"; ?>

</body>
</html>