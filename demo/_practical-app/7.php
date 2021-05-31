<?php include "functions.php"; ?>
<?php include "includes/header.php";?>


<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>


    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">

        <?php  

		/*  Step 1 - Create a database in PHPmyadmin

			Step 2 - Create a table like the one from the lecture

			Step 3 - Insert some Data

			Step 4 - Connect to Database and read data

		*/

		$connection = mysqli_connect('localhost','root','','test7');
		$readQuery = "SELECT * FROM users ";
		$readResult = mysqli_query($connection, $readQuery);
		
		if(!$connection){
			die("Failed to connect to the database");
		}
		
		if(isset($_POST['Array'])){
			echo "";
		}

		elseif (isset($_POST['submit'])){
			$pw = $_POST['password'];
			$id = $_POST['username'];

			if(!$pw||!$id){
				echo "Please enter your Username and Password!";
			}
			
			$query = "INSERT INTO users(username,password)";
			$query .= "VALUES ('$id','$pw')";
			
			$result = mysqli_query($connection, $query);
			if(!$result){
				die("Query has failed: " . mysqli_error($connection));
			}
		}

		elseif (isset($_POST['read'])){
			
			if(!$readResult){
				die("Query has failed: " . mysqli_error($connection));
			}
			

	?>

	<div class="container" style="width: 100%;">
		<h1>Connect to DB</h1>
		<?php
		if($readResult){
			while($row = mysqli_fetch_assoc($readResult)){
		?>
	<pre>
		<?php
			print_r($row);
		?>
	</pre>
		<?php
			}
		}
		elseif(!$readResult){
			echo "No data";
		}
		}

		?>
		<form action="7.php" method="POST">
			<label for="username">Username</label>
			<input type="text" name="username">
			<br>
			<label for="password">Password</label>
			<input type="password" name="password">
			<br>
			<br>
			<input type="submit" name="submit">	
			<input type="submit" name="read" value="Read">	
		</form>
	</div>



    </article>
    <!--MAIN CONTENT-->

    <?php include "includes/footer.php"; ?>