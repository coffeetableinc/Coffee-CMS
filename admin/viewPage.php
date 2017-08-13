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
                    <th>Title</th>
                    <th>Description</th>
                    <th>Content</th>


                    <th></th>
                    </thead>
                    <?php
                    $pages = getPages();
                    foreach ($pages as $value) {
                        ?>
                        <tr>
                            
                            <?php echo '<td><a href="../web/page.php?id='.$value[page_id].'">' . $value[page_title] . '</a></td>'; ?>
                            <?php echo '<td>' . $value[page_description] . '</td>'; ?>
                            <?php echo '<td>' . substr($value[page_text], 0, 149) . '</td>'; ?>
                            <?php echo '<td><a href="newPage.php?form=edit&id='.$value[page_id].'&title='.$value[page_title].'&desc='.$value[page_description].'&con='.$value[page_text].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>                             <a href="delData.php?form=page&id='.$value[page_id].'"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>'; 
                         } ?>

                    </tr>


                </table>
            </div>


            <?php include_once '../web/footer.php'; ?>