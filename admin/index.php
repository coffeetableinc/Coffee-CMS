<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'header.php';
?>

<div class="container">
    <div class="row"><br></div>
    <div class="row">
        <div class="col-md-offset-10 col-md-2">

            

        </div>
    </div>
    <div class="row details">
        <div class="col-md-offset-1 col-md-10 form-responsive">
            </br>

                

               
              
        </div>
        <div class="col-md-1"></div>
    </div>
<?php if($_SESSION[userName] == NULL ) { ?> 
    <div class="row inputDetails">
    <center><h3 class="title">Login</h3></center></br>
        <form name="loginDetails" action="newData.php?id=loginDetails" method="post">

            <div class="form-group row">
                <div class="col-md-2">
                    <label for="name">Username:</label>
                </div>
                <div class="col-md-10">
                    <input type="text" required="required" class="form-control" name="userName">            
                </div>
            </div>
             <div class="form-group row">
                <div class="col-md-2">
                    <label for="mobile">Password:</label>
                </div>
                <div class="col-md-10">
                    <input type="password" required="required" class="form-control" name="userPassword">  <br>
                     <?php if($_GET[login_attempt_fail] ==1){ ?>
             <div class="alert alert-danger alert-dismissable incorrectPassword">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>OOPS!</strong> Incorrect username or password. Please try again.
</div>
            <?php } ?>
                </div>
            </div>
           
            <div class="row">
                <div class="col-md-offset-5 col-md-3">
                   <button type="submit" class="btn btn-primary">Login</button>
               
                </div>
                <div class="col-md-4"></div>
 </div>
        </form>

   
</div>
<?php } ?>
<?php include_once '../web/footer.php'; ?>
   
        