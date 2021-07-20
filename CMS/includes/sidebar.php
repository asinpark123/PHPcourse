            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method="POST">
                        <div class="input-group">
                            <input name="search" type="text" class="form-control">
                            <span class="input-group-btn">
                                <button name="submit" class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span></button>
                            </span>
                        </div>
                        <!-- /.input-group -->
                    </form> <!-- search form -->
                </div>
                                <!-- Blog Categories Well -->
                <?php $query = "SELECT * FROM categories";
                $SEND_category_query = mysqli_query($connection1, $query);
                ?>

                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                <?php
                while($row = mysqli_fetch_assoc($SEND_category_query)){
                    $cat_title = $row['cat_title'];
                    echo "<li style='color: #9d9d9d;'><a href='#'>{$cat_title}</a></li>";
                }
                ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                

                <!-- Side Widget Well -->
                <?php include "widgets.php" ?>


            </div>