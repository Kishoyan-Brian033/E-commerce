<?php
include('./includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce website</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!-- fonticone link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- nav-bar -->
     <div class="container-fluid p-0" >
        <!-- first-child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/chart.jpeg" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<!-- second child -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
    </ul>
 </nav>




 <!-- third child -->
<div class="bg-light">
    <h3 class="text-center">Shop With Us</h3>
    <p class="text-center">
        Communication is the comunity
    </p>
</div>

<!-- forth child -->
 <div class="row">
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./images/logo (1).jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card" >
  <img src="./images/logo (3).webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./images/logo (14).webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./images/logo (11).webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./images/logo (33).webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./images/logo (13).webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
            </div>
        </div>
    </div>


    <!-- side nav -->
    <div class="col-md-2 bg-secondary p-0">





        <!-- brands to be displayed -->
        <ul class="navbar-nav me-auto text-center">
           <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4>Delivery Brand</h4></a>
           </li>

              <?php
              $select_brands = "Select * from `brands`";
              $result_brands = mysqli_query($conn,$select_brands);
              $row_data = mysqli_fetch_assoc($result_brand);
              // echo $row_data['brand_title'];

              while($row_data = mysqli_fetch_assoc($result_brands)){
                $brand_title = $row_data['brand_title'];
                $brand_id = $row_data['id'];
             echo "<li class='nav-item'>
            <a href='index.php?brand=$brand_id ' class='nav-link text-light'>$brand_title</a>
           </li>";
              }


              ?>
        </ul>

        <!-- categories to be displayed -->
        <ul class="navbar-nav me-auto text-center">
           <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4><Cap></Cap>Categories</h4></a>
           </li>
     
           

           
           <li class="nav-item">
            <a href="#" class="nav-link text-light">Categories 1</a>
           </li>
           <li class="nav-item">
            <a href="#" class="nav-link text-light">Categories 2</a>
           </li>
           <li class="nav-item">
            <a href="#" class="nav-link text-light">Categories 3</a>
           </li>
           <li class="nav-item">
            <a href="#" class="nav-link text-light">Categories 4</a>
           </li>
           <li class="nav-item">
            <a href="#" class="nav-link text-light">Categories 5</a>
           </li>
           <li class="nav-item">
            <a href="#" class="nav-link text-light">Categories 6</a>
           </li>
        </ul>

    </div>
 </div>


<!-- last child -->
 <div class="bg-info p-3 text-center">
    <p>All rights reserved @- Designed by Brian-2025</p>
 </div>
     </div>
<!-- script js link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>