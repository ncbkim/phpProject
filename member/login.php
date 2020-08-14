 <!-- 세션시작 -->
  <?session_start(); ?>
<!-- 헤더 시작 -->
<?php include "../header.html"; ?>

<!DOCTYPE html>
<html>
<head>
	<link rel ="stylesheet" href="../css/bootstrap.css">
	<link rel ="stylesheet" href="../css/base.css">
	<link rel ="stylesheet" href="../css/join-theme.css">
	<!-- 로그인 부분 -->

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
		function keyword_check(){ 
			if(document.search.keyword.value==""){ //검색어가 없을 경우
				alert('검색어를 입력하세요'); //경고창 띄움
				document.search.keyword.focus(); //다시 검색창으로 돌아감
				return false;
			}else return true;
		}
	</script>
</head>
<body>
	
	<!-- 로그인 부분 -->
	<div class="container_login">
		<div class="row">
			<div class='col-md-4'></div>
			<div class="col-md-4">
				<div class="login-box well">
					<form action="login_check.php" method="post">
						<legend>ログイン</legend>
						<div class="form-group">
							<input name="user_id" placeholder="ID" type="id" class="form-control"
							<?php 
							if(isset($_COOKIE['id_remember_cookie'])){?>
							value= <? echo $_COOKIE["id_remember_cookie"] ?>
							<?}else{?>
							value=''
							<? }?>
							/>
						</div>
						<div class="form-group">
							<input name="user_pass" value='' placeholder="パスワード" type="password" class="form-control" />
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-default btn-login-submit btn-block m-t-md" value="LOGIN" />
						</div>
						<div class="checkbox">
							<label>
								<input id="login-remember" type="checkbox" name="remember" value="1" 
								<?php 
								if(isset($_COOKIE['id_remember_cookie'])){?>
								checked ="checked"
								<?}?>
								> ID 保存
							</label>
						</div>
						<div class="form-group">
							<br>
							<a href="join.php" class="btn btn-default btn-block m-t-md">新規登録</a>
						</div>
					</form>

				</div>
			</div>
			<div class='col-md-4'></div>
		</div>
	</div>
	<!-- 로그인 부분 끝 -->
	<!-- 로그인 부분 -->
	<!-- 푸터시작 -->
	<?php include "../footer.html"; ?>
</body>
</html>