<?php 

if(isset($_POST['create_post'])){
    $post_title = $_POST['title'];
    $post_author = $_POST['author'];
    $post_category_id = $_POST['post_category_id'];
    $post_status = $_POST['post_status'];

    //// Below two will use superglobal $_FILES
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    
    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_date = date('d-m-y');
    $post_comment_count = 0;

    move_uploaded_file($post_image_temp, "../images/$post_image");   //// When uploading files, you have to move files from a temporary location into a location in the server via move_uploaded_file($image_temp, $img_file_location); function

    $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status) 
    VALUES('$post_category_id', '$post_title', '$post_author', now(), '$post_image', '$post_content', '$post_tags', '$post_comment_count', '$post_status')";

    // Verify that all fields are filled
    if(!$post_category_id || !$post_title || !$post_author || !$post_image || !$post_content || !$post_tags || !$post_status){
        echo '<span style="color: red; font-weight: 700;">Query Failed: Complete all the fields in the form</span>';
    } else {
        $send_post = mysqli_query($connection1, $query);
        // Die if query fails verification
        confirm_query($send_post);
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" name="title" />
    </div>
    
    <div class="form-group">
        <label for="post_category">Post Category Id</label>
        <input type="text" class="form-control" name="post_category_id" />
    </div>
    
    <div class="form-group">
        <label for="title">Post Author</label>
        <input type="text" class="form-control" name="author" />
    </div>
    
    <div class="form-group">
        <label for="post_status">Post Status</label>
        <input type="text" class="form-control" name="post_status" />
    </div>
    
    <div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file" name="image" /> <!-- input type "file" for uploading files -->
    </div>
    
    <div class="form-group">
        <label for="post_tags">Post Tags</label>
        <input type="text" class="form-control" name="post_tags" />
    </div>
    
    <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" rows="10" cols="30"></textarea>
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
    </div>
</form>