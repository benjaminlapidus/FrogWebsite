<?php
$customCSS="
<link rel='stylesheet' href='css/home.css'>
<link rel='stylesheet' type='text/css' href='sss/sss.css'>
<link rel='stylesheet' href='http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'>
";
include "inc/html-top.php";
?>

<body>
<div class="container">

<header>
	<h1>Frogs</h1>
	<div class="subtitle">Leaping anuran amphibians</div>
</header>

<?php include "inc/nav.php"; ?>

<section class="lead inner-container">
	
	<h2 class="full-width">Hop into the world of frogs</h2>

	<div class="slider">
		<img src="images/slider-frog1.jpg" alt="Beautiful tropical frog sitting in the rainforest"> 
		<img src="images/slider-frog2.jpg" alt="Frog in the forest surrounded by brush"> 
	</div>

	<div id="accordion">
		<h3>Feet and Legs</h3>

		<p>The structure of the feet and legs varies greatly among frog species, depending in part on whether they live primarily on the ground, in water, in trees or in burrows. Frogs must be able to move quickly through their environment to catch prey and escape predators, and numerous adaptations help them to do so. Most frogs are either proficient at jumping or are descended from ancestors that were, with much of the musculoskeletal morphology modified for this purpose. The tibia, fibula, and tarsals have been fused into a single, strong bone, as have the radius and ulna in the fore limbs (which must absorb the impact on landing).</p>

	    <h3>Family and Species</h3>

		<p>The following shows all extant families of Anura. Anura is the name of an order of animals in the class Amphibia that includes frogs and toads. More than 5,000 species are described in the order. The living anurans are typically divided into three suborders: Archaeobatrachia, Mesobatrachia, and Neobatrachia. This classification is based on such morphological features as the number of vertebrae, the structure of the pectoral girdle, and the morphology of tadpoles.</p>
	</div>

</section>

</div>

<?php include "inc/scripts.php"; ?>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="sss/sss.js"></script>

<script>
$('.slider').sss();
</script>

<script>
$( "#accordion" ).accordion({
	collapsible: true,
	heightStyle: "content"
});

</script>




</body>
</html>
