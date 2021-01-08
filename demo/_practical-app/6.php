<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>

    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php  

/*  Step1: Make a form that submits one value to POST super global


 */

 $emailAddr = $_POST['email'];


 if(isset($_POST['Array'])){
	 echo '';
 }
 elseif(isset($_POST['submit'])){
	if($emailAddr){
		echo 'Your email has been confirmed as: ' . $emailAddr;
	}
	else{
		echo 'Please type in your email address correctly';
	}
 }




?>


        <!DOCTYPE html>
        <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Form Exercise</title>
            </head>

            <body>
                <h1>Form Exercise</h1>
                <form action="6.php" method="POST">
                    <input type="email" name="email" placeholder="Type in your email address">
                    <input type="submit" name="submit">
                </form>

            </body>

        </html>


    </article>
    <!--MAIN CONTENT-->
    <?php include "includes/footer.php"; ?>
