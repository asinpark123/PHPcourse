<?php include 'includes/admin_header.php' ?>

    <div id="wrapper">

        <!-- Navigation -->

        <?php include 'includes/admin_navigation.php' ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <?php 
                            if(!$connection1){
                                echo "<p style='color: red;'>I'm not connected</p>";
                            }
                        ?>
                        <h1 class="page-header">
                            Categories
                            <small>Author</small>
                        </h1>
                        <div class="col-xs-6">
                            
                            <!-- Form detection and insertion -->
                            <?php 
                            if (isset($_POST['submit'])){
                                $cat_title = $_POST['cat_title'];
                                if(!$cat_title || empty($cat_title) || $cat_title == ""){
                                    echo "<span style='color: red;'>Category Title should not be empty</span>";
                                }
                                // Category Insertion //
                                else{
                                    $query = "INSERT INTO categories(cat_title) VALUE('{$cat_title}') ";
                                    $send_insert_query = mysqli_query($connection1, $query);
                                    
                                    if(!$send_insert_query){
                                        die("Query was unsuccessful" . mysqli_error($connection1));
                                    }
                                }
                            }
                            ?>

                            <!-- Category Form -->
                            <form action="categories.php" method="POST">
                                <div class="form-group">
                                    <label for="cat_title">Add Categories</label>
                                    <input class="form-control" type="text" name="cat_title">
                                </div>                  
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>                                
                            </form>
                        </div>

                        <!-- Category Query PHP -->
                        <?php 
                        $query = "SELECT * FROM categories";
                        $send_category_query = mysqli_query($connection1, $query);
                        ?>

                        <!-- Presenting Category Data -->
                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover"> <!-- table class added: makes tables presentable -->
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <!-- Category data parser -->
                                        <?php 
                                        while($row = mysqli_fetch_assoc($send_category_query)){
                                            $cat_id = $row['cat_id'];
                                            $cat_title = $row['cat_title'];
                                            echo "<tr><td><a href='#'>{$cat_id}</a></td>
                                            <td><a href='#'>{$cat_title}</a></td></tr>";
                                            } 
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include 'includes/admin_footer.php' ?>
