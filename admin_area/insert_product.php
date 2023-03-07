<?php
include('../server/connection.php');
if(isset($_POST['insert_product'])){

  $product_title = $_POST['product_title'];
  $description = $_POST['description'];
  $product_keywords= $_POST['product_keywords'];
  $product_category= $_POST['product_category'];
  $product_brands= $_POST['product_brands'];
  $product_price = $_POST['product_price'];


  //Accessing images
  $product_image1 = $_FILES['product_image1']['name'];

  //Accessing images tmp name
  $temp_image1 = $_FILES['product_image1']['tmp_name'];

//Checking empty condition
  if($product_title=='' or $description=='' or $product_keywords=='' or $product_category=='' or $product_brands=='' or  $product_price=='' or $product_image1==''  ){
    echo "<script>alert('Please fill all the available fields')</script>";
    exit();
  }else{
    move_uploaded_file($temp_image1,"../prod-img/$product_image1");
   
    //Inserting query
    $insert_product = "insert into `inserting_product` (product_title,product_description,product_keywords,category_id,brand_id,product_price,product_image1) 
    values ('$product_title','$description','$product_keywords','$product_category','$product_brands','$product_price','$product_image1')";
    $result_query = mysqli_query($conn, $insert_product);
    if($result_query){
      echo "<script>alert('Successfully inserted the products')</script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert product admin dashboard</title>
  <link rel="stylesheet" href="../css/style.css">
  <!--Bootstrap CSS links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--Bootstrap js links -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">

</head>
<style>
        .cp{
          background-color: #a28089
        }
        </style>

<body class="cp">
  <div class="container mt-3">
    <h1 class="text-center">Insert Products</h1>
    
    <!--form-->
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_title" class="form-label">Product title</label>
        <input type="text" name="product_title" id="product_title" class="form-control"
          placeholder="Enter product title" autocomplete="off" required="required">
      </div>
      <!--description--> 
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="description" class="form-label">Product Description</label>
        <input type="text" name="description" id="description" class="form-control"
          placeholder="Enter product description" autocomplete="off" required="required">
      </div>

      <!--Keywords--> 
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_keywords" class="form-label">Product Keywords</label>
        <input type="text" name="product_keywords" id="product_keywords" class="form-control"
          placeholder="Enter product keywords" autocomplete="off" required="required">
      </div>


      <!--Categories--> 
      <div class="form-outline mb-4 w-50 m-auto">
       <select name="product_category" id="" class="form-select">
        <option value="">Select a Categories</option>
        <?php
        $select_query = "Select * from `categories`";
        $result_query = mysqli_query($conn, $select_query);
        while($row=mysqli_fetch_assoc($result_query)){
          $category_title = $row['category_title'];
          $category_id = $row['category_id'];
          echo "<option value='$category_id'>$category_title </option>";
        }
        ?>
        </select>
      </div>

      <!--Brands--> 
      <div class="form-outline mb-4 w-50 m-auto">
       <select name="product_brands" id="" class="form-select">
        <option value="">Select a Brand</option>
        <?php
        $select_query = "Select * from `brands`";
        $result_query = mysqli_query($conn, $select_query);
        while($row=mysqli_fetch_assoc($result_query)){
          $brand_title = $row['brand_title'];
          $brand_id = $row['brand_id'];
          echo "<option value='$brand_id'>$brand_title </option>";
        }
        ?>
       
        
        </select>
      </div>

      <!--images-->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_image1" class="form-label">Nike</label>
        <input type="file" name="product_image1" id="product_image1" class="form-control" required = "required">
      </div>

      <!--price-->
      <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_price" class="form-label">Product Price</label>
      <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required = "required">
      </div>

      <!--Insert the product-->
      <div class="form-outline mb-4 w-50 m-auto">
        <input type="submit" name="insert_product" class="btn btn-dark" value="Insert Products">
      </div>
      </form>
    </div>

</body>

</html>