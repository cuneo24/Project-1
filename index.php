<?php 
	$quotes = array(
	"Our greatest glory is not in never falling, but in rising every time we fall. — Confucius",
	"All our dreams can come true, if we have the courage to pursue them. – Walt Disney",
	"It does not matter how slowly you go as long as you do not stop. – Confucius"
	); //create array of quotes
	
	$length = count($quotes); //get length of array of quotes
	$index = floor(rand(1,$length)) - 1; //return index of a random quote - rand() determines number between 1 and 3 inclusive and floor rounds that number down to an integer
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Project 1 - Michael Cuneo</title>
		<style>
			#wrapper {width : 40%; margin-left: auto; margin-right: auto; background-color: lightblue; padding: 15px; font-family: Arial; box-shadow: 10px 10px 20px gray;}
			h1 {font-size: 48px; text-align: center;}
			img {display: block; margin-left: auto; margin-right: auto; width: 50%; height: 50%; border: 5px solid gray;}
			#description {line-height: 22px;}
			#rquote {text-align: center; font-weight: bold;}
			#quotewrapper {background-color: white; box-shadow:0px 0px 50px white; padding: 5px;}
		</style>
	</head>
	<body>
		<div id="wrapper">
			<h1>Michael Cuneo</h1>
			<img src="images/image1.jpg" alt="Me wishing I was 4 again...">
			<br>
			<div id="description">
				Hello! My name is Michael Cuneo and I am from Salisbury, MA. I currently work for Harvard Dining Services at Dunster House as a cook. What brought me to this course is further pursuit of my education with web technologies. 
				I have a BS in IT from UMass Lowell, where I concentrated on web development and graphic design, but what I learned left me less than confident to enter the world of front-end web development upon graduation. 
				This is my second semester with the Extension School and after the impression the Javascript course left me with, I look very forward to working with everyone this semester! My end goal is a certification in web technologies.
				<br><br>
				In the past I have worked with PHP using a GoDaddy server I had that ran cPanel and MySQL, and it seemed very straightforward at first with database information retrieval, but a few key things I look forward to learning about in this course are email creation, file uploading, and the 
				logic behind creating a login system and users.
			</div>
			<br><br>
			<div id="rquote">
				<span id="quotewrapper"><?php echo $quotes[$index];?></span> <!-- the random index we found earlier will be used to output a random quote from the quote array -->
			</div>
		</div>
	</body>
</html>