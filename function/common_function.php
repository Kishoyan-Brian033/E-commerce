<?php
include('./includes/connect.php');


// functions getting products
function getProduct(){
    global $conn;

    // condtion to check if isset or !isset(not)
if(isset($_GET['category'])){

if(!isset($_GET['brand'])){



  $select_query = "select * from `products` order by rand()";
          $result_query = mysqli_query($conn,$select_query);
          while($row = mysqli_fetch_assoc($result_query)){
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
            echo " <div class='col-md-4 mb-2'>
            <div class='card'>
                        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                          <h5 class='card-title'>$product_title</h5>
                          <p class='card-text'>$product_description.</p>
                          <a href='#' class='btn btn-info'>Add to Cart</a>
                          <a href='#' class='btn btn-secondary'>View More</a>
                        </div>
              </div>
            </div>";

          }
        }     
}
}
// displaying brands
function getBrands(){
  global $conn;
  $select_brands = "Select * from `brands`";
  $result_brands = mysqli_query($conn,$select_brands);
  while($row_data = mysqli_fetch_assoc($result_brands)){
    $brand_title = $row_data['brand_title'];
    $brand_id = $row_data['id'];
 echo "<li class='nav-item'>
<a href='index.php?brand=$brand_id ' class='nav-link text-light'>$brand_title</a>
</li>";
  }
}
// dispalying categories
if(isset($_GET['categories'])){
  if(!isset($_GET['brand'])){

 
function getCategories(){
  global $conn;
  $select_categories = "Select * from `categories`";
  $result_categories = mysqli_query($conn,$select_categories);
  while($row_data = mysqli_fetch_assoc($result_categories)){
    $category_title = $row_data['category_title'];
    $category_id = $row_data['category_id'];
 echo "<li class='nav-item'>
<a href='index.php?category=$category_id ' class='nav-link text-light'>$category_title</a>
</li>";
  }
}
}
}