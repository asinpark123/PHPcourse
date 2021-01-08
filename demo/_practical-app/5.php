<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


	/*  Step1: Use a pre-built math function here and echo it


		Step 2:  Use a pre-built string function here and echo it


		Step 3:  Use a pre-built Array function here and echo it

	*/
	$string = "This is a string";
	$someArray = array('word', 25, 'fishing', 124, $string);

	echo "Step 1" . '<br>';

	echo sqrt(rand(1,256)) . '<br>';
	echo '<br>';
	

	echo "Step 2" . '<br>';
	
	$lenValue = strlen($string);
	
	echo $lenValue . '<br>';
	echo '<br>';
	

	echo "Step 3" . '<br>';

	$found	= in_array($string, $someArray);

	if($found){
		echo "There's a match" . '<br>';
	}
	else{
		echo "No matches found" . '<br>';
	}

	echo '<br>';


	function ($a,$b){
		while(fmod($a,$b) != 0){
			echo "";
		}
	}



		
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>