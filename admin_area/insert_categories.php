<?php
include('../server/connection.php');
if(isset($_POST['insert_cat'])){
    $category_title = $_POST['cat_title'];

    $select_query = "Select * from `categories` where category_title='$category_title'";
    $result_query=mysqli_query($conn,$select_query);
    $number = mysqli_num_rows($result_query);
    if($number>0){
        echo "<script>alert('This Category is already present')</script>";
    }else{

   

    $insert_query = "insert into `categories` (category_title) values ('$category_title')";
    $result=mysqli_query($conn,$insert_query);
    if($result){
        echo "<script>alert('Category has been inserted Successfully')</script>";
    }
}
}
?>
  <h2 class="text-center">Insert Categories</h2>


<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
          <span class="input-group-text cp" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="Categories" aria-describedby="basic-addon1">
      </div>
      <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-light border-0 p-2 my-3" name="insert_cat" values="Insert Categories"  >
        <button class="bg-light p-2 m-3 border-0">Insert Categories</button>
      </div>
</form>