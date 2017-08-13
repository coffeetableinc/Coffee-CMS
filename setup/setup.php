<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../config/config.php';
include_once '../web/header.php';
?>

<div class="container">
    <div class="row"><br></div>

        <div class="row details">
            <div class="col-md-offset-1 col-md-10 form-responsive">
                </br>

            </div>
            <div class="col-md-1"></div>
        </div>


        <div class="row">
          <div class="alert alert-danger alert-dismissable incorrectPassword">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  Please check the values for database configurtion. These values can be changed in ./config/config.php.
</div>
            <form name="inputSetupDetails" action="details.php" method="post">
              <div class="form-group row">
                  <div class="col-md-2">
                      <label for="dbName">Database Host:</label>
                  </div>
                  <div class="col-md-10">
                      <input type="text" class="form-control" name="dbHost" value="<?php echo DB_HOST; ?>" disabled="disabled">
                  </div>
              </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="dbName">Database Name:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="dbName" value="<?php echo DB_NAME; ?>" disabled="disabled">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="dbUName">Database Username</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="dbUsername" value="<?php echo DB_USER; ?>" disabled="disabled">
                    </div>
                </div>
                <!--<div class="form-group row">
                    <div class="col-md-2">
                        <label for="address">Password:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="password" class="form-control" name="dbPassword">
                    </div>
                </div>-->

                <div class="form-group row">

                    <div class="col-md-2">
                        <label for="dbType">Database Type</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="dbType" value="MySQL" disabled="disabled">
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-offset-5 col-md-3">
                        <button type="submit" class="btn btn-primary">Continue</button>
                        
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </form>


        </div>
</div>

        <?php include_once '../web/footer.php'; ?>
