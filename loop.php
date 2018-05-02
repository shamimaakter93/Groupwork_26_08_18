<?php 
	$friends = ['juli', 'munni', 'faru', 'monju', 'raju', 'arju'];
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>looping</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h3>There are 4 kinds of loop in php:</h3>
			<h4>For loop</h4>
				<ul>
					<?php// forloop in php.. ?>
					<?php for ($i=0; $i < count($friends); $i++) : ?>
						<li><?php echo $friends[$i];  ?></li>
				    <?php endfor ?>
				</ul>


			<h4>For each loop</h4>
				<ol>
					<?php //foreach loop in php... ?>
					<?php foreach ($friends as $friend): ?>
						<li><?php echo $friend; ?></li>
					<?php endforeach ?>
				</ol>


			<h4>While loop</h4>
				<ol>
					<?php //while loop in php.... ?>
					<?php $i = 0; ?>
					<?php while ($i <= count($friends)): ?>
						<li><?php echo $friends[$i]; ?></li>
					<?php $i++; endwhile ?>
				</ol>
	</div>
</body>
</html>