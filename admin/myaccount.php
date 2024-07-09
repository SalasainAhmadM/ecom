<?php
session_start();
include_once('../includes/Users.php');
include '../connection/connect.php';  
?>
<!DOCTYPE html>
<html lang="en">

<?php $admin=1; include_once("../components/headers.php") ?> 
<body>
<style>
      body {
        background-color: #1c2331;
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

      <div style="background-color: black; padding: 25px;" class="main_contents" style="height: 100%;">
         <div class="container">
         
          <h5 style=" color: white;"style="font-weight: bolder;">MY ACCOUNT</h5>

      
      <?php
      $users = new Users();
      $id = $_SESSION['admin_id'];
             $fetch = $users->fetchuser($con,$id);
             if($fetch){
                 foreach ($fetch as $row) {
                     if($row['photo'] == ''){
                         $src = '../assets/image_assets/noimage.jpg';
                     }else {
                         $src = '../assets/image_assets/'.$row['photo']; 
                     }
                    ?>
                  <form action="../action/edit.php" method="post" enctype="multipart/form-data" style="font-size:14px">
                       <div class="row">
             <div class="col-md-4">
                 <img src="<?php echo $src?>" alt="" style="width:300px;" class="img-thumbnail">
     
                 <input type="file" name="photo" class="d-none form-control" id="photo" accept="image/*" style="font-size:13px">
             </div>
             <div class="col-md-8">
                     <?php
                     if(isset($_SESSION['success'])){
                         echo '<div class="alert alert-success alert-dismissable"  data-bs-dismiss="alert" aria-label="Close" role="alert">
                         <span style="font-size:13px">Account Updated Successfully!</span>
                    
                         
                        </div>';
                     unset($_SESSION['success']);
                     }
                     
                     ?>
                 <a style=" color: white;">Name </a>      
                 <input type="text" class="form-control mb-2 dd" id="uname" value="<?php echo $row['name']?>" name="name"  style="font-size:13px">
     
                 <a style=" color: white;">Email  </a>      
                 <input type="text" class="form-control mb-2 dd" value="<?php echo $row['email']?>"  name="email" style="font-size:13px">
     
                 <a style=" color: white;">Password </a>
              <input type="password" name="pass" class="form-control mb-2" value="<?php echo $row['password']?>">
                     <input type="hidden" name="token" value="<?php echo $row['user_id']?>">
                <button type="submit" class="btn btn-secondary dd" id="updateacc" name="updateuser" >Update</button>
             
               
     
     
     
             </div>
             
         </div>
         </form>
                    <?php
                 }
     
     
             }
      ?>

        
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



