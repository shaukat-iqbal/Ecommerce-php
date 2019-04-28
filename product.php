<?php

class product
{
    public $id;
    public $name;
    public $category;
    public $description;
    public $imagePath;
    public $db;
    public $list;

    // function __construct($id,$name,$description){
    //     $this->id=$id;
    //     $this->name=$name;
    //     $this->description=$description;
    // }


    function __construct($id = null)
    {
        $this->id = $id;
        $this->createConnection();
        $this->setValues($id);
    }

    function setValues($id = null)
    {
        $this->id = $id;
        if ($this->id != null)
            $qry = "select * from products where id=" . $this->id . ';';
        else
            $qry = "select * from products;";
        $result = $this->db->query($qry);
        $row = $result->fetch();
        $this->name = $row['Name'];
        $this->category = $row['Category'];
        $this->description = $row['Description'];
        $this->imagePath = $row['ImagePath'];
    }

    function createProduct($row)
    {
        $prod = new product();
        $prod->id = $row['id'];
        $prod->name = $row['Name'];
        $prod->category = $row['Category'];
        $prod->description = $row['Description'];
        $prod->imagePath = $row['ImagePath'];

        return $prod;
    }


    function createConnection()
    {
        try {
            $this->db = new PDO('mysql:dbname=ecommerce;host=localhost', 'root', '');
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function getDetails()
    {
        return $this->id . " " . $this->name . " " . $this->category;
    }

    public function listOfProducts()
    {
        $this->list = array();

        $qry = 'select * from products LIMIT 10 ;';
        $result = $this->db->query($qry);
        while ($row = $result->fetch()) {
            $list[] = $this->createProduct($row);
        }
        return $list;
    }

    public function listOfCategories()
    {
        $listOfCategories = array();
        $qry = 'SELECT distinct Category FROM products';
        $result = $this->db->query($qry);
        while ($row = $result->fetch()) {
            $listOfCategories[] = $row['Category'];
        }
        return $listOfCategories;
    }

    public function findByCategory($cat = "Electonics")
    {
        $this->list = array();
        $qry = 'select * from products where Category="' . $cat . '";';
        $result = $this->db->query($qry);
        if ($result->rowCount()) {

            while ($row = $result->fetch()) {
                $list[] = $this->createProduct($row);
            }
        } else {
            $list[] = null;
        }

        return $list;
    }

    public function findByName($name)
    {
        $qry = 'select * from products where Name like "%' . $name . '%";';
        $result = $this->db->query($qry);
        if ($result->rowCount()) {

            while ($row = $result->fetch()) {
                $list[] = $this->createProduct($row);
            }
        } else {
            $list[] = null;
        }
        return $list;
    }
    function createCard($product)
    {
        # code...
        $page = $_SERVER['PHP_SELF'];
        $card =  '<div class="card col-3 mt-3 p-2 my-3 ml-5 view overlay zoom">';
        $card .= '<div class="view overlay" style="height:300px">';
        $card .= '<img class="card-img-top" src="' . $product->imagePath . '" alt="' . $product->name . '">';
        $card .= ' <a><div class="mask rgba-white-slight"></div> </a></div>';
        $card .= '  <div class="card-body elegant-color white-text ">';

        $card .= ' <a class="activator waves-effect mr-4"><i class="fas fa-share-alt white-text"></i></a> ';
        $card .= ' <h4 class="card-title">' . $product->name . '</h4> ';
        $card .= ' <hr class="hr-light"> ';
        $card .= ' <p class="card-text white-text mb-4">' . $product->description . '</p> </div>';
        $card .= '<div class="elegant-color rounded-bottom p-2"><a href="' . $page . '?id=' . $product->id . '"
         class="white-text d-flex justify-content-end" role="Button" ><h5>View Product <i class="fas fa-angle-double-right"></i></h5></a></div></div>';
        return $card;
    }
}
