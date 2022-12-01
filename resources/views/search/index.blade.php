<?php 
include("getdata.php"); 
$countries = getCountry();
$stores = getStore();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<div class="container justify-content-center text-black" style = "padding: 20px; width: 600px; background-color: lightgrey;">

    <div class="mb-3" style= "display:flex; justify-content:center;">
        <button id='show-hide' class="btn btn-outline-dark" onclick='ShowHide();' value='hide'><b>Show/Hide customers</b></button>
        <!-- <button id='btn' class="btn btn-outline-dark" onclick='ShowHide1();' value='hide1'><b>Show/Hide customers</b></button> -->

    </div>

    <form class="" id="register">
        <div class="row g-3">
            <div class="col">
                <label for="first_name" class="form-label"><b>First name:</b></label><br>
                <input class="form-control" type="text" id="first_name" name="first_name" placeholder="First name">
            </div>
            <div class="col">
                <label for="last_name" class="form-label"><b>Last name:</b></label><br>
                <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Last name">
            </div>
        </div>
        <div class="mb-12">
            <label for="email" class="form-label"><b>Email:</b></label><br>
            <input class="form-control" type="text" id="email" name="email" placeholder="Email">
        </div>
        <div class="mb-12">
            <label for="address" class="form-label"><b>Address:</b></label><br>
            <input class="form-control" type="text" id="address" name="address" placeholder="Address">
        </div>
        <div class="mb-12">
            <label for="address2" class="form-label"><b>Address 2 (Optional):</b></label><br>
            <input class="form-control" type="text" id="address2" name="address2" placeholder="Address 2 (Optional)">
        </div>
        <div class = "row">
            <div class="col-md-6">
                <label for="country" class="form-label"><b>Country:</b></label><br>
                <select class="form-select" name="country" id="inputCountry" placeholder="Country">
                <?php 
                    foreach ($countries as $key => $val)
                    {
                    echo 
                    "<option value =" 
                    .$val['country_id'].">"
                    .$val['country'].
                    "</option>";
                    }
                ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="city" class="form-label"><b>City:</b></label><br>
            <select class="form-select" name="city" id="inputCity" placeholder="City"></select>
        </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="postal code" class="form-label"><b>District:</b></label><br>
                <input class="form-control" type="text" id="district" name="district" placeholder="District"> </input>
            </div>
            <div class="col-md-6">
                <label for="store" class="form-label"><b>Store:</b></label><br>
                <select class="form-select" name="store" id="inputStore" name="store" placeholder="Store"></select>
            </div>
        </div>
        <div class = "row">
            <div class="col-md-6">
                <label for="phone"class="form-label"><b>Phone:</b></label><br>
                <input class="form-control" type="text" id="phone" name="phone" placeholder="Phone"></input>
            </div>
            <div class = "col-md-6">
                <label for="postal code" class="form-label"><b>Zip:</b></label><br>
                <input class="form-control" type="text" id="postal_code" name="postal_code" placeholder="Zip code"></input>
            </div>
        </div>
        <br>
        <div class="mb-3" style= "display:flex; justify-content:center;">
            <button id="submit" class ="btn btn-outline-dark"><b>Submit</b></button>
            <button id="submit" class ="btn btn-outline-dark"><b>Submit</b></button>
        </div>
    </form>
</div>


<?php
include("welcome.php");

?>




<script>
$(document).ready(function(){
    $("#inputCountry").trigger("change");
})

$(document).ready(function(){
    $("#inputStore").trigger("change");
})

$("#inputCountry").change(function(){
    var country_id = $(this).find(":selected").val();
    console.log(country_id);
    $("#inputCity").empty();
    $.ajax({
        type: "GET",
        url: "getdata.php?action=getcity&country_id="+country_id,             
        dataType: "json",   //expect html to be returned                
        success: function(data){                    
           $.each(data, function(key){
           $("#inputCity").append("<option value=" + data[key]['city_id']+">"+data[key]['city']+ "</option>")
           })
       },
        error: function(jqXhr, textStatus, errorMessage){
            console.log("error")
       }
   });
})


$("#inputCountry").change(function(){
    var city_id = $(this).find(":selected").val();
    console.log(city_id);
    $("#inputStore").empty();
    $.ajax({
        type: "GET",
        url: "getdata.php?action=getStore&city_id="+city_id,             
        dataType: "json",   //expect html to be returned                
        success: function(data){                    
           $.each(data, function(key){
            $("#inputStore").append("<option value=" + data[key]['store_id']+">"+data[key]['address']+ "</option>")
           })
       },
        error: function(jqXhr, textStatus, errorMessage){
            console.log("error")
       }
   });
})
$("#submit").on("click",function(){
    event.preventDefault();
    var inputs=$("#register").serializeArray();
    console.log(inputs);
    $.ajax({
        type: "POST",
        url: "getdata.php",             
        dataType: "json",   //expect html to be returned 
        data:inputs,               
        success: function(data){         
            $("#register").trigger("reset");           
        },
        error: function(jqXhr, textStatus, errorMessage){
            console.log(errorMessage)
        }
    });
});
function ShowHide()
{
    var btn_text = $("#show-hide").val();
    if(btn_text == "hide")
    {
      $("#register").hide();
      $("#show-hide").val("show");
    }
    else if(btn_text == "show")
    {
      $("#register").show();
      $("#show-hide").val("hide");
    }
}

// function UpdateRecord(id)
//   {
//       jQuery.ajax({
//        type: "POST",
//        url: "db_connect.php",
//        data: 'customer_id='+id,
//        cache: false,
//        success: function(response)
//        {
//          alert("Record successfully updated");
//        }
//      });
//  }
 
 $("#submit").on("click",function(){
    event.preventDefault();
    var inputs=$("#register").serializeArray();
    console.log(inputs);
    $.ajax({
        type: "POST",
        url: "getdata.php",             
        dataType: "json",   //expect html to be returned 
        data:inputs,               
        success: function(data){         
            $("#register").trigger("reset");           
        },
        error: function(jqXhr, textStatus, errorMessage){
            console.log(errorMessage)
        }
    });
});
</script>
</body>
</html>