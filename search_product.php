<?php
include('./server/connection.php');
include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>S K wears</title>
    <!--Bootstrap CSS links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Bootstrap js links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <div container>
        <ul class="navigation">
            <form class="d-flex" action="search_product.php" method="get">
                <input class="form-control me-2" type="text" placeholder="Search" name="search_data" value="<?php if (isset($_GET['search_data']))
                echo $_GET['search_data']; ?>">
                <input type="submit" value="Search" class="btn" name="search_data_product">
            </form>
            <li><a href="#">Products</a></li>
            <li><a href="#">Logout</a></li>
            <li><a href="#">Login</a></li>
        </ul>
    </div>

    <!--Products -->
    <div class="row px-1">
        <div class="col-md-10">
            <!--products-->
            <div class="row p-3">
                <!--fetching products-->
                <?php
                search_product();
                get_unique_categories();
                get_unique_brands();
                ?>

              
<!--row end-->
 </div>
<!--column end-->
 </div>
        
        <div class="col-md-2 p-0">
        <!--brands to be displayed-->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-secondary">
                    <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
                </li>
                <?php
                getbrands();
                ?>
                 </ul>
        
             <!--categories to be displayed-->
             <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-secondary">
                    <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
                </li>
                
                <?php
                getcategories();
                 
                ?>
            </ul>
            <ul class="navbar-nav me-auto text-center">
            <form action="" method = "GET">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="input-group mb-3">
                                <select name="" class="form-control">
                                    <option value="">--Select Option--</option>
                                    <option value="low-high">Low - High</option>
                                    <option value="high-low">High - Low</option>
                                </select>
                                <button class="submit" class="input-group-text btn btn-primary" id = "basic-addon2">Filter</button>
                            </div>
                        </div>
                    </div>

            </form>
        </ul>
    </div>
</div>
               

    <div class="footer p-3 text-center">
        <p>All rights reserved | Designed by Sishir kharel </p>
    </div>

    <!--boostrap js link-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>

</html>