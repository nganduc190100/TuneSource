<?php 
$servername = "localhost";
 $username ="root";
 $password="";
 $database = "mywebsite";
  //Khai báo biến để kết nối đến CSDL
 $connect = mysqli_connect($servername, $username,$password,$database);
 if(!$connect){
 	echo"Kết nối thất bại";
 }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <title></title>
 </head>
 <body>
  
 <div>
 <div>
    <?php 
    $id=$_GET["id"];
    $sql="SELECT * FROM sanpham WHERE product_id={$id} ";
    $result= mysqli_query($connect,$sql);
    while ($row=mysqli_fetch_array($result)) {
       $product_id = $row['product_id'];
     ?>
      <div style="float:left">
          <img src="Images/<?php echo $row['product_image']?>" style="width: 600px;height: 500px" >
        </div>
        <div style=" text-align: left;">
        <h2 >Name Of Product: <?php echo $row['product_name'] ?></h2>
        <p style="color: red;padding-left: 20px;"> Price: <?php echo $row['product_price']." $"; ?></p>   

        <br>
        <br>
         <a href='single.php?add_cart=<?php  $product_id ?>'>
          <button style='float:right'>Add to Cart</button>
          </a>   
          <?php include("add_cart.php"); ?>
         <br>
          <br>          
        <div style="border-bottom: 1px solid black"></div>
        <br>
        <h2>
          Basic product info:
        </h2>               
        <p><?php echo $row["product_description"]; ?></p>
        </div>       

        <?php
      }
      ?>
     </div>
 </body>
 </html>
 