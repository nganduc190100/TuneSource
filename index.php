
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
    .wrapper{
        width: 1000px;  
        height: auto;
        margin:auto;          
    }
    .header{
        height: 55px;
        margin: auto;
        border: 1px solid black;
    }
    .logo {
        float:left;
        width: 150px;
        padding: 10px

    }
    .cart{
        float:right;      
        padding: 10px;
        

    }
    #form_search{
        margin-top:10px;

    }
    #form_search input[type=text]{width: 250px; height: 30px}
    #form_search input[type=submit]{height: 30px}

    .login{
        float: right;
        right:30px;
        height:35px;
        line-height:35px;
        color:gray; 
        position:relative;
        display:inline;         


    }

    .login a{
        text-decoration: none;  

    }
    .register{
        float: right;
        margin-right: 50px;
        height:35px;
        line-height:35px;
        color:gray;           

    }
    
    .register a{
        text-decoration: none;  

    }
    .menu{  
        width: 100%     
        height 30px;
        background: pink;
        border: 1px solid black
    }
    .menu ul li{
        list-style: none;
        text-align: center;
        display: inline-table;
    }
    .menu ul li a{
        text-decoration: none;
        font-size: 14px;
        margin: 20px;
        padding: 5px;
        text-transform: uppercase;
    }
    .content{
        width: 100%;        
        border: 1px solid black
    }
    .left{
        width: 20%;
        background: gray;
        
        float: left;
    }
    .right{
        width: 80%;    

        float:right;
    }
    .footer{
        width:1000px;
        height:100px;
        background: #f0f0f0;
        clear:both;
    }

    .left >p {
      background:white;
      color:black;
      font-size:22px;
      font-family:arial;
      padding:10px;
      text-align:center;
  }
  .category ul{
      width:100%;
      height: auto; 
  }
  .category ul li{
      list-style: none;

  }
  .category ul li a{
      color:white;
      padding:8px;
      margin:5px;
      text-align:center;
      font-size:20px;
      text-decoration:none;
      font-family:Comic Sans Ms;
  }
  .category a:hover{
      text-decoration: underline;
  }
  .brand ul{
      width:100%;
      height: auto;
      list-style: none;
  }
  .brand ul li{
      list-style: none;

  }
  .brand a:hover{
      text-decoration: underline;
  }
  .brand ul li a{
      color:white;
      padding:8px;
      margin:5px;
      text-align:center;
      font-size:20px;
      text-decoration:none;
      font-family:Comic Sans Ms;
  }
  .products_box{
   width:780px;
   text-align:center;
   margin-left:30px;
   margin-bottom:10px;
}
.single_product{
   float:left;
   margin-left:30px;
   padding:10px;
}
.single_product img{
   border:2px solid black;
}

</style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <a href="index.php"> 
                <div class="logo"> 
                  <img id="logo" src="images/btec.jpg" />
              </div>
          </a>
          <!--/.header_logo-->
          <a href="cart.php">
              <div class="cart"> 
                  <img id="cart" src="images/cart.png" />
              </div>
          </a>
          <div id="form_search">
             <form method="get" action="search.php">
                <input type="text" name="user_query" placeholder="Search a Product" />
                <input type="submit" name="search" value="search" />
            </form>
        </div> 
    </div>
    <!-- end header --> 
    <div class="menu">
        <ul>
            <li> <a href="index.html"> Trang chủ </a> </li>
            <li> <a href="Admin/view_product.html">Quản lý sản phẩm </a></li>
            <li><a href="Admin/add_product.php"> Thêm sản phẩm </a> </li>
            <li><a href="login.php"> Đăng nhập </a></li>
            <li><a href="register.php"> Đăng ký</a></li>
            <li><a href="logout.php"> Đăng xuất </a></li>
        </ul>
    </div>
    <div class ="content">
        <div class ="left">
           <p> Loại sản phẩm </p>
           <div class="category">
              <ul>
                <li> <a href="#">Áo Da </a></li>
                <li> <a href="#">Áo Da Nam </a></li>
                <li> <a href="#">Áo Khoác Da Nam </a></li>
                <li> <a href="#">Áo Da Thời Trang </a></li>
            </ul>
        </div>
        <p > Thương hiệu </p>
        <div class="brand">
          <ul>
            <li> <a href="#">New </a></li>
            <li> <a href="#">Nem </a></li>
            <li> <a href="#">NWEM </a></li>
        </ul>
    </div>
</div>
<div class="right">

    <?php
    $connect = mysqli_connect('localhost','root','','mywebsite');
    if(!$connect){
        echo("Error");
    }
    else{
        echo("Kết nối thành công");
    }
    $sql = "SELECT * FROM sanpham";
    $result = mysqli_query($connect, $sql);
    while($row_product=mysqli_fetch_array($result)){
        $product_id = $row_product['product_id'];
        $product_name = $row_product['product_name'];
        $product_gia = $row_product['product_gia'];
        $product_anh = $row_product['product_anh'];
        echo"
        <div class='single_product'>
            <h3>$product_name </h3>
            <img src='images/aoda.jpg' width='180' height='180' />
            <p><b> Price: $product_gia</b></p>
            <a href=''>Details</a>
            <a href=''>
                <button style='float:right'>Add to Cart</button>
            </a>            
        </div>       
        ";  
    }
    ?>
</div>
</div>
</div>
<div class="footer">
  <p> Đây là footer </p>
</div>
</div>
</body>
</html>