<?php
class Shop{
    public function getSellers(){
        $sql='SELECT * FROM sellers ORDER BY seller_id ASC';
        return $sql;
    }
    public function renderPage($info, $page){
        require_once "views/".$page.".php";
        get_object_vars($info);
    }
    public function SellerCity($city){
        $sql="SELECT * FROM sellers WHERE seller_city LIKE '$city' ORDER BY seller_id ASC";
        return $sql;
    }
    public function SellerCommission($commission){
        $sql = "SELECT * FROM sellers WHERE commission LIKE '$commission' ORDER BY seller_id ASC";
        return $sql;
    }
    public function SellerAll($city, $commission){
        $sql = "SELECT * FROM sellers WHERE seller_city = '$city' AND commission = '$commission' ORDER BY seller_id ASC";
        return $sql;
    }
    public function getCustomers(){
        $sql = "SELECT
        customers.customer_id, customers.customer_name,
        customers.customer_city, customers.rating,
        sellers.seller_id, sellers.seller_name
        FROM customers
        JOIN sellers ON customers.seller_id=sellers.seller_id
        ORDER BY sellers.seller_id ASC, customers.customer_id";
        return $sql;
    }
    public function CustomerCity($city){
        $sql = "SELECT  customers.customer_id, customers.customer_name,
        customers.customer_city, customers.rating,
        sellers.seller_id, sellers.seller_name FROM customers  JOIN sellers ON customers.seller_id=sellers.seller_id
         WHERE customer_city LIKE '$city' ORDER BY sellers.seller_id ASC, customers.customer_id";
        return $sql;
    }
    public function CustomerRating($rating){
        $sql = "SELECT  customers.customer_id, customers.customer_name,
        customers.customer_city, customers.rating,
        sellers.seller_id, sellers.seller_name FROM customers  JOIN sellers ON customers.seller_id=sellers.seller_id
        WHERE rating LIKE '$rating'  ORDER BY sellers.seller_id ASC, customers.customer_id";
        return $sql;
    }
    public function CustomerAll($city, $rating){
        $sql = "SELECT  customers.customer_id, customers.customer_name,
        customers.customer_city, customers.rating,
        sellers.seller_id, sellers.seller_name FROM customers  JOIN sellers ON customers.seller_id=sellers.seller_id
         WHERE customer_city = '$city' AND rating = '$rating' ORDER BY sellers.seller_id ASC, customers.customer_id";
        return $sql;
    }
}