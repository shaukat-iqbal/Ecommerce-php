<?php
include('header.html');
if($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $list[]=$_GET['id'];
   
   print_r($list);
    }


include("footer.html");

?>