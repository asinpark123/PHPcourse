<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>


    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">



        <?php 

	/*  
		Step 1 - Create a link saying Click Here, and set 
		the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/	


    $name= 'testCookie';
    $value= 19900719;
    $expiration= time() + 60*60*24*7;
    setcookie($name,$value,$expiration);

	session_start();
    $_SESSION['birthday'] = $value;
	?>
    
    <a href="9.php?value=19931226">Click Here</a>
    <br>
    <a href="9.php">Initialise</a>

    <?php
    if(isset($_GET['value'])){
        $_SESSION['birthday'] = $_GET['value'];
        echo $_SESSION['birthday'];
    }
    else{
        echo $_SESSION['birthday'];
    }
    ?>

    </article>
    <!--MAIN CONTENT-->
    <?php include "includes/footer.php"; ?>