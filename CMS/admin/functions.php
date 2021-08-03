<?php

function fetch_all_cat(){
    global $connection1;
    $query = "SELECT * FROM categories";
    $send_category_query = mysqli_query($connection1, $query);

    while($row = mysqli_fetch_assoc($send_category_query)){
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
    echo "<tr>
    <td><a href='#'>{$cat_id}</a></td>
    <td><a href='#'>{$cat_title}</a></td>
    <td><a href='categories.php?edit={$cat_id}'> Edit </a></td>
    <td><a href='categories.php?delete={$cat_id}'> Delete </a></td>
    </tr>";
    } 
}

function insert_cat(){
    global $connection1;
    if(isset($_POST['submit'])){
        $cat_title = $_POST['cat_title'];
        if(!$cat_title || empty($cat_title) || $cat_title == ""){
            echo "<span style='color: red;'>Category Title should not be empty</span>";
        }
        else{
            $query = "INSERT INTO categories(cat_title) VALUE('{$cat_title}') ";
            $send_insert_query = mysqli_query($connection1, $query);
            
            if(!$send_insert_query){
                die("Query was unsuccessful" . mysqli_error($connection1));
            }
        }
    }
}

function delete_cat(){
    global $connection1;
    if(isset($_GET['delete'])){
    $delete_cat_id = $_GET['delete'];
    $query = "DELETE FROM categories WHERE cat_id = {$delete_cat_id}";
    $send_delete_query = mysqli_query($connection1, $query);
    header("Location: categories.php"); // header() will refresh to designated location with the http request. Codes below this do not execute
    }
}

function confirm_query($send_query){
    global $connection1;
    if(!$send_query){
        die("Query Failed " . mysqli_error($connection1));
    }
}

?>