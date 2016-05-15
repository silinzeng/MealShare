<!-- Newsfeed page for MealTyme -->


<html>
	<head>
		<title>News Feed</title>
	</head>
	<body>
		<h1>New Deals</h1>
		<ol>
			<?php
			$deals = glob("*.txt");
			foreach ($deals as $deal) {
				$info = file($deal, FILE_IGNORE_NEW_LINES);
				// 0 -> Restaurant
				// 1 -> address
				// 2 -> phone
				// 3 -> food item
				// 4 -> original price
				// 4 -> discounted price 
				// 6 -> start
				// 7 -> end ?>
				<li><?=$info[0]?>
						<p><?=$info[1]?></p>
						<p>Phone: <?=$info[2]?></p>
						<p>Food Item: <?=$info[3]?></p>
						<p>Original Price: $<?=$info[4]?></p>
						<p>Discount Price: $<?=$info[5]?></p>
						<p>Hours: <?=$info[6]?> - <?=$info[7]?></p>
				</li>

			<?php }
			?>
		</ol>
	</body>
</html>