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
   <!-- <div class="row">
        <div class="col-md-offset-10 col-md-2">

            <a href="page.php"><button type="button" class="btn btn-primary newcust"> Delete</button></a>

            <a href="page.php"><button type="button" class="btn btn-primary newcust"> Edit</button></a>
        </div>
    
    </div>  -->
    <div class="container">
        <div class="row"><br></div>
        <div class="row">
            <div class="col-md-offset-10 col-md-2">


            </div>
        </div>
        <div class="row details">
            <div class="col-md-offset-1 col-md-10 table-responsive">
                <table class="table ">


                    <thead>
                    <th>Title</th>
                   
                    <th>Text</th>
                    <th>Posted On</th>

                    <th></th>
                    </thead>

                    <?php
                    $posts = getPosts();
                   
                    foreach ($posts as $value) {
                        ?>
                        <tr>
                            <?php echo '<td><a href="../web/post.php?id='.$value[post_id].'">'. $value[post_title] . '</a></td>'; ?>         
                          
                            <?php echo '<td>' . substr($value[post_text],0,149) . '</td>'; ?>         
                            <?php echo '<td>' . $value[date_of_post] . '</td>'; ?>         
                            <?php echo '<td><a href="newPost.php?form=edit&id='.$value[post_id].'&title='.$value[post_title].'&con='.$value[post_text].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a href="delData.php?form=post&id='.$value[post_id].'"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>'; 
                         } ?>
<!-- <i class="fa fa-pencil-square-o" aria-hidden="true"></i> -->
                    </tr>


                </table>
            </div>

            <?php include_once '../web/footer.php'; ?>