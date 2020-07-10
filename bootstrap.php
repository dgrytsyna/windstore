<?php
error_reporting(E_ALL);

ini_set('display_errors', 'On');

ini_set('memory_limit', '5G');

date_default_timezone_set('Europe/Kiev');
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});
$dsn = 'mysql:dbname=shop;host=127.0.0.1';
$user = 'root';
$password = '';
try{
    $dbh = new PDO($dsn, $user, $password);
}catch (PDOException $e){
    echo 'Error occured' . $e->getMessage();
}
$windstore = new Shop;
if(isset($_GET['table'])){if($_GET['table']=='sellers'){
    if(isset($_GET['seller_submit'])){
        if($_GET['city'] !== 'all' && $_GET['commission'] === 'all'){
    
        $sql = $windstore->SellerCity($_GET['city']);
         
     } else if($_GET['city'] === 'all' && $_GET['commission'] !== 'all'){
         $sql = $windstore->SellerCommission($_GET['commission']);
          
     } else if($_GET['city']!=='all' && $_GET['commission']!=='all'){
         $sql = $windstore->SellerAll($_GET['city'], $_GET['commission']);
          
          }else{
            $sql = $windstore->getSellers();
          }
       
    }else{
        $sql = $windstore->getSellers();
    }
    $sellers = $dbh->query($sql);
    $sellers->setFetchMode(PDO::FETCH_ASSOC);
    $windstore->renderPage($sellers,'sellers');
}else if($_GET['table']=='customers'){
    if(isset($_GET['customer_submit'])){
        if($_GET['city'] !== 'all' && $_GET['rating'] === 'all'){
    
        $sql = $windstore->CustomerCity($_GET['city']);
         
     } else if($_GET['city'] === 'all' && $_GET['rating'] !== 'all'){
         $sql = $windstore->CustomerRating($_GET['rating']);
          
     } else if($_GET['city']!=='all' && $_GET['rating']!=='all'){
         $sql = $windstore->CustomerAll($_GET['city'], $_GET['rating']);
          
          }else{
            $sql = $windstore->getCustomers();
          }
       
    }else{
        $sql = $windstore->getCustomers();
    }
$customers = $dbh->query($sql);
$customers->setFetchMode(PDO::FETCH_ASSOC);
$windstore->renderPage($customers,'customers');
}
}


