<?php
	$quotes = [
		[
			"author"=>"arnest hemingway",
			"text"=>"tit for tats",
		],
		[
			"author"=>"david bradly",
			"text"=>"rise in the  sun",
			
		],
		[
			"author"=>"mike tison",
			"text"=>"finish his nose",
		],
		[
			"author"=>"amitabh bachan",
			"text"=>"life is a bed of roses",
		],
		[
			"author"=>"shakib al hasan",
			"text"=>"we are not  good at short form of  cricket",
		],
		[
			"author"=>"gazi ashraf hossain lipu",
			"text"=>"papon is a bullshit ",
		],
		[
			"author"=>"benzir ahmed",
			"text"=>"those all are  nutshells",
		],
	];
	$quote = $quotes[array_rand($quotes)];  //array_rand($quotes) -> displays the index
	$text = $quote['text'];
	$author = $quote['author'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Random generating quotes using php</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<div class="container">
			<h2>"<?php echo $text; ?>"</h2>  <!--here generates the quotes of the  author-->
			<strong><?php echo $author; ?></strong> <!--here generates the name of the author-->
		</div>
	</body>
</html>

