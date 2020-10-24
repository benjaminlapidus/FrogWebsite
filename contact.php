<?php
$customCSS="<link rel='stylesheet' href='css/forms.css'>";
include "inc/html-top.php";
?>

<body>
<div class="container">

<header>
	<h1>Frogs</h1>
	<div class="subtitle">Leaping anuran amphibians</div>
</header>

<?php include "inc/nav.php"; ?>

<form action="form-processor.php" method="post" class="full-width">

	<label for="name">Name:</label>
	<input type="text" id="name" name="name"><br><br>

	<label for="mail">Email:</label>
	<input type="email" id="mail" name="mail"><br><br>

	<label for="phone">Phone number:</label>
	<input type="text" id="phone" name="phone"><br><br>
	<fieldset>
	    <legend>Frog Intake</legend>

		<h3>Pop Quiz: Frog Facts</h3>
		<p>Select all that are correct.</p>

		<input type="checkbox" id="first" name="first" value="Frogs have four legs">
	  	<label for="first">Frogs have four legs</label><br>
	  	<input type="checkbox" id="second" name="second" value="I havea  fear of frogs">
	  	<label for="second">I have a fear of frogs</label><br>
	  	<input type="checkbox" id="third" name="third" value="Frogs are mythical">
	  	<label for="third">Frogs are mythical</label><br>

	  	<h3>Frog Poll</h3>
		<p>Have you ever seen a frog?</p>
		 <input type="radio" id="yes" name="seenFrog" value="yes">
		<label for="yes">Yes</label><br>
		<input type="radio" id="no" name="seenFrog" value="no">
		<label for="no">No</label><br>
		<input type="radio" id="na" name="seenFrog" value="N/A">
		<label for="na">I don't understand the question</label> <br><br>
		<label for="frogbox">Share five things you learned about frogs:</label><br>

		<textarea id="frogbox" name="frogbox">

		</textarea> 
	 </fieldset>
	  <input type="submit" value="Leap away!">
	</form>


</div>
<?php include "inc/scripts.php"; ?>
</body>
</html>
