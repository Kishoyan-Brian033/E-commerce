<?php 
include('../includes/connect.php');
if(isset($_POST['insert_brand'])){
    $brand_title = $_POST['brand_title'];

    // select data from data base
     $select_query = "select * from `brands` where  brand_title='$brand_title'";
     $result_select = mysqli_query($conn,$select_query);
     $number = mysqli_num_rows($result_select);
     if($number>0){
        echo "<script>alert('This Brand Already exist')</script>";
     }else{

    $insert_query = "insert into `brands` (brand_title) values('$brand_title') ";
    $result = mysqli_query($conn,$insert_query);
    if($result){
        echo "<script>alert('Brand has been Inserted Successfuly')</script>";
    }
}}
?> 

<h2 class="text-center">Insert Brands</h2>
 
 
 <form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" name="brand_title" class="form-control" placeholder="Insert new brands"
        aria-lable="brands" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
    <!-- <button type="button" class="btn btn-info btn-sm my-2">Insert brand</button> -->
        <input type="submit" name="insert_brand" class=" bg-info border-0 p-2 my-3 " value="Insert Brands">
    </div>
</form>