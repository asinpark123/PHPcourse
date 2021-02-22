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
	
	$password = 'randomstring';
	$hashFormat = '16randcharacters';
	$salt = '$5$9000$';

	$hashedSalt = $hashFormat . $salt;

	echo crypt($password, $hashedSalt);

	?>





    </article>
    <!--MAIN CONTENT-->
    <?php include "includes/footer.php"; ?>