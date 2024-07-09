 <?php
include 'navigation.php' ;
?>

    <?php

if(isset($_GET['Products'])){
    include 'products.php';
}else if (isset($_GET['About'])){
    include 'about.php';
}else if (isset($_GET['Home'])){
        include 'home.php';
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
    }else {
        include 'mycart.php';
    }
   
}else if (isset($_GET['MyOrders'])){
    include 'myorders.php';
}else if (isset($_GET['Completed'])){
    include 'completed.php';
}else if (isset($_GET['Cancelled'])){
    include 'cancelled.php';
}

?>