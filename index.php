<!DOCTYPE html>
<html>
<head>
	<title>Group class</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h3>php syntax</h3>
		<h3>php echo</h3>
		<?php 
			echo 'this is php echo';
			echo '<br>';
			echo "this is php echo for double quote";
		 ?>
		 <h3>php variable</h3>
		 <?php 
		 	//php variable...
		 	$Name = 'shamima';
		 	echo $Name;
		 	echo '<br>';
		  ?>

		  <h3>php concetenation</h3>
		  <?php 
		  		//php concetenation...
		  		$FirstName = 'shamima';
		  		$LastName = 'akter';
		  		echo $FirstName . " " . $LastName;
		  		echo '<br>' 
		   ?>

		  <h3>Discuss datatype</h3>
		  		<h2>Sclar</h2>
		  			<ul>
		  				<li>Number :</li>
			  				<p>Integer</p>
					  			<?php 
					  				//php Integer...
					  				echo 10;
					  				echo '<br>';
					  			 ?>
			  				<p>Floate/Double</p>
					  			<?php 
					  				//php Flote/double
					  				echo 10.5;
					  				echo '<br>';
					  				echo '<br>';
					  			 ?>
				  		<li>Boolean</li>
				  			<p>true</p>
				  				<?php
				  					// this is true statement..
				  					$fileUpload = "True"; 
				  					if($fileUpload){
				  						echo "The file was uploaded";
				  					}
				  					else{
				  						echo "The file was not uploaded";
				  						echo "<br>";
				  					}
				  				 ?>
				  			<p>False</p>
				  				<?php 
				  					//This is false statement...
				  					$fileUpload = "false";
				  					if($fileUpload){
				  						echo "The file was not uploaded";
				  						echo "<br>";
				  					}
				  					else{
				  						echo "The was uploaded";
				  					}
				  					echo "<br>";
				  					echo "<br>";
				  				 ?>
				  		<li>String:</li>
				  			<?php 
				  				//string example..
				  				echo "This is an string example";
				  				echo "<br>";
				  			 ?>
		  			</ul>
		  		<h2>Composit..</h2>
		  		<h3>There are three types of array </h3>
		  			<ol>
		  				<li>Index Array</li>
			  				<?php 
			  					//this is index array
			  					$friends = ['juli','munni','rupa','moni'];
			  					var_dump($friends);
			  					echo '<br>';
			  					print_r($friends);
			  					echo '<br>';
			  					echo '<br>';
			  				 ?>
			  			<li>Associative Array</li>
			  				<?php 
			  					//this is associative array
			  					$friends = ['juli => 20','munni => 21', 'rupa => 22', 'moni => 23'];
			  					var_dump($friends);
			  					echo '<br>';
			  					echo '<br>';
			  				 ?>
			  			<li>Multidimentional Array</li>
			  				<?php 
			  					//multidimentional array..
			  					$users =[
			  							[
			  								'name' => 'akter',
			  								'email' => 'akter@yahoo.com',
			  								'password' => 'akter'
			  							],
			  							[
			  								'name' => 'rahaman',
			  								'email' => 'rahaman@yahoo.com',
			  								'password' => 'rahaman'
			  							]
			  					];
			  					var_dump($users);
			  				 ?>
		  			</ol>
		  		<h3>Object:</h3>
		  			<?php 
		  				//php object..
		  				echo "object is a large thing";
		  				echo "<br>";
		  			 ?>
		  		<h2>Null</h2>
		  			<?php
		  				//php null 
		  				echo 'Null is empty variable';
		  				echo '<br>';
		  			 ?>
		  		<h2>Resource</h2>
		  			<?php 
		  				//php resource..
		  				echo 'It is select an external function';
		  			 ?>

		  	<h3>There are many types of operator</h3>
		  		<ol>
		  			<li>Arithmetic Operator</li>
			  			<?php 
			  				//php arithmetic operator..(+,-,*,/,%)
			  				$friends = "21";
			  				$fruits = "23";
			  				echo $friends * $fruits;
			  				echo '<br>';
			  				echo '<br>';
			  			 ?>
			  		<li>Assignment Operator</li>	
			  			<?php 
			  				//php assignment operator..(+=,-=,*=,/=,%=)
			  				$farhana = '25';
			  				$farhana += '5';
			  				echo $farhana;
			  			 ?>
			  		<li>Logical Operator</li>
			  			<p>operator &&</p>
				  			<?php 
				  				//php logical operator..(&&)
				  				$userName = 'shamimaakter';
				  				$email = 'shamimaakter@gmail.com';
				  				if ($userName == 'shmimaakter' && $email == 'shamimaakter@gmail.com') {
				  					echo 'you are welcome';
				  					echo '<br>';
				  				}
				  				else{
				  					echo 'your user or email is wrong';
				  				}
				  			 ?>
				  		<p>operator ||</p>
				  			<?php 
				  				//php logical operator..(||)
				  				$userName = 'shamimaakter';
				  				$email = 'shamimaakter@gmail.com';
				  				if ($userName == 'shmimaakter' || $email == 'shamimaakter@gmail.com') {
				  					echo 'you are welcome';
				  					echo '<br>';
				  					echo '<br>';
				  				}
				  				else{
				  					echo 'your are not login';

				  				}
				  			 ?>
				  	<li>Comparison operator</li>
				  			<?php 
				  				//php comparison operator ==, !=, >, >=, <, <=
				  				$shamima = '24';
				  				$farhana = '25';
				  				if($shamima == $farhana){
				  					echo 'they are same';
				  				}
				  				else{
				  					echo 'they are not same';
				  				}
				  			 ?>
		  		</ol>
	</div>
</body>
</html>

