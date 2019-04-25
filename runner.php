<?php
include("product.php");
$a=new product(1);
$a->setValues();
echo $a->getDetails();
?>