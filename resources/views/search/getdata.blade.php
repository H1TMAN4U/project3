<?php 
include("db_connect.php");
if($_POST){
    insertData($_POST);
    die();
}
if($_GET){
    $action = $_GET['action'];
    switch ($action){
        case 'getStore':
          $results = getStore($_GET["city_id"]);
          echo json_encode($results);
          die();
        case 'getcity':
            $results = getCity($_GET["country_id"]);
            echo json_encode($results);
            die();
    
    default:
        break;
    }
}

function getCustomer(){
    $query = 
    "UPDATE customer SET `active`= '0' where customer_id=611;";
    $customer = getData($query);
    return $customer;
};
function getRecipes(){
    $query = "SELECT * from recipes;";
    $recipes = getData($query);
    return $recipes;
};

function getCountry(){
    $query = "SELECT country_id, country from country;";
    $countries = getData($query);
    return $countries;
};

function getCity($country_id){
    $query = "SELECT city_id, city from city where country_id = $country_id ;";
    $cities = getData($query);
    return $cities;
};

 function getStore(){
  $query=" select store.store_id,address.address from store
  inner join address on store.address_id=address.address_id;";
  $countries = getData($query);
  return $countries;
 }

//  function insertData($data)
//  {
//     $address = "INSERT INTO `sakila`.`address`(
//     `address`,
//     `address2`,
//     `district`,
//     `city_id`,
//     `postal_code`,
//     `phone`,
//     `last_update`)

//     VALUES ('".$data['address']."', '".$data['address2']."', '".$data['district']."', '".$data['city']."','".$data['postal_code']."','".$data['phone']."',20221010);";

//     $res=saveData($address);
//     if($res=="OK"){
//         $addIDquery="Select address_id from address order by address_id desc limit 1;";
//         $address_id=getData($addIDquery);
//     }
//     if($address_id!=null){
//         $customerquery="INSERT INTO `sakila`.`customer`
//         (
//         `store_id`,
//         `first_name`,
//         `last_name`,
//         `email`,
//         `address_id`,
//         `active`,
//         `create_date`,
//         `last_update`)
//         VALUES
//         ('".$data['store']."', '".$data['first_name']."', '".$data['last_name']."', '".$data['email']."','".$address_id[0]['address_id']."','1',20221010,20221010);";
//         $res=saveData($customerquery);
//     }
//     return $res;
//  }

 

?>