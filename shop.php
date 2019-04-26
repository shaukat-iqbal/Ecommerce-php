<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Printlo- Shop</title>
     <link rel="shortcut icon" href="img/logo.ico">
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
    include("header.html");
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
  </body>
</html>
