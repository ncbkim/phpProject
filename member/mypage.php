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
                    <legend>MYページ</legend>
                    <div class="form-group">
                        <a href="join.php" class="btn btn-default btn-block m-t-md">ご注文履歴</a>
                    </div>
                    <div class="form-group">
                        <br>
                        <a href="/member/modify.php" class="btn btn-default btn-block m-t-md">会員情報更新</a>
                    </div>

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