<?php
include('../includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>
     <!-- style.css link -->
  <link rel="stylesheet" href="../style.css">

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

     <!-- fonticone link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="style.css">

</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center">Insert products</h1>
        <!-- form -->
         <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" placeholder="Enter product title" 
               autocomplete="off"  required id="product_title" class="form-control">
            </div>
            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product description</label>
                <input type="text" name="description" placeholder="Enter product description" 
               autocomplete="off"  required id="description" class="form-control">
            </div>
             <!-- keywords -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keyword" class="form-label">Product keywords</label>
                <input type="text" name="product_keyword" placeholder="Enter product-keyword" 
               autocomplete="off"  required id="product_keyword" class="form-control">
            </div>
            <!-- categories -->
             <div class="form-control mb-4 w-50 m-auto">
                <select name="product_category" class="form-select">
                    <option value="">select a category</option>

                    <?php
                       $select_query = "select * from `categories`";
                       $result_query = mysqli_query($conn,$select_query);
                       while($row=mysqli_fetch_assoc($result_query)){
                        $category_title=$row['category_title'];
                        $category_id =$row['category_id'];
                        echo "<option value='$category_id'>$category_title</option>";
                       }
                    
                    
                    
                    ?>
                </select>
             </div>
              
              <!-- brands -->
              <div class="form-control mb-4 w-50 m-auto">
                <select name="product_brand" class="form-select">
                    <option value="">select a brand</option>
                    <?php
                       $select_query = "select * from `brands`";
                       $result_query = mysqli_query($conn,$select_query);
                       while($row=mysqli_fetch_assoc($result_query)){
                        $brand_title=$row['brand_title'];
                        $brand_id =$row['id'];
                        echo "<option value='$brand_id'>$brand_title</option>";
                       }
                    
                    
                    
                    ?>
                    
                </select>
             </div>
             <!-- image 1 -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form_label">Product image 1</label>
                <input type="file" name="product_image1"  required id="product_image1" class="form-control">
            </div>
             <!-- image 2 -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product image 2</label>
                <input type="file" name="product_image2"  required id="product_image2" class="form-control">
            </div>
            <!-- image 3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product image 3</label>
                <input type="file" name="product_image3"  required id="product_image3" class="form-control">
            </div>
             <!-- Price -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product price</label>
                <input type="text" name="product_price" placeholder="Enter product price" 
               autocomplete="off"  required id="product_price" class="form-control">
            </div>
             <!-- Submit -->
             <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info" value="Insert product">
            </div>
         </form>
    </div>
</body>
</html>