<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php

		/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP


	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
		$i = 1;
		if ($i == 1) {
			echo "I love PHP";
		} elseif ($i == 0) {
			echo "I don't like PHP";
		} else {
			echo "Invalid input";
		}
		echo "<br>";


		for ($i = 0; $i < 10; $i++) {
			echo $i . "<br>";
		}

		$j = 4;
		switch ($j) {
			case (0):
				echo "the number is 0";
				break;
			case (1):
				echo "the number is 1";
				break;
			case (2):
				echo "the number is 2";
				break;
			case (3):
				echo "the number is 3";
				break;
			case (4):
				echo "the number is 4";
				break;
			case (5):
				echo "the number is 5";
				break;
			default:
				echo 'Invalid integer';
		}
		?>






	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>