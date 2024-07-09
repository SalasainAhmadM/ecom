<?php
session_start();
if(!isset( $_SESSION['admin_login'])){
  header('location:../index.php');
}
include '../connection/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php $admin=1; include_once("../components/headers.php") ?>
<body >
<style>
      body {
        background-color: #1c2331;
      }
      #myacc2 {
      float: right;
  margin-right: 0;
    }
    </style>
<nav class="navbar bg-secondary2">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#" style=" font-family: Verdana, sans-serif;font-weight:bold">
      <img src="../assets/image_assets/saelogo.png" alt="" width="60" height="40" class="d-inline-block align-text-top" >
    </a>
  </div>

</div>
</nav>


<?php include 'components/sidebar.php'; ?>
 
  <section class="main">
    
  <button class="btn btn-light text-dark" id="slideleft" style="font-size: 10px;position:fixed;top:70px"><i class="fa-sharp fa-solid fa-list"></i></button>

<button class="btn btn-light text-dark d-none" id="slideright" style="font-size: 10px;position:fixed;top:70px"><i class="fa-sharp fa-solid fa-list"></i></button>

      <div style="background-color: lightgray; padding: 20px;" class="main_contents">
         <div class="container">
         <br><br>
          <h5 style="font-weight: bolder;">DASHBOARD</h5>

          <div class="row">
          
              
           

             

               <div class="col-md-9">
                 <div class="row">
                   <div class="col-md-4">
                   <div class="card shadow border-info">
                    <div class="card-body">
                         <h6 style="font-weight: bolder;text-align: center;" class="text-dark">
                         PRODUCTS <span class="badge bg-light text-dark"> 

                           <?php 
                               $cproducts = " select * from product  ";
                                           $countproduct = mysqli_query($con,$cproducts); 
                                           $allproducts= mysqli_num_rows($countproduct);
                                       echo $allproducts;   

                            ?>
                         </span>
                         </h6>
                    </div> 
                    
                 </div> 
                   </div>

                   <div class="col-md-4">
                   <div class="card shadow border-primary">
                    <div class="card-body">
                         <h6 style="font-weight: bolder;text-align: center;" class="text-dark">
                         CUSTOMERS <span class="badge bg-light text-dark"> 
                           <?php 
                               $ccustomers = " select * from accounts where user_type !='admin'  ";
                                           $ccustom = mysqli_query($con,$ccustomers); 
                                           $allcustomers= mysqli_num_rows($ccustom);
                                   echo $allcustomers;      
                            ?>
                         </span>
                         </h6>
                    </div> 
                    
                 </div>
                   </div>

                   <div class="col-md-4">
                   <div class="card shadow border-success">
                    <div class="card-body">
                         <h6 style="font-weight: bolder;text-align: center;" class="text-dark">
                           ORDERS <span class="badge bg-light text-dark"> <?php 
                               $corders = " select * from trans_record  ";
                                           $countord = mysqli_query($con,$corders); 
                                           $allorders= mysqli_num_rows($countord);
                                 echo $allorders;     

                           ?></span>
                         </h6>
                    </div> 
                    
                 </div> 
                   </div>

                 </div>


                 <div class="card mt-4">

                 <div class="card-body">
                 <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "",
		horizontalAlign: "left"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
	

      { y: <?php echo $allproducts ?>, label: "Product", exploded: true },
      { y: <?php echo $allcustomers ?>, label: "Customers" },
      { y: <?php echo $allorders ?>, label: "Sales" }
     
		]
	}]
});
chart.render();

}
</script><div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

                 </div>
                 </div>


                 
              </div> 

              <div class="col-md-3">
              <table>
              <tr><td style="text-align: center;"><canvas id="canvas_tt62960078eb980" width="175" height="175"></canvas></td></tr>
          </table>
          <div style="text-align:center;padding:1em 0;"> <h3><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/country/ph"><span style="color:gray;"></span><br />Philippines</a></h3> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FManila" width="100%" height="115" frameborder="0" seamless></iframe> </div>
<script type="text/javascript" src="//w.24timezones.com/l.js" async></script>
              </div>
              

              
          
          

          </div>

       
    


        
        </div> 



      </div> 


       <div class="footer shadow">
         
       </div> 
       
      
     
     
     

  </section>





<footer>
    SAE .Co 2023
 </footer>
 

<script src="../bootstrap/js/jquery.js"></script>
<script src="../bootstrap/js/popper.js?v=1"></script>
<script src="../bootstrap/js/sidebar.js"></script>

<?php include_once("../components/footers.php") ?>

</body>
</html>



