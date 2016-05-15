<?php
	// name, address, phone, food, reg, new, start, end
	//   0		1		2		3 	4	5		6	7
	$data = array($_POST["name"], $_POST["address"], $_POST["phone"], $_POST["food"], $_POST["regPrice"], $_POST["newPrice"], $_POST["start"], $_POST["end"]);

	for ($i = 0; $i < count($data); $i++) {
		file_put_contents("$data[0].txt", $data[$i] . "\n", FILE_APPEND);
	}

	header("location: newsfeed.php");
?>
