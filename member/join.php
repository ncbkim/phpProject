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
	<script type="text/javascript" src="../js/mySignupForm.js"></script>
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
	

	<div class="container_join">
		<div class="row">
			<div class='col-md-4'></div>
			<div class="col-md-4">
				<div class="join-box well">
					<form action="join_result.php" method="post">
						<legend>会員登録</legend>
						<div class="form-group">
							<p>ID</p>
							<input name="user_id" value='' type="id" class="form-control" id="user_id" />
							(半角英数字, 4~16文字)
						</div>
						<div class="form-group">
							<p>ニックネーム</p>
							<input name="user_name" value='' type="text" class="form-control" id="user_name" />
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
							<input name="user_addr" value='' type="text" class="form-control" id="user_addr"/>
						</div>
						<div class="form-group">
							<p>電話番号</p>
							<input name="user_tel" value='' type="text" class="form-control" id="user_tel"/>

						</div>
						<div class="form-group">
							<p>メール</p>
							<input name="user_email" value='' type="text" class="form-control" ids="user_email"/>

						</div>

						<div class="form-group">
							<input type="submit" class="btn btn-default btn-login-submit btn-block m-t-md" value="登録""/>
						</div>

					</form>

				<!-- <div class="formCheck">
					<input type="hidden" name="idCheck" class="idCheck" />
					<input type="hidden" name="pw2Check" class="pwCheck2" />
					<input type="hidden" name="eMailCheck" class="eMailCsheck" />
				</div> -->

			</div>
		</div>
		<div class='col-md-4'></div>
	</div>
</div>

<!-- 푸터시작 -->
<?php include "../footer.html"; ?>
</body>
</html>