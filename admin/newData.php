<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../config/db.php';
include_once 'header.php';

session_start();

/* user details */
if ($_GET[id] == 'userDetails') {

    $userFullname = $_POST[userFullname];
    $userName = $_POST[userName];
    $userPassword = md5($_POST[userPassword]);
    $userRole = $_POST[userType];

    $user = setUser(addslashes($userFullname), $userName, $userPassword, $userRole);

    if ($user != 0) {
        echo 'Could not add user details. Check details<br>' . $user;
    }
}

if ($_GET[id] == 'postDetails') {

    $postTitle = addslashes($_POST[postTitle]);
    $postText = addslashes($_POST[postText]);
    $date = new DateTime();
    $postDate = $date->format('Y-m-d H:i:s');

    $post = setPost($postTitle, $postText, $postDate);

    if ($post == 1) {
        echo 'Could not add post details. Try again later';
    }
}

if ($_GET[id] == 'pageDetails') {

    $pageTitle = addslashes($_POST[pageTitle]);
    $pageDescription = addslashes($_POST[pageDescription]);
    $pageContent = addslashes($_POST[pageContent]);
    $date = new DateTime();
    $pageDate = $date->format('Y-m-d H:i:s');

    $page = setPage($pageTitle, $pageDescription, $pageContent, $pageDate);

    if ($page == 1) {
        echo 'Could not add page details. Try again later';
    }
}

if ($_GET[id] == 'loginDetails') {

    $userName = $_POST[userName];
    $userPassword = md5($_POST[userPassword]);

    $loginDetails = checkLogin($userName);

    if ($userPassword == $loginDetails[user_password]) {

        $_SESSION["userName"] = $userName;
        $_SESSION["userRole"] = $loginDetails[user_role];

        header("Location: index.php");
    } else {
        header("Location: index.php?login_attempt_fail=1");
    }
}

if ($_GET[id] == 'logoutDetails') {

    session_destroy();
    header("Location: index.php");
}

if ($_GET[id] == 'details') {

    createDB();
    $about = addslashes($_POST[about]);
    $contact = addslashes($_POST[contact]);
    $adminUname = $_POST[userName];
    $adminPassword = md5($_POST[password]);
    $date = new DateTime();
    $pageDate = $date->format('Y-m-d H:i:s');
    $details = createDetails($about, $contact, $pageDate,$adminUname,$adminPassword);

    if ($details == 0) {
        header("Location: ../web/index.php?id=done");
    } else {
        header("Location: ../web/index.php?id=undone");
    }
 
 
}


include_once '../web/footer.php';
