<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                        include("product.php");
                        $a=new product();
                        $a->createConnection(); 
                        if(isset($_GET["Category"])){
                            $list=$a->findByCategory($_GET["Category"]);
                            if(isset($list[0])){

                                foreach ($list as $product) {
                                    echo $a->createCard($product);
                                 }
                            }else{
                                echo "<div class='h3'>Products Not found</div>";
                            }
                        }
                       
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