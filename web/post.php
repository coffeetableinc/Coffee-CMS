<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../config/db.php';
include_once 'header.php';

$postId = $_GET[id];
$postCurrent = getPostFromId($postId);

?>
<div class="row">
    <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-10 post">

        <?php
        echo ' <h3>' . $postCurrent[post_title] . '</h3>';
        
        ?>

        <p>
            <?php
            echo $postCurrent[post_text];
            echo '</p>';
            echo '<br><i>posted on </i>' . $postCurrent[date_of_post];
            ?>
       
    </div>
     <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
</div>
<?php
include_once './footer.php';
?>