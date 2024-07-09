<style>
        .dd {
    width: 100%;
    padding-right: 10px;
    padding-left: 10px;

        }
    </style>
<div class="container2" class="col-md-8" style="display: flex; justify-content: center; align-items: center;">
    
    <div style="  font-family:  Verdana, sans-serif; background-color: #1c2331;color: gray;  margin-top: 50px; width: 60%; padding-top: 40px;
    box-shadow: 0px 2px 4px -1px rgb(0 0 0 / 20%), 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 10px 0px rgb(0 0 0 / 12%);
    border-radius: 20px;
    "class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <?php
        if(isset($_SESSION['notmatch'])){
            echo '<div class="alert alert-danger alert-dismissable"  data-bs-dismiss="alert" aria-label="Close" role="alert">
            <span style="font-size:13px">Password Does not Match!</span>
       
            
           </div>';
           unset($_SESSION['notmatch']);
        }else if (isset($_SESSION['alreadyexist'])){
            echo '<div class="alert alert-danger alert-dismissable"  data-bs-dismiss="alert" aria-label="Close" role="alert">
            <span style="font-size:13px">Email already exist.</span>
       
            
           </div>';
            unset($_SESSION['alreadyexist']);
        }else if (isset($_SESSION['registered'])){
            echo '<div class="alert alert-success alert-dismissable"  data-bs-dismiss="alert" aria-label="Close" role="alert">
            <span style="font-size:13px">Registered Successfully! , <a href="login.php?logged"> Click here to Login.</a></span>
       
            
           </div>';
         
            unset($_SESSION['registered']);
        }
        
        ?>
       
            <div class="mb-5" style="font-size:13px;font-family:  Verdana, sans-serif; background-color: #1c2331;color: gray;" >
            <form action="action/add.php" method="post">
            Name        
            <input type="text" class="form-control mb-2 dd" name="name" autofocus  required>

            Email        
            <input type="text" class="form-control mb-2 dd" name="email" required>

           Delivery Address        
           <textarea name="address" id="" cols="30" rows="3" class="form-control mb-2 dd" style="resize:none" required></textarea>

           Password 
           <input type="password" class="form-control mb-2 pw dd" name="password" required>
           Re-enter Password 
           <input type="password" class="form-control pw dd" name="repassword" required>

           <label for="" style="font-size:13px">Show Password <input type="checkbox" id="check"></label>

           <button type="submit" class="btn btn-primary form-control round-pill mt-4 mb-3 dd" name="register"> Create Your Account</button>
            <a href="?Home"style=" color: gray; font-family: Verdana, sans-serif; font-size: 16px;
             font-style: normal;
             font-weight: 400;
             line-height: 1.5;">Return to Login</a>         
            </form>
            </div>
        
    </div>
    <div class="col-md-2" ></div>

    </div>
</div>
<script>
    $(document).ready(function(){
      $('#check').click(function(){

        if($(this).prop("checked") == true) {
                      $('.pw').attr('type','text');               
                     }
                else if($(this).prop("checked") == false) {
                         $('.pw').attr('type','password');                  
                    }

    })
    })
  
  </script>