<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../config/db.php';
include_once 'header.php';


if(! $_GET[id]){
    echo 'redirect to 404';
}
else{
    $pageId = $_GET[id];
    $page = getPage($pageId);
    echo '<div class="container"><div class="row">
         <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-10 post">';
    foreach ($page as $value) {
        echo '<h3>'.$value[page_title].'</h3>';
        echo '<br><br><br>';
        echo '<p>'.$value[page_text].'</p>';
    }
    echo ' </div><div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div></div></div>';
}
?>
            
<?php
include_once 'footer.php';
?>
