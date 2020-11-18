<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="../img/appLogo.png"/>
	<link rel="stylesheet" type="text/css" href="../css/admin/create1990OperatorAccount.css">
	<link rel="stylesheet" type="text/css" href="../css/admin/adminHeader.css">
	<link rel="stylesheet" type="text/css" href="../css/includecss/footer.css">
	<title>119 Operator Account</title>
</head>
<body>
<div class="breadcrum" id="breadcrum">
		<ul class="breadcrumb">
			<li><a href="home">Home</a></li>
			<li>New Suwasariya Operator</li>
		</ul>
	</div>
	<div class="form">
		<div class="frame">
			<center>
				<form action="newoperator1990" method="post" id="formOperator1990">
					<div class="row">
						<div class="column1">
							<canvas class="picture" id="picture">
											
							</canvas>
						</div>
						<div class="column2">
							<label for="userName">User Name</label><br>
							<label for="firstName">First Name</label><br>
							<label for="lastName">Last Name</label><br>
							<label for="gender">Gender</label><br>
							<label for="password1">Password</label><br>
							<label for="password2">Re-enter Password</label><br>
						</div>
						<div class="column3">
							<div class="inputs">
								<label class="lab" for="userName">User Name</label>
								<input type="text" name="userName" id="userName"><br>
								<label class="lab" for="firstName">First Name</label>
								<input type="text" name="firstName" id="firstName"><br>
								<label class="lab" for="lastName">Last Name</label>
								<input type="text" name="lastName" id="lastName"><br>
								<label class="lab" for="gender">Gender</label>
								<select name="gender" class="gender" id="gender">
									<option value=""></option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
								<label class="lab" for="password1">Password</label>
								<input type="password" name="password1" id="password1"><br>
								<label class="lab" for="password2">Re-enter Password</label>
								<input type="password" name="password2" id="password2"><br>
								<p class="hide" id="err">Error</p>
								<input type="submit" value="Create" name="submit" id="submit" onclick="return check()">
							</div>
						</div>
					</div>
				</form>
			</center>
		</div>
	</div>
	<div id="modal1" class="modal">
		<div class="message">
			<div class="container">
				<div class="titleconfirm">
					<h1>Success!</h1>
				</div>
				<div class="confirm">
					<img src="../img/newOperator/success.svg" alt="">
					<p>Operator added sussecfuly!</p>
				</div>
			</div>
		</div>
	</div>
	<?php if(isset($_SESSION['user'])){?>
		<script>
			document.getElementById('modal1').style.display = 'block';
			setTimeout(function(){document.getElementById('modal1').style.display = 'none'; }, 2000);
		</script>
	<?php unset($_SESSION['user']);} ?>
	<script type="text/javascript" src="../javascript/jquery.js"></script>
	<script type="text/javascript" src="../javascript/jquery.sticky.js"></script>
	<script type="text/javascript" src="../javascript/headerAdmin.js"></script>
	<script type="text/javascript" src="../javascript/newOperator1990.js"></script>
</body>
</html>