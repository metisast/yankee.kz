<?php
    include('template/header.php');
?>

<div class="container">
		<br>
		<h2>Камеры видеонаблюдения</h2>
		<br>
		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo"><h2>Астана</h2></button>
		<div id="demo" class="collapse">
			<form class="form-signin" role="form" action="save_user.php" method="post">
				<div class="form-group">
					<input type="text" placeholder="Логин" name="login" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<input type="password" placeholder="Пароль" name="password" class="form-control" required>
				</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Войти</button>
			</form>
		
		</div>

		<br><br><br>
		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1"><h2>Алматы</h2></button>
		<div id="demo1" class="collapse">
			<form class="form-signin" role="form" action="save_user_ala.php" method="post">
				<div class="form-group">
					<input type="text" placeholder="Логин" name="login" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<input type="password" placeholder="Пароль" name="password" class="form-control" required>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Войти</button>
			</form>
		</div>
		
	  
</div> <!-- /container -->
	
<?php
     	include('template/footer.php');
?>
