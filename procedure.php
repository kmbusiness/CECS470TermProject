#!/usr/local/php5/bin/php-cgi
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Procedure</title>

	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
</head>
<body>
	<?php include 'dentist-nav.php' ?>
	<div class="container">
		<p>The Office provides numerous of procedures bonding, braces, and many more!</p>
		<p>To preview the procedure: </br>
		1) Click the drop menu. </br>
		2) Select a procedure. </br>
		3) Click on Submit</p>
		<form method="post" action="procedure.php" height="50%">
			<input list="procedures" name="procedures">
			<datalist id="procedures">
				<option name="option" value="Bonding">Bonding</option>
				<option name="option" value="Braces">Braces</option>
				<option name="option" value="Bridges">Bridges</option>
				<option name="option" value="Crowns">Crowns</option>
				<option name="option" value="Whitening">Whitening</option>
				<option name="option" value="Extractions">Extractions</option>
			</datalist>
			<input type="submit" name="sub">
		</form>
		<?php
			if($_POST)
			{
				if(empty($_POST["procedures"])) echo ("*You must select a procedure*");
				else
				{
					if(isset($_POST["sub"]))
					{
						$select = $_POST["procedures"];
						echo("<div id='pro'>");
						if($select == "Bonding")
						{
							echo("Bonding is a procedure that uses adhesive materials to: </br>");
							echo("1) Repair chipped, decayed, or cracked teeth. </br>");
							echo("2) Fill the spaces between teeth. </br>");
							echo("3) Lighten discolored teeth. </br>");
							echo("Here is a video on how the procedure is done. </br>");
							echo('<iframe width="560" height="315" src="https://www.youtube.com/embed/dBlvuOOmFzI" frameborder="0" allowfullscreen></iframe>');
						}
						else if($select == "Braces")
						{
							echo("Braces is a procedure that straighten and align teeth position, the benefits of braces are: </br>");
							echo("1) Improve underbites as well as overbites. </br>");
							echo("2) Correct crooked and crossed teeth. </br>");
							echo("3) Reshape teeth and jaw structure. </br>");
							echo("Here is a video on how the procedure is done. </br>");
							echo('<iframe width="560" height="315" src="https://www.youtube.com/embed/l7knoo8ZTGk" frameborder="0" allowfullscreen></iframe>');
						}
						else if($select == "Bridges")
						{
							echo("Bridge is a procedure that fill the gap between teeth, the benefits of this procedure are: </br>");
							echo("1) Restore the smile. </br>");
							echo("2) Restore the ability to chew and speak. </br>");
							echo("3) Prevent the remaining teeth from drifting out of position. </br>");
							echo("Here is a video on how the procedure is done. </br>");
							echo('<iframe width="560" height="315" src="https://www.youtube.com/embed/nUabgdbiuwA" frameborder="0" allowfullscreen></iframe>');
						}
						else if($select == "Crowns")
						{
							echo("Crowns is tooth-shaped cap that places over a damaged tooth, the benefit of crowns include: </br>");
							echo("1) Protect weak tooth. </br>");
							echo("2) Restore broken or damaged tooth. </br>");
							echo("3) Add support to tooth. </br>");
							echo("Here is a video on how the procedure is done. </br>");
							echo('<iframe width="560" height="315" src="https://www.youtube.com/embed/9Ia_wD5XfmM" frameborder="0" allowfullscreen></iframe>');
						}
						else if($select == "Whitening")
						{
							echo("This procedure is a general cleaning of your teeth, whitening is use for removing stain from: </br>");
							echo("1) Using tobacco. </br>");
							echo("2) Drinking dark-colored liquids. </br>");
							echo("3) General food. </br>");
							echo("Here is a video on how the procedure is done. </br>");
							echo('<iframe width="560" height="315" src="https://www.youtube.com/embed/T69YHXuEr4Q" frameborder="0" allowfullscreen></iframe>');
						}
						else
						{
							echo("Extraction is a removal of teeth from jaw, this procedure is used when: </br>");
							echo("1) Removing wisdom teeth. </br>");
							echo("2) Prevent tooth diseases. </br>");
							echo("3) Remove unrestorable decayed tooth. </br>");
							echo("Here is a video on how the procedure is done. </br>");
							echo('<iframe width="560" height="315" src="https://www.youtube.com/embed/lRXD_4qgK2M" frameborder="0" allowfullscreen></iframe>');
						}
						echo("</div>");
					}
				}
			}
		?>
	</div>
	<?php include 'dentist-footer.php' ?>
</body>
</html>
