<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$comment = $_POST['comment'];
	
	echo "This is confirmation page";

	echo "<h1>your name: $name</h1>";
	echo "subject: $subject";
	echo "your comment: $comment";

	

	 ?>

</body>
</html>