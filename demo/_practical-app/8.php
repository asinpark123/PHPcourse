<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>


    </aside>
    <!--SIDEBAR-->



    <article class="main-content col-xs-8">


        <?php  

	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/
	
	$pw = 'someRandomString1590';
	$hashFormat = '$2y$11$';
	$salt = 'fhU9ehfao34uh2h1gG1oE3';

	$hashedSalt = $hashFormat . $salt;
	echo $hashedSalt . '<br>';

	$spw = crypt($pw, $hashedSalt);

	echo $spw;
	?>





    </article>
    <!--MAIN CONTENT-->
    <?php include "includes/footer.php"; ?>