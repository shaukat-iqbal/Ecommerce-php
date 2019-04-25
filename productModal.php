<!DOCTYPE html>
<html lang="en">
  <head>
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
    if($_SERVER["REQUEST_METHOD"] == "POST") {

    }
    ?>
  </head>
  <body>
    <button
      id="abc"
      type="button"
      class="btn btn-primary"
      data-toggle="modal"
      data-target="#modalQuickView"
      style="display:none"
    >
      Launch modal
    </button>
    <!-- Modal: modalQuickView -->
    <div
      class="modal fade"
      id="modalQuickView"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
    
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-5">
                <!--Carousel Wrapper-->
                <div
                  id="carousel-thumb"
                  class="carousel slide carousel-fade carousel-thumbnails"
                  data-ride="carousel"
                >
                  <!--Slides-->
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <img
                        class="d-block w-100"
                        src="<?=$product->imagePath?>"
                        alt="Product"
                      />
                    </div>
                  </div>
                  <!--/.Slides-->
                </div>
                <!--/.Carousel Wrapper-->
              </div>
              <div class="col-lg-7">
                <h2 class="h2-responsive product-name">
                  
                  <strong><?= $product->name?></strong>
                </h2>
                <h4 class="h4-responsive">
                  <span class="green-text">
                    <strong>$49</strong>
                  </span>
                  <span class="grey-text">
                    <small>
                      <s>$89</s>
                    </small>
                  </span>
                </h4>

                <!--Accordion wrapper-->
                <div
                  class="accordion md-accordion"
                  id="accordionEx"
                  role="tablist"
                  aria-multiselectable="true"
                >
                  <!-- Accordion card -->
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingOne1">
                      <a
                        data-toggle="collapse"
                        data-parent="#accordionEx"
                        href="#collapseOne1"
                        aria-expanded="true"
                        aria-controls="collapseOne1"
                      >
                        <h5 class="mb-0">
                          Description
                          <i class="fas fa-angle-down rotate-icon"></i>
                        </h5>
                      </a>
                    </div>

                    <!-- Card body -->
                    <div
                      id="collapseOne1"
                      class="collapse show"
                      role="tabpanel"
                      aria-labelledby="headingOne1"
                      data-parent="#accordionEx"
                    >
                      <div class="card-body">
                       <?=$product->description?>
                      </div>
                    </div>
                  </div>
                  <!-- Accordion card -->
                </div>
                <!-- Accordion wrapper -->

                <!-- Add to Cart -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <select
                        class="md-form mdb-select colorful-select dropdown-primary"
                      >
                        <option value="" selected
                          >Grey</option
                        >
                        <option value="1">White</option>
                        <option value="2">Black</option>
                        <option value="3">Pink</option>
                      </select>
                      <label>Select color</label>
                    </div>
                    <div class="col-md-6">
                      <select
                        class="md-form mdb-select colorful-select dropdown-primary"
                      >
                        <option value="" disabled selected
                          >XXL</option
                        >
                        <option value="1">XS</option>
                        <option value="2">S</option>
                        <option value="3">L</option>
                      </select>
                      <label>Select size</label>
                    </div>
                  </div>
                  <div class="text-center">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <a class="btn btn-primary " href="//localhost/ecomSite/cart.php?id=<?=$product->id?>" >
                      Add to cart
                      <i class="fas fa-cart-plus ml-2" aria-hidden="true"></i>
                     </a>
                  </div>
                </div>
                <!-- /.Add to Cart -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>
      $(document).ready(function() {
        var button = document.getElementById("abc");
        button.click();
      });
    </script>
  </body>
</html>
