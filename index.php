<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Emma Janani">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Museum Ticket Prices in PHP</title>
  </head>
  <body>
    <?php echo "<h1>Museum Ticket Prices in PHP</h1>"; ?>
		<table>
			<tr align = "center">
				<td valign="top" align="left">
					<?php echo "<h3>This program will tell the user the admission cost depending on their age and day of the week:</h3>"; ?>
					<form action="./results.php" method="post" target="results">						
						<label for="age">Age:</label>
						<input type="number" step="1" min="0" name="age"><br><br>
												
						<label for="day">Day:</label>
						<select name="day" name="day">
						    <option value="">--Day of the Week--</option>
						    <option value="Monday">Monday</option>
						    <option value="Tuesday">Tuesday</option>
						    <option value="Wednesday">Wednesday</option>
						    <option value="Thursday">Thursday</option>
						    <option value="Friday">Friday</option>
							  <option value="Saturday">Saturday</option>
						    <option value="Sunday">Sunday</option>
						</select>
						<br><br>
						<input type="submit" value="Display Cost">
					</form>
				</td>
				<td valign="top" align="center">
					<img src="./images/Museum.jpeg" alt="Museum" width="90%">
				</td>
			</tr>
		</table>
    <br>
    <!-- Create a space where the user information will be displayed -->
    <iframe id="results" name="results">
    </iframe>
    <br>
  </body>
</html>