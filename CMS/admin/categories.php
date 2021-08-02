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
                            // Category Insertion PHP//
                            insert_cat();
                            ?>
                            <!-- Category Forms -->
                            <!-- Category ADD Form -->
                            <form action="categories.php" method="POST">
                                <div class="form-group">
                                    <label for="cat_title">Add Categories</label>
                                    <input class="form-control" type="text" name="cat_title">
                                </div>                  
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>                                
                            </form>

                            <!-- Category UPDATE Form -->
                            <?php 
                                if(isset($_GET['edit'])){
                                    $cat_id = $_GET['edit'];
                                    include 'includes/cat_update.php';
                                }
                            ?>
                        </div>

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
                                        <!-- Fetch ALL from categories table -->
                                        <?php fetch_all_cat(); ?>

                                        <!-- DELETE Category -->
                                        <?php 
                                            delete_cat();
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
