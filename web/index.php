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
<?php

$posts = getPosts();

foreach ($posts as $value) {

?>
     <div class="row">
         <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-10 post">
<?php if($_GET[id] == 'done'){ 
     rename("../setup/index.php", "../setup/.index.php");
    ?>

  <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Wow!</strong> And you are all done!
</div>

<?php
}
  ?>
             <?php if($_GET[id] == 'undone'){ ?>

  <div class="alert alert-info alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Whoops!</strong> The about us and contact us pages could not be created. But you can create these later from the admin panel. You're all set for now. Go ahead and create your first post with <strong>Coffee CMS!</strong>
</div>

<?php
}
  ?>
             

            <?php
            echo '<a href="post.php?id='.$value[post_id].'"> <h3>'.$value[post_title].'</h3></a>';
            ?>

             <p>
<?php

echo $value[post_text];
 echo '</p>';
 echo '<br><i>posted on </i>'.$value[date_of_post];
 ?>

    </div>
           <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
     </div>
         <?php
    }
?>

    <div class="row">
        <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-10 post">
            <h4>Welcome to Coffee CMS!</h4>
            <br>
            <p>
                Coffee CMS is the best, lightest, most amazing CMS. It's amazingly fast, awfully quick and astoundingly light. It has been developed using the latest technologies. You don't have to be a techie to use Coffee CMS. All you need to do is sip on your coffee and write. Coffee CMS will manage all the content like a piece of cake.
            </p>
        </div>

</div>

<?php include_once 'footer.php'; ?>
