<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../config/db.php';
include_once 'header.php';

if($_GET[form] == 'page'){
    $pageId = $_GET[id];
    
    $delPage = deactivatePage($pageId);
    
    if($delPage != 0){
        echo "Something's the issue. Please try again";
    }
    else{
        header("Location: viewPage.php");
    }
}

if($_GET[form] == 'post'){
    $postId = $_GET[id];
    
    $delPost = deactivatePost($postId);
    
    if($delPost != 0){
        echo "Something's the issue. Please try again";
    }
    else{
        header("Location: viewPost.php");
    }
}

if($_GET[form] == 'user'){
    $userId = $_GET[id];
    
    $delUser = deactivateUser($userId);
    
    if($delUser != 0){
        echo "Something's the issue. Please try again";
    }
    else{
        header("Location: viewUser.php");
    }
}