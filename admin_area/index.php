<?php
include('../session.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <!--css file-->
    <link rel="stylesheet" href="../css/style.css" />
    <style>
      .admin_image {
  width: 100px;
  object-fit: contain;
}
    </style>
    <!--Bootstrap CSS links -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"/>

    <!--Bootstrap js links -->
    <linkrel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"/>

      <!--font-awesome link-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </head>

    <body>
      <!--navbar-->
      <!--1st child-->
      <style>
        .cp{
          background-color: #a28089
        }
        </style>

      <div class="container-fluid p-0">
        <nav class="cp">
          <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="" class="nav-link">Welcome Admin</a>
                </li>
              </ul>
            </nav>
          </div>
        </nav>
        <!--2nd child-->

        <div class="cp">
          <h3 class="text-center p-2">Manage details</h3>
        </div>

        <!--3rd child-->
        <div class="row">
          <div class="col-md-12 cp p-1 d-flex align-items-center">
            <div>
              <a href="#"><img src="../prod-img/admin.jpg" alt=""></a>
              <p class="text-light text-center">Welcome Admin</p>
            </div>
            <div class="button text-center">
              <button><a href="insert_product.php" class="nav-link   my-0.7">Insert Product</a></button>
              <button><a href="" class="nav-link  my-0.7">View Product</a></button>
              <button><a href="index.php?insert_category" class="nav-link  my-0.7">Insert Categories</a></button>
              <button><a href="" class="nav-link  my-0.7">View Categories</a></button>
              <button><a href="index.php?insert_brands" class="nav-link  my-0.7">Insert Brands</a></button>
              <button><a href="" class="nav-link  my-0.7">View Brands</a></button>
              <button><a href="../login.php" class="nav-link  my-0.7">Login</a></button>             
              <button><a href="../registration.php" class="nav-link  my-0.7">Register</a></button>
              <button><a href="" class="nav-link  my-0.7">List Users</a></button>
              <button><a href="../logout.php" class="nav-link  my-0.7">Logout</a></button>
            </div>
          </div>
        </div>
      </div>
      <!--4th child-->
        <div class="cp my-3">
          <?php
          if(isset($_GET['insert_category'])){
            include('insert_categories.php');
          }
          if(isset($_GET['insert_brands'])){
            include('insert_brands.php');
          }
          ?>
        </div>
  
      <!--boostrap js link-->
      <script
        src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    </body>
  </html>
