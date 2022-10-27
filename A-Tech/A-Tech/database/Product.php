<?php

//Use to fetch product data
class Product
{
    public $db = null;

    public function __construct(DBController $db){
        if(!isset($db->con))
            return null;
        $this->db = $db;
    }

    //add product to database
    /*public function addProduct($table = 'product', $id, $brand, $name, $price, $image, $date){
        return $this->db->con->query("INSERT INTO {$table} ($id, $brand, $name, $price, $image, $date) VALUES ('', ?, ?, ?, ?, NOW())");
    }*/

    //Fetch product data using getData method
    public function getData($table = 'product')
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        //fetch product data one by one
        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    //get product using item id
    public function getProduct($item_id = null, $table = 'product'){
        if(isset($item_id)) {
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

            $result_array = array();

            //fetch product data one by one
            while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $result_array[] = $item;
            }
            return $result_array;
        }
    }
}