<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Printlo -We deliver</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design Bootstrap</title>
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
</head>
<body>
    <?php
    include("header.html");
    echo "<div style='height:15%'>";
    include("slider.html");
    echo "</div>";
    ?>


    <div class="container-fluid ">
        
        <div class="row pb-4">
            <div class="col-md-3">
                <?php
                    include("sidebar.html");
                ?>
            </div>
     
            <div class="col-md-9">
                <!-- here i have to include another php page -->
                <div class="row">
                        <?php
                        include("product.php");
                        $a=new product();
                        $a->createConnection(); 

                        $list=$a->listOfProducts();
                        foreach ($list as $product) {
                           echo $a->createCard($product);
                        }
                        ?>
                        
                        
                        
                </div>
            </div>           
      

        </div>
     </div>
    
    <?php
    include("footer.html");
    ?>
    
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>