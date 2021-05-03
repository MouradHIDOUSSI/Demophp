<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	<a href="9.php?id=10">Click Here</a>
	<?php 
	print_r($_GET); 
	echo $_GET['id'];
	$name= "Mourad";
	$value= 200;
	$expiration = time() + (60*60*24*365);
	setcookie($name, $value, $expiration);
	echo $_COOKIE['Mourad'];
	session_start();
	
	$_SESSION['welcome']= "Welcome students";
	echo $_SESSION['welcome'];
	echo "<br>";
	print_r($_SESSION);
	
	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it
		
		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>