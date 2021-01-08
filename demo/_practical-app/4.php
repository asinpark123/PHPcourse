<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php

		/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values

 */


		function calculate($a, $b)
		{
			$sum1 = $a + $b;
			return $sum1;
		}


		function concatinate($str1, $str2)
		{
			$sentence = $str1 . ' wants to ask ' . $str2 . ' out to dance.';
			echo $sentence;
		}


		function init()
		{
			echo calculate(5, 32) . '<br>';
			concatinate('Jimmy', 'Allice');
		}
		init();

		?>





	</article>
	<!--MAIN CONTENT-->


	<?php include "includes/footer.php"; ?>