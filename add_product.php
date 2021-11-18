<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
    <div class="form_box">
	 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
    <div class="form_box">
	 <form action="" method="post" enctype="multipart/form-data">	   
	   <table align="center" width="100%">	     
		 <tr>
		   <td colspan="7">
		   <h2>Add Product</h2>
		   <div class="border_bottom"></div><!--/.border_bottom -->
		   </td>
		 </tr>
		 <tr>
		   <td><b>product Name:</b></td>
		   <td><input type="text" name="product_name" size="60" required/></td>
		 </tr>

        <tr>
		  <td><b>product images: </b></td>
		  <td><input type="file" name="product_images" /></td>
		</tr>
		
		<tr>
		  <td><b>product gia: </b></td>
		  <td><input type="text" name="product_gia" required/></td>
		</tr>
		
		<tr>
		   <td valign="top"><b>product mota:</b></td>
		   <td><textarea name="product_mota"  rows="10"></textarea></td>
		</tr>		
		<td></td>
		   <td colspan="7"><input type="submit" name="insert_post" value="Add Product"/></td>
		<tr>
	   </table>
	 </form>
  </div><!-- /.form_box -->
<?php 
if(isset($_POST['insert_post'])){
   $product_name = $_POST['product_name'];
   $product_gia = $_POST['product_gia'];
   $product_mota = $_POST['product_mota'];  
   
   // Getting the image from the field
 
   $product_images  = $_FILES['product_anh']['name'];
   $product_images_tmp = $_FILES['product_anh']['tmp_name'];
     
   move_uploaded_file($product_images_tmp,"images/$product_anh");
  
   
   $sql = " INSERT INTO product VALUES (NULL,'$product_name','$product_gia','$product_anh','$product_mota') ";

   $insert_product = mysqli_query($connect, $sql);
   
   if($insert_product){
    echo "<script>alert('Product Has Been inserted successfully!')</script>";
	
	//echo "<script>window.open('index.php','_self')</script>";
   }
   else{
	echo "<script>alert('Product Has Been inserted fail!')</script>";  
   }
   
}
?>
</body>
</html>
</body>
</html>