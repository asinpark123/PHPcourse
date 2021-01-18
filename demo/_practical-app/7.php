<?php include "functions.php"; ?>
<?php include "includes/header.php";?>


<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>


    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">
        <form action="7.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="submit" value="Submit">
        </form>

        <form action="7.php" method="post">
            <input type="submit" name="read" value="Read">
        </form>

        <?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

	*/
	
	$connection = mysqli_connect('localhost', 'root', '', 'practice');
	if(!$connection){
		die("Connection FAILED" . mysqli_error($connection));
	}
	else{
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$query = "INSERT INTO users(username, password) ";
			$query .= "VALUES ('$username','$password') ";
			
			$queryResult = mysqli_query($connection, $query);
			if(!$queryResult){
				die('Query FAILED' . mysqli_error($queryResult));
			}
			else{
				echo 'Query SUCCESSFUL';
			}
		}
		elseif(isset($_POST['read'])){
			$query = "SELECT * FROM users ";
			$queryResult = mysqli_query($connection, $query);
			while($row = mysqli_fetch_assoc($queryResult)){
				?>

        <pre>

				<?php
				print_r($row);
				?>
				</pre>
        <?php
			}
		}
		
	}
	
	
	?>






    </article>
    <!--MAIN CONTENT-->

    <?php include "includes/footer.php"; ?>