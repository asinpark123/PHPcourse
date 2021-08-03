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
                            Posts
                            <small>Author</small>
                        </h1>
                        <div class="col-xs-12">
                            <!-- Posts PHP -->
                            <?php 
                            if(isset($_GET['source'])){
                                $source = $_GET['source'];
                            }
                            else {
                                $source = '';
                            }
                            switch($source){
                                case 404;
                                echo "Not found"; 
                                break;
                                
                                case 'add_post';
                                include "includes/add_post.php"; 
                                break;
                                
                                case 'edit_post';
                                include "includes/edit_post.php";
                                break;

                                case '300';
                                echo 'ECHO 03';
                                break;

                                default:
                                include "includes/admin_all_posts.php"; 
                                break;
                            }
                            ?>
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
