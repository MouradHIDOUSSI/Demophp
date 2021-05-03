<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php
		if (1 > 5) {
			echo "1>5";
		} elseif (2 > 5) {
			echo "2>5";
		} else {
			echo "I love PHP";
		}

		echo "<br>";
		for ($counter = 0; $counter < 10; $counter++) {
			echo "counter = " . $counter . "<br>";
		}

		echo "<br>";

		switch ($number = 10) {
			case 1:
				echo "number is not equal";
				break;
			case 2:
				echo "number is not equal";
				break;
			case 3:
				echo "number is not equal";
				break;
			case 4:
				echo "number is not equal";
				break;
			case 10:
				echo "number is  equal";
				break;
			default:
				echo "nothing matches the cases";
				break;
		}
		/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
	


	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */


		?>






	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php" ?>