<!DOCTYPE html>
<html lang="de">
<?php
	include "palindrom-function.php";
?>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Palindrom-Check</title>
  </head>
  <body>
  	<div class="input">
  		<form class="palindrom-input">
  			<h3>Hier bitte zu prüfenden String eintragen:<br></h3>
  			<input type="text" name="string" id="pal-check">
 			<input type="submit" name="submit-palcheck">
  		</form>
  	</div>
  	<div class="output">
  		<?php
  		$check = palindromCheck($_GET["string"]);
  			if($check===1) {
  		?>
  			<p>
  				Der String '<?php echo $_GET["string"]; ?>' ist ein Palindrom.
  			</p>
  		<?php
  			}
  			else if($check===0) {
  		?>
  			<p>
  				Der String '<?php echo $_GET["string"]; ?>' ist kein Palindrom.
  			</p>
  		<?php
  			}
  			if($check==="Error") echo "<p>Kein String übergeben. Bitte String eingeben.</p>";	
  		?>
  	</div>
  </body>
</html>