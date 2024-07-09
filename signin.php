<style>
	.card {
	  margin: auto;
    height: 23rem;
    width: 20rem;
    padding: 1rem;
    box-shadow: 0px 2px 4px -1px rgb(0 0 0 / 20%), 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 10px 0px rgb(0 0 0 / 12%);
    border-radius: 20px;
    background-color: #1c2331;
    margin-top: 40px;
	}
  
	</style>
	
<div style=" margin-top: 40px;"class="card shadow mt-4 ">
 
      <div  class="card-body">
        <form action="login.php" method="post">
        <div class="d-flex align-items-center">
  <img src="assets/image_assets/saelogo.png" alt="" width="100" height="60" class="mx-auto d-inline-block align-text-top">
</div>

          <?php
    if(isset($_SESSION['credentialsnotmatch'])){
      echo '<div class="alert alert-danger alert-dismissable"  data-bs-dismiss="alert" aria-label="Close" role="alert">
     <span style="font-size:13px">You have entered an incorrect Email or Password!</span>

     
    </div>';

      unset($_SESSION['credentialsnotmatch']);
    }
  ?>

          <a style=" color: gray; font-family: Verdana, sans-serif; font-size: 16px;
             font-style: normal;
             font-weight: 400;
             line-height: 1.5;">Email</a>
          <input type="text" class="form-control" autofocus required  style="font-size:13px" name="email">

          <a style=" color: gray; font-family: Verdana,sans-serif; font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;">Password</a>
          <input type="password" class="form-control pp" required style="font-size:13px" name="pass">
          <button type="submit" class="btn btn-primary form-control round-pill mt-4 mb-3 dd" name="login"> CONTINUE</button>
          <br>
          <a href="?Register" style=" color: gray; font-family: Verdana, sans-serif; font-size: 16px;
             font-style: normal;
             font-weight: 400;
             line-height: 1.5;">Create an Account</a>
          
          </form>
      </div>
  </div>

  <script>
    $(document).ready(function(){
      $('#check').click(function(){

        if($(this).prop("checked") == true) {
                      $('.pp').attr('type','text');               
                     }
                else if($(this).prop("checked") == false) {
                         $('.pp').attr('type','password');                  
                    }

    })
    })
  
  </script>