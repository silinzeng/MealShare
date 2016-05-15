<!-- Newsfeed page for MealTyme -->


<html>
	<head>
		<title>News Feed</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="MealShare.html">Meal Time</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li><a href="about.html">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>
	<body>
		<h1 id="dealsTitle">New Deals</h1>
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
				<li class="food"><?=$info[0]?>
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
