<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>HomePage</title>
</head>
<body>
	
	<h1 class="welcome">Welcome 
		<?php echo $_SESSION['username']?>
		<h2><a class="logout-btn" href="logout.php">Logout</a></h2>
	</h1>


    

</body>
</html>