<!DOCTYPE html>
<html>
<head>
	<title>Poll Application sample -BeasT9086</title>
	
</head>
<body>

	<h2>Question</h2>
	<div class="boxes">
		<?php
			$choice = 0;
		?>
		
		<h3 style="width:100px;height:40px;border:1px solid;" onclick="func(1);">option 1</h3>
		<h3 style="width:100px;height:40px;border:1px solid;" onclick="func(2);">option 2</h3>
		<input type="text" name="newOption" placeholder="Enter your option"><br>
		<input type="text" name="your number" placeholder="Enter your number"><br>
		<input type="submit" name="sub" value="submit your response"><br>
	</div>
	


	<?php
		if ($choice > 0) {
			echo "<h2 id='test'> ". $i . "entered</h2>";
		}
	?>

</body>
</html>