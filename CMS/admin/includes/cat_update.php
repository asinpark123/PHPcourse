                            <!-- Category UPDATE -->
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="cat_title">Edit Categories</label>
                                    <?php
                                        if(isset($_GET['edit'])){
                                                $query = "SELECT * FROM categories WHERE cat_id = $cat_id ";
                                                $send_edit_query = mysqli_query($connection1, $query);
                                                
                                                while($row = mysqli_fetch_assoc($send_edit_query)){
                                                    $cat_title = $row['cat_title'];
                                    ?>
                                    
                                    <input value="<?php if(isset($cat_title)){echo $cat_title;} ?>" class="form-control" type="text" name="cat_title">
                                    
                                    <?php
                                        }
                                    }
                                    ?>

                                    <!-- Update Query -->
                                    <?php 
                                        if(isset($_POST['cat_update'])){
                                            $cat_id = $_POST['cat_id'];
                                            $new_cat_title = $_POST['cat_title'];
                                            $query = "UPDATE categories SET cat_title = '{$new_cat_title}' WHERE cat_id = '{$cat_id}'";
                                            $send_update_query = mysqli_query($connection1, $query);

                                            if(!$send_update_query){
                                                die("Query failed: " . mysqli_error($connection1));
                                            }
                                        }
                                    ?>


                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="cat_update" value="Update">
                                </div>
                            </form>