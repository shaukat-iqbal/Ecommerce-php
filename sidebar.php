<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
  <!-- SideNav slide-out button -->
  <?php
  $listo = array();
  $prod = new product();
  $prod->createConnection();
  $listo = $prod->listOfCategories();

  ?>
  <div class=" py-4 ml-2 h-100">
    <div id="list-example" class="list-group rounded">

      <?php

      foreach ($listo as $category) {

        if (isset($_GET['Category'])) {
          if ($category == $_GET['Category']) {
            echo '<a class="list-group-item list-group-item-action text-white active"';
          } else {
            echo '<a class="list-group-item list-group-item-action mdb-color text-white "';
          }
        } else {
          echo '<a class="list-group-item list-group-item-action mdb-color text-white "';
        }
        echo ' href="shop.php?Category=' . $category . '">' . $category . '</a>';
      }
      ?>


    </div>
  </div>
</body>

</html>