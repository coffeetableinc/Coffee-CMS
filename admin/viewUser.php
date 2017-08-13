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
    <!--  <div class="row">
        <div class="col-md-offset-10 col-md-2">

            <a href="#"><button type="button" class="btn btn-primary newcust"> Delete</button></a>

            <a href="#"><button type="button" class="btn btn-primary newcust"> Edit</button></a>
        </div>
    </div>
    -->
<div class="container">
    <div class="row"><br></div>
    <div class="row">
        <div class="col-md-offset-10 col-md-2">

            
        </div>
    </div>
    <div class="row details">
        <div class="col-md-offset-1 col-md-10 table-responsive">
            <table class="table">

              
                <thead>
                <th>Name</th>
                <th>Username</th>
                <th>Roles</th>
                <th></th>
                </thead>
                
<?php 
$users = getUsers();
foreach ($users as $value) { ?>
                    <tr>
                        <?php echo '<td>'.$value[user_fullname].'</td>'; ?>
                        <?php echo '<td>'.$value[user_name].'</td>'; ?>
                        <?php echo '<td>'.$value[role_name].'</td>'; ?>
                       <?php   echo '<td>';
                       //echo '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>';
                       echo '<a href="delData.php?form=user&id='.$value[user_id].'"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>'; ?>
                        </td>
                    <?php } ?>
<!-- <i class="fa fa-pencil-square-o" aria-hidden="true"></i> -->
                </tr>


            </table>
        </div>


<?php include_once '../web/footer.php'; ?>