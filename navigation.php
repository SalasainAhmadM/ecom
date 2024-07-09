
<style>

	* {
		
	    font-weight: bold;	
	}

  .navbar .nav-link {
    color: #fff;
    margin-right: 1em;
    font-weight: bold;
    text-transform: uppercase;
  }
  .navbar .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.1);
	border-radius: 0.5rem;
  }
  
    .navbar-brand img {
    width: 50px;
    height: 30px;
  }
  
  .navbar-brand {
    padding-top: var(--bs-navbar-brand-padding-y);
    padding-bottom: var(--bs-navbar-brand-padding-y);
    margin-right: 0; */
    font-size: var(--bs-navbar-brand-font-size);
    color: var(--bs-navbar-brand-color);
    text-decoration: none;
    white-space: nowrap;
}

.navbar-expand-lg .navbar-nav {
    flex-direction: row;
    margin-left: auto;
}

  .rounded-0-5 {
    border-radius: 0.5rem;
  }
  
</style>

<div class="mb-2">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding-left: 1.2rem;border-radius: 0.5rem;">
    <a class="navbar-brand" href="#">
    <img src="assets/image_assets/saelogo.png" alt="Logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="?Home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?Products">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?About">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?MyAccount">
				<?php 
		if(isset($_GET['Register'])) {

		}else {
		   if(isset($_SESSION['userid'])){
			   ?>
		My Account



			   <?php
		   }else {
			   include 'signin.php' ;
		   }
		  
		}


		?>
		</a>
      </li>
    </ul>
	  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="logout.php"><i class="fa-sharp fa-solid fa-right-from-bracket"></i> Log Out</a>
    </li>
  </ul>
  </div>
</nav>



<div class="col-md-12">




    <div class="card mt-2">
        <div class="card-body text-center">
        <h3>Welcome  <?php echo $_SESSION['username']?>!</h3>

        </div>
    </div>
	
<button type="button" onclick="window.location.href='?MyCart' " class="btn btn-dark  position-relative mt-2 rounded-0-5 float-right" style="font-weight: bold;text-transform:uppercase;">
My Cart
<div id="cartcount">

</div>

</button>

<?php
 if(isset($_SESSION['userid'])){
    ?>
    <button type="button" onclick="window.location.href='?MyOrders' " class="btn btn-dark  position-relative mt-2 rounded-0-5 float-right" style="font-weight: bold;text-transform:uppercase;">
My Orders
<div id="ordercount">

</div>
</button> 


    <?php
}else {
   
}

?>
<!---->



</div>

</div>