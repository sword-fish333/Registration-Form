<link rel="stylesheet" type="text/css" href="style/style.css">
<?php

session_start();
?>

<body class="body content">
	<div class="welcome">
		<div class="alert alert-success"><?php echo $_SESSION['message']; ?></div>
			
			<center><img src="<?= $_SESSION['avatar'] ?>"></center><br>
			<center><h1 style="color:white; display: inline;"><i><b>Welcome</b></i></h1>
			<span class="user" style="margin-left: 20px;">&nbsp;<?= $_SESSION['username'] ?></span></center>
		
	


<?php

$mysqli=new mysqli('localhost', 'root','','accounts');
$sql='SELECT username, avatar FROM users';
$result=$mysqli->query($sql);
?>

<div id="registered" >
	<span><i><b>All users loged in:</b></i></span>
	<?php
	while($row=$result->fetch_assoc()){
		
		/*echo "<pre>";
		print_r($row);
		echo "</pre>";
		*/

		echo "<div class='userlist'><span>$row[username]</span><br>";
		echo "<img src=' $row[avatar]'></div>";
	}
	?>
</div>
</div>
</body>