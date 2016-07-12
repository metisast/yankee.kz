<?php
	session_start();
	//require_once '/Mobile_Detect/Mobile_Detect.php';
	include ('template/header.php');

	if(empty($_SESSION['status'])){
		include ('template/time.php');
	}

	if(isset($_SESSION['login']) && isset($_SESSION['password']))
	{
		include ('Mobile_Detect/Mobile_Detect.php');
		$detect = new Mobile_Detect;
		
		if($detect->isMobile())
		{
			echo "
				<select name='camera' id='camera-mobile'>
					<option value='0'>Выберите Аудиторию</option>
					<option value='11'>900</option>
					<option value='12'>908</option>
					<option value='13'>1204</option>
					<option value='14'>500</option>
					<option value='15'>709</option>
					<option value='16'>1202</option>
				</select>
				<a href='/logout.php' class='logout'>Выход</a>
				<div class='video'>
					<video width='90%' controls='1' autoplay='1'>
						
					</video>
				</div>
			";
		}
		else 
		{
			echo "
			<select name='camera' id='camera-pc'>
					<option value='0'>Выберите Аудиторию</option>
					<option value='14'>1201</option>
					<option value='16'>1202</option>
					<option value='17'>1203</option>
					<option value='11'>1204</option>
					<option value='15'>1207</option>
					<option value='24'>1208</option>
					<option value='18'>1301</option>
					<option value='21'>1302</option>
					<option value='19'>1303</option>
					<option value='20'>1304</option>
					<option value='12'>1306</option>
					<option value='22'>1307</option>
					<option value='23'>1308</option>
			</select>
			<a href='/logout.php' class='logout'>Выход</a>
			<div class='camera'>
			
			</div>
			";
		}
	}
	else 
	{
		header('Location: /index.php');
	}
	
	include ('template/footer.php');
?>