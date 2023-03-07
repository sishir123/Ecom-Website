<?php
include('../server/connection.php');
if(isset($_POST['insert_brand'])){
    $brand_title = $_POST['brand_title'];

    $select_query = "Select * from `brands` where brand_title='$brand_title'";
    $result_query=mysqli_query($conn,$select_query);
    $number = mysqli_num_rows($result_query);
    if($number>0){
        echo "<script>alert('This brand is already present')</script>";
    }else{

    $insert_query = "insert into `brands` (brand_title) values ('$brand_title')";
    $result=mysqli_query($conn,$insert_query);
    if($result){
        echo "<script>alert('Brand has been inserted Successfully')</script>";
    }
}
}
?>
 <h2 class="text-center">Insert Brands</h2>

<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-3">
          <span class="input-group-text cp" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="brands" aria-describedby="basic-addon1">
      </div>
      <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-light border-0 p-2 my-3"  name="insert_brand" values="Insert Brands" >
       
      </div>
</form>