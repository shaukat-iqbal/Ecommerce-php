<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Printlo- Shop</title>
     <link rel="shortcut icon" href="img/logo.ico">
     
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet" />
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet" />

    <?php
     $list=array();
    include("product.php");
   $product=new product();
   $product->createConnection();
   if($_SERVER["REQUEST_METHOD"] == "GET") {
   if(isset($_GET['id'])){
      $product->setValues($_GET['id']);
       
    include_once('productModal.php');

   }
    }
    ?>
  </head>
  <body>
    <?php
    include("header.php");
    ?>

    <div class="container-fluid ">
      <div class="row pb-4">
        <div class="col-3">
          <?php
                    include("sidebar.html");
                ?>
        </div>

        <div class="col-9">
          <!-- here i have to include another php page -->
          <div class="row">
            <?php
                        
                        if(isset($_GET["Category"])){
                          $list=$product->findByCategory($_GET["Category"]);
                          if(isset($list[0])){
                         foreach ($list as $product) { 
                             echo $product->createCard($product); 
                        }
                        }else{ 
                            echo "<div class='h3 p-5 m-5 '>Products Not found</div>" ; } } 
                            ?>
          </div>
        </div>
      </div>
    </div>

                <?php
                include("footer.html");
                
                ?>
                
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
  </body>
</html>
