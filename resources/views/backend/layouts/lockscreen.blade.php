<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin UI| Lock Screen</title>
	<base href="{{asset('')}}">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/lock.min.css">
</head>
<body>
	<div class="page-lock">
		<div class="page-logo">
			<a class="brand" href="index.html">
				<img src="" alt="logo" />
			</a>
		</div>
		<div class="page-body">
			<div class="lock-head"> Locked </div>
			<div class="lock-body">
				<div class="lock-cont">
					<div class="lock-item">
						<div class="pull-left lock-avatar-block">
							<img src="images/imagendthuan.jpg" class="lock-avatar"> 
						</div>
					</div>
					<div class="lock-item lock-item-full">
						<form class="lock-form pull-left " action="" method="post">
							<h4>{{$admin->name}}</h4>
							<div class="form-group">
								<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" />
							</div>
							<br>
							<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Unlocked</button>
						</form>
					</div>
				</div>
			</div>
			<div class="lock-bottom">
				<a href="login.html">Not is {{$admin->name}}?</a>
			</div>
		</div>
	</div>
</body>
</html>