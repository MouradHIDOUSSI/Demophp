<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 

	echo pow(2,7);
	echo "<br>";
	$str = "Mourad";
	echo strtoupper($str);
	echo "<br>";
	$table = [1,2,3,4,5,6,7];
	echo "<br>";
	echo max($table);
/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>