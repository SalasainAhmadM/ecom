<?php
session_start();

if(isset($_SESSION['userid'])){

}else {
    //$_SESSION['userid']

    function getClientIP() {

        if (isset($_SERVER)) {
    
            if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
                return $_SERVER["HTTP_X_FORWARDED_FOR"];
    
            if (isset($_SERVER["HTTP_CLIENT_IP"]))
                return $_SERVER["HTTP_CLIENT_IP"];
    
            return $_SERVER["REMOTE_ADDR"];
        }
    
        if (getenv('HTTP_X_FORWARDED_FOR'))
            return getenv('HTTP_X_FORWARDED_FOR');
    
        if (getenv('HTTP_CLIENT_IP'))
            return getenv('HTTP_CLIENT_IP');
    
        return getenv('REMOTE_ADDR');
    }

    $_SESSION['user_id'] = getClientIP();
    $_SESSION['_ip'] = getClientIP();
    



}


include_once('connection/connect.php');
include_once('includes/Product.php');
include_once('includes/Cart.php');
include_once('includes/Order.php');
include_once('includes/Users.php');

?>
<!DOCTYPE html>
<html lang="en">

<?php include_once("components/headers.php") ?>
<script src="bootstrap/js/jquery.js"></script>
<body style="background-color: #f3f7f7">

<style>
    .list-group-item {
    position: relative;
    display: block;
    padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x);
    color: var(--bs-list-group-color);
    text-decoration: none;
    background-color: #f3f7f7;
    border: var(--bs-list-group-border-width) solid var(--bs-list-group-border-color);
}
</style>
<div >
<div class="row" >
    <div class="col-md-8" id="content" style="margin:auto">
	
	<?php
	error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
	if($_SESSION['userid'] != null){
		include 'navigation.php';
	}
	
	?>
	
    <?php
if(isset($_GET['Products'])){
    include 'products.php';
}else if (isset($_GET['About'])){
    include 'about.php';
}else if(isset($_GET['Register'])) {
   include 'register.php';
}else if (isset($_GET['MyCart'])){
    include 'mycart.php';
}else if (isset($_GET['MyAccount'])){
    include 'myaccount.php';
}else if (isset($_GET['Success'])){

    if(isset($_SESSION['ordersuccess'])){
        include 'success.php';
        unset($_SESSION['ordersuccess']);
    }
   
}else if (isset($_GET['MyOrders'])){
    include 'myorders.php';
}else if (isset($_GET['Completed'])){
    include 'completed.php';
}else if (isset($_GET['Cancelled'])){
    include 'cancelled.php';
}

?>


    </div>


    <ul class="list-group list-group-flush mt-2">
 
  <li  class="list-group-item"> 
    
 <?php 
 if(isset($_GET['Register'])) {

 }else {
    if(isset($_SESSION['userid'])){
        ?>

 
 
        <?php
    }else {
        include 'signin.php' ;
    }
   
 }

 
 ?>



</li>
 
</ul>


    </div>
    
    

</div>

</div>

<script>
    $(document).ready(function(){
        countingcart();
    function countingcart() {
      $.ajax({
		 			 url : "action/view.php",
		 			 method: "POST",
		 			 data  : {countcart:1},
		 			  success : function(data){
                        if(data >=1){
                $('#cartcount').html('<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">'+data+'<span class="visually-hidden"></span></span>');
               }else {

               }
		 			   }
		 			 })
    }

  
    })
</script>

<footer>
SAE .Co 2023
 </footer>

<?php include_once("components/footers.php") ?>
</body>
</html>



