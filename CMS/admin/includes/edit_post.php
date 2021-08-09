<?php 
if(isset($_GET['p_id'])){
    $p_id = $_GET['p_id'];
    $query = "SELECT * FROM posts WHERE post_id = {$p_id}";
    $send_get_post_by_id = mysqli_query($connection1,$query);
    while($row = mysqli_fetch_assoc($send_get_post_by_id)){
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
    }
    if(isset($_POST['update_post'])){
        $post_title = $_POST['title'];
        $post_author = $_POST['author'];
        $post_category = $_POST['post_category_id'];
        $post_status = $_POST['post_status'];
        $post_image = $_FILES['image']['name'];
        $post_image_temp = $_FILES['image']['tmp_name'];
        $post_content = $_POST['post_content'];
        $post_tags = $_POST['post_tags'];

        move_uploaded_file($post_image_temp, "../images/{$post_image}");

        $query = "UPDATE posts SET 
        post_title = '$post_title', 
        post_title = '$post_title', 
        post_title = '$post_title', 
        post_title = '$post_title', 
        post_title = '$post_title', 
        post_title = '$post_title', 
        post_title = '$post_title', 
        post_title = '$post_title' 
        WHERE post_id = '$p_id' ";

        $send_update_post_query = mysqli_query($connection1, $query);
        confirm_query($send_update_post_query);
    }
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $post_title; ?>"/>
    </div>
    
    <div class="form-group">
        <label for="post_category">Post Category Id</label>
        <select name="post_category_id" id="post_category_id">
            <?php 
            // Category dropdown
            $query = "SELECT * FROM categories ";
            $send_get_categories_query = mysqli_query($connection1, $query);
            confirm_query($send_get_categories_query);

            while($row = mysqli_fetch_assoc($send_get_categories_query)){
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
                echo "<option value='{$cat_id}'>{$cat_title}</option>";
            }
            
            ?>
        </select>
    </div>
    
    <div class="form-group">
        <label for="title">Post Author</label>
        <input type="text" class="form-control" name="author" value="<?php echo $post_author; ?>"/>
    </div>
    
    <div class="form-group">
        <label for="post_status">Post Status</label>
        <input type="text" class="form-control" name="post_status" value="<?php echo $post_status; ?>"/>
    </div>
    
    <div class="form-group">
        <label for="post_image">Post Image</label><br>
        <img style="height: 100px; padding: 5px" src="../images/<?php echo $post_image; ?>" alt="">
        <input type="file" name="image" />
    </div>
    
    <div class="form-group">
        <label for="post_tags">Post Tags</label>
        <input type="text" class="form-control" name="post_tags" value="<?php echo $post_tags; ?>"/>
    </div>
    
    <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" rows="10" cols="30"><?php echo $post_content; ?></textarea>
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_post" value="Update Post">
    </div>
</form>

<?php } ?>