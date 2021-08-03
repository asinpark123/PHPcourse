                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Author</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Tags</th>
                                        <th>Comments</th>
                                        <th>Date</th> 
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <tr>
                                        <?php 
                                        $query = 'SELECT * FROM posts ';
                                        $send_get_post_query = mysqli_query($connection1,$query);
                                        while($row = mysqli_fetch_assoc($send_get_post_query)){
                                            $post_id = $row['post_id'];
                                            $post_category_id = $row['post_category_id'];
                                            $post_title = $row['post_title'];
                                            $post_author = $row['post_author'];
                                            $post_date = $row['post_date'];
                                            $post_image = $row['post_image'];
                                            $post_content = $row['post_content'];
                                            $post_tags = $row['post_tags'];
                                            $post_comment_count = $row['post_comment_count'];
                                            $post_status = $row['post_status'];

                                            echo "<tr>
                                            <td>{$post_id}</td>
                                            <td>{$post_author}</td>
                                            <td>{$post_title}</td>
                                            <td>{$post_category_id}</td>
                                            <td>{$post_status}</td>
                                            <td><img src='../images/$post_image' style='width: 100px;'></td>
                                            <td>{$post_tags}</td>
                                            <td>{$post_comment_count}</td>
                                            <td>{$post_date}</td>
                                            <td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>
                                            <td><a href='posts.php?delete={$post_id}'>Delete</a></td>
                                            </tr>"; 
                                        }
                                        ?>

                                        <?php
                                        // Delete code
                                        if(isset($_GET['delete'])){
                                            $id = $_GET['delete'];
                                            $query = "DELETE FROM posts WHERE post_id = $id ";
                                            $send_delete_query = mysqli_query($connection1, $query);
                                            if(!$send_delete_query){
                                                die("Delete failed: " . mysqli_error($connection1));
                                            }
                                        }
                                        ?>
                                    </tr>
                                </tbody>
                            </table>

