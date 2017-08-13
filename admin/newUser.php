<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'header.php';
include_once '../config/db.php';
?>

<div class="container">
    <div class="row"><br></div>
   
        <div class="row details">
            <div class="col-md-offset-1 col-md-10 form-responsive">
                </br>

            </div>
            <div class="col-md-1"></div>
        </div>
  

        <div class="row inputDetails">
            <form name="inputUserDetails" action="newData.php?id=userDetails" method="post">

                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="name">Name:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="userFullname">            
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="mobile">Username:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="userName">            
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="address">Password:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="password" class="form-control" name="userPassword">        
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-md-2">
                        <label for="dob">Roles:</label>
                    </div>
                    <div class="col-md-10">
                        <select class="form-control" name="userType">
                            <option value="1">Administrator</option>
                            <option value="2">Moderator</option>
                        </select>                   
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-offset-5 col-md-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                         <?php if($_GET[form] != 'edit') { ?>
                        <button type="reset" class="btn btn-success">Reset</button>
                         <?php } ?>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </form>


        </div>
</div>

        <?php include_once '../web/footer.php'; ?>