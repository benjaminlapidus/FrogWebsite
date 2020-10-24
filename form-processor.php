<?php
// NOTICE: this part of this HTML document is just one PHP tag
//  This script doesn't output anything to the user's browser
//  so there is no DOCTYPE or any of the usual HTML things
//  in this part

// **********************************
// SECTION ONE: set all the variables
// **********************************

// set some variables
$emailFrom = "benlapidus12@gmail.com"; // use YOUR email for both lines 12 and 13
$emailTo = "blapidus@u.rochester.edu";
$subject = "Lab 13 - HTML Forms";

// the following lines of code will grab the data being passed 
//   from the method="post" in the HTML form and hold it in a variable

// the words inside each $_POST[] must match a name="" attribute from the 
//   HTML form EXACTLY; then create a variable on the left side that
//   makes sense for the data it will hold

// these are from the text INPUT fields...
$name = Trim(stripslashes($_POST['name'])); 
$mail = Trim(stripslashes($_POST['mail'])); 
$phone = Trim(stripslashes($_POST['phone'])); 
// ...used more input fields? Then copy these lines (above)
//   and make more

// these are from the INPUT type="checkbox" fields...
$first = $_POST['first']; 
$second = $_POST['second']; 
$third = $_POST['third']; 
// ...used more checkboxes? Then copy these lines (above)
//   and make more

// this is from all the INPUT type="radio" fields...
$seenFrog = $_POST['seenFrog']; 
// notice: no matter how many radio buttons, there's only one answer

// this is from the TEXTAREA field...
$frogbox = Trim(stripslashes($_POST['frogbox'])); 

// **********************************
// SECTION TWO: build the email body
// **********************************

$body = ""; // initialize the variable, then start concatenating
			// backslash-n means new-line in emails

$body .= "Name: \n"; //...a label
$body .= $name;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "Email: \n"; //...a label
$body .= $mail;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "Phone: \n"; //...a label
$body .= $phone;	  //...a variable
$body .= "\n\n";			  //...a new line
// ...used more input fields? Then copy these lines (above)
//   and make more

// Do your checkboxes this way...
$body .= "Frog Facts: \n"; 	 	// a heading for your checkbox section

if (isset($first)) {		// a checkbox variable
	$body .= $first . "\n";	// the same checkbox variable
}
if (isset($second)) {		// a checkbox variable
	$body .= $second . "\n";	// the same checkbox variable
}
if (isset($third)) {		// a checkbox variable
	$body .= $third . "\n";	// the same checkbox variable
}
$body .= "\n";
// ...used more checkbox fields? Then copy these lines (above)
//   and make more

// This is for your radio buttons (always just one answer)...
$body .= "Have you ever seen a frog?: \n";		// a heading for your radio button section
$body .= $seenFrog;			// the (one) radio button variable
$body .= "\n\n";

// This is for your TEXTAREA
$body .= "Share five things you learned about frogs: \n";		// a heading for your text area
$body .= $frogbox;			// the variable for your text area
$body .= "\n";

// **********************************
// SECTION THREE: send the email
// **********************************
// You won't need to edit anything here...

// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");


//end the PHP block here...
?>

<!-- **********************************
	 SECTION FOUR: thank the user in HTML;
	 Below, there needs to be an HTML 
	 webpage with a customized message 
	 for the user
	 ********************************** -->


<?php include "inc/html-top.php"; ?>

<body>
<div class="container">

<header>
	<h1>Frogs</h1>
	<div class="subtitle">Leaping anuran amphibians</div>
</header>

<?php include "inc/nav.php"; ?>


<main class="full-width">
  <h2>Thank You <?php echo $name; ?></h2>
  <p>Hop back to <a href="overview.php">the frog page</a>.</p>
</main>

</div>
<?php include "inc/scripts.php"; ?>
</body>
</html>
