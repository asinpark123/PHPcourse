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



if(!$_POST||isset($_POST['return'])){
    echo '<h1>Form Exercise</h1>
    <form action="6.php" method="POST">
    <input type="email" name="email" placeholder="Type in your email address">
    <input type="submit" name="submit">
    </form>';
}
elseif(isset($_POST['submit'])){
    $emailAddr = $_POST['email'];
	if($emailAddr){
        echo 'Your email has been confirmed as: ' . $emailAddr;
        echo "<br>";
        echo '<form action="6.php" method="POST">
        <input type="submit" name="return" value="Return">
        </form>';
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


            </body>

        </html>


    </article>
    <!--MAIN CONTENT-->
    <?php include "includes/footer.php"; ?>