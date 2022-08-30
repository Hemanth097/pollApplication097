<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$option1 = $_POST["option-1"];

	
	

	$uqno  = $_POST["uqno"];
	$voteopt = $_POST["option-n"];
	include 'db.php';
	$sql = "INSERT INTO `poll_application`.`poll` (`slno`, `uqno`, `voteopt`, `time`) VALUES (NULL, '$uqno', '$voteopt', CURRENT_TIMESTAMP)";
	$result = mysqli_query($condb, $sql);
        if ($result){
            	echo  $uqno."<br>";
				echo  $voteopt. "<br>";

				echo "Insert successful";
        }



}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

	<form action="index.php" method="POST">
		<input type="text" name="option-1" value="option 1" readonly>
		<input type="text" name="option-2" value="option 2" readonly>
		<input type="text" name="option-n" placeholder="Enter your option">
		<input type="text" name="uqno" placeholder="Enter your number">
		<input type="submit" name="submit your response">
	</form>

</body>
</html>