<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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

            <form name="inputSetupDetails" action="../admin/newData.php?id=details" method="post">
                <div class="form-group row">
                    <div class="col-md-2">
                      <label for="username">Admin Username</label>
                  </div>
                    <div class="col-md-10">
                        <input type="text" name="userName" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                      <label for="password">Admin Password</label>
                  </div>
                    <div class="col-md-10">
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
              <div class="form-group row">
                  <div class="col-md-2">
                      <label for="about">About:</label>
                  </div>
                  <div class="col-md-10">
                      <textarea name="about" class="form-control" rows="7"></textarea>
                  </div>
              </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="contact">Contact:</label>
                    </div>
                    <div class="col-md-10">
                        <textarea name="contact" rows="7"  class="form-control"></textarea>
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
