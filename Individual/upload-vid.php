<?php?>
<!doctype html>
<html>
	<head>
		<title>User Upload</title>
		<meta charset="utf-8" />

	</head>
	<body>
		<fieldset>
		<form method='post'  action='process-upload.php'>
        Video Link: <input type='text' name='link'>
				<br><br>
				Category:
		      <select name="category">
						<option value="Themed">Theme of the Week</option>
		        <option value="Breakfast">Breakfast</option>
		        <option value="Lunch">Lunch</option>
		        <option value="Dinner">Dinner</option>
		      </select>
					<br><br>
			<input type='submit'>
		</form>
		<br>

		<a href="dashboard.php"><button>Back</button></a>
		<br>
		<br>
	</fieldset>
	</body>
</html>

<?php?>
