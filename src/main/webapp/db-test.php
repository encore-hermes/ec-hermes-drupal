<html>
<body>
	<?php
	$pdo = new PDO("java:comp/env/jdbc/larinde");
	$sql = "SELECT * FROM translators";
	$result = $pdo->query($sql);

	echo "<div align=\"center\" style=\"font-size: medium;\">Translators</div>";
	foreach ($result as $rs){
		echo ($rs['firstname'] . "  " . $rs['lastname'] . "<br/>");
	}

	echo "<div align=\"center\" style=\"font-size: medium;\">Loaded Extensions</div>";
	$loaded_extensions = get_loaded_extensions();
	foreach ($loaded_extensions as $ext){
		echo ($ext . "<br/>");
	}
	?>
</body>
</html>
