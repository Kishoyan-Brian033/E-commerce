<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin dasboard</title>

  <!-- style.css link -->
  <link rel="stylesheet" href="../style.css">

  <!-- font awsome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="style.css">

  <!-- bootsrap css link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <style>
    .admin_image{
      width: 100px;
    object-fit: contain;
    }
    .footer{
      position: absolute;
      bottom: 0;
      width: 100%;
    }
  </style>

  <!-- nav bar -->
   <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid">
        <img src="../images/chart.jpeg" class="logo" alt="">
        <nav class="navbar navbar-expand-lg ">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#" class="nav-link">Welcome Guest</a>
            </li>
          </ul>
        </nav>
      </div>
    </nav>

    <!-- second child -->
     <div class="bg-light">
      <h3 class="text-center p-2">Manage Details</h3>
     </div>
     <!-- third child -->
      <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
          <div class="p-3">
            <a href="#"><img src="../images/logo.png" class="admin_image" alt=""></a>
            <p class="text-light text-center">Admin Name</p>
          </div>
          <div class="button text-center">
          <button type="button" class="btn btn-info btn-lg my-3"><a href="insert_product.php"  class="nav-link text-light">Insert Product</a></button>
          <button type="button" class="btn btn-info btn-lg"><a href="#"  class="nav-link text-light">View Product</a></button>
          <button type="button" class="btn btn-info btn-lg"><a href="index.php?insert_category"  class="nav-link text-light">Insert Categories</a></button>
          <button type="button" class="btn btn-info btn-lg"><a href="#"  class="nav-link text-light">View Categories</a></button>
          <button type="button" class="btn btn-info btn-lg"><a href="index.php?insert_brand"  class="nav-link text-light">Insert Brands</a></button>
          <button type="button" class="btn btn-info btn-lg"><a href="#"  class="nav-link text-light">View Product</a></button>
          <button type="button" class="btn btn-info btn-lg"><a href="#"  class="nav-link text-light">View Product</a></button>
          <button type="button" class="btn btn-info btn-lg"><a href="#"  class="nav-link text-light">View Product</a></button>
          <button type="button" class="btn btn-info btn-lg"><a href="#"  class="nav-link text-light">View Product</a></button>
          <button type="button" class="btn btn-info btn-lg"><a href="#"  class="nav-link text-light">View Product</a></button>
          </div>
        </div>
      </div>
   </div>
  

   <!-- fourth child -->
<div class="container my-3">
<?php
   if(isset($_GET['insert_category'])){
       include('insert_categories.php');
   }
   if(isset($_GET['insert_brand'])){
    include('insert_brand.php');
}
?>
</div>

   <!-- last child -->
 <div class="bg-info p-3 text-center footer">
    <p>All rights reserved @- Designed by Brian-2025</p>
 </div>
     </div>
<!-- bootsrap js link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>