<?php

require 'config.php';
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
if (!$link) {
    echo 'could not connect to mysql';
    exit;
}


function createDB(){
$db = mysql_query("create database `".DB_NAME."`");
//var_dump("create database `".DB_NAME."`");

if(!$db){
  echo 'Could not create database';
  exit;
}

$selDb = mysql_select_db(DB_NAME);
if (!$selDb) {
echo "Could not select database";
}
else{
   
  mysql_query("DROP TABLE IF EXISTS `coffee_pages`");
  mysql_query("CREATE TABLE `coffee_pages`(`page_id` int(11) NOT NULL AUTO_INCREMENT, `page_title` varchar(150) NOT NULL, `page_text` text NOT NULL, `page_description` text, `created_date` datetime NOT NULL,`page_active` int(1) NOT NULL DEFAULT '1',`edit_date` datetime NOT NULL,PRIMARY KEY (`page_id`))");
  mysql_query("DROP TABLE IF EXISTS `coffee_posts`");
  mysql_query("CREATE TABLE `coffee_posts` (`post_id` int(11) NOT NULL AUTO_INCREMENT,`post_title` varchar(300) NOT NULL,`post_text` text NOT NULL,`date_of_post` datetime DEFAULT NULL,`post_active` int(1) NOT NULL DEFAULT '1',`date_of_edit` datetime NOT NULL,PRIMARY KEY (`post_id`))");
  mysql_query("DROP TABLE IF EXISTS `coffee_roles`");
  mysql_query("CREATE TABLE `coffee_roles` (`role_id` int(11) NOT NULL AUTO_INCREMENT,`role_name` varchar(20) NOT NULL,PRIMARY KEY (`role_id`))");
  mysql_query("INSERT INTO `coffee_roles` VALUES (1,'Admin'),(2,'Moderator')");
  mysql_query("DROP TABLE IF EXISTS `coffee_users`");
  mysql_query("CREATE TABLE `coffee_users` (`user_id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'User Id',`user_name` varchar(50) NOT NULL,`user_password` text NOT NULL,`user_role` int(11) NOT NULL,`user_fullname` varchar(70) NOT NULL,`user_active` int(1) NOT NULL DEFAULT '1',PRIMARY KEY (`user_id`),UNIQUE KEY `user_name` (`user_name`))");
}

}

/* GET DATA */
mysql_select_db(DB_NAME);
/* get data for page */
function getPage($pageId) {
    $getPage = mysql_query("SELECT page_id,page_title,page_text,page_description FROM `coffee_pages` WHERE page_id = " . $pageId);
    $resultset = array();
    while ($row = mysql_fetch_array($getPage)) {
        $resultset[] = $row;
    }
    return $resultset;
}

/* get data for post */
function getPosts() {
    $getPosts = mysql_query("SELECT post_id,post_title,post_text,date_of_post FROM `coffee_posts` WHERE post_active=1 ");
    $resultset = array();
    while ($row = mysql_fetch_array($getPosts)) {
        $resultset[] = $row;
    }
    return $resultset;
}

/* get user roles */
$getRoles = "SELECT 'role_id','role_name' FROM `" . DB_NAME . "`.`coffee_roles`";


/* get users */
function getUsers() {
    //$getUsers = mysql_query("SELECT user_id,user_name,user_role,user_fullname FROM `".DB_NAME."`.`coffee_users`");
    $getUsers = mysql_query("SELECT user_id,user_name,user_role,user_fullname,role_id,role_name FROM `coffee_users`,`coffee_roles` WHERE coffee_users.user_role = coffee_roles.role_id and  user_active=1");

    $resultset = array();
    while ($row = mysql_fetch_array($getUsers)) {
        $resultset[] = $row;
    }
    return $resultset;
}

/* get pages */
function getPages() {

    $getPages = mysql_query("SELECT page_id,page_title,page_text,page_description FROM `coffee_pages` WHERE 1 and  page_active=1");
    $resultset = array();
    while ($row = mysql_fetch_array($getPages)) {
        $resultset[] = $row;
    }
    return $resultset;
}

/*get post from id*/
function getPostFromId($postId){
    $getPost = mysql_query("SELECT post_id,post_title,post_text,date_of_post FROM `coffee_posts` WHERE post_id = ".$postId);
    $row = mysql_fetch_array($getPost);

    return $row;
}

/* SET DATA */
/* set data for page */

function setPage($pageTitle, $pageDescription, $pageContent, $pageDate) {
    $setPage = mysql_query("INSERT INTO `" . DB_NAME . "`.coffee_pages(page_id,page_title,page_text,page_description,created_date) VALUES(NULL,'" . $pageTitle . "','" . $pageContent . "','" . $pageDescription . "','" . $pageDate . "')");

    if ($setPage) {
        return 0;
    } else {
        return 1;
    }

}

/* set data for post */

function setPost($postTitle, $postText, $postDate) {

    $setPost = mysql_query("INSERT INTO `" . DB_NAME . "`.coffee_posts(post_id,post_title,post_text,date_of_post) VALUES(NULL,'" . $postTitle . "','" . $postText . "','" . $postDate . "')");

    if ($setPost) {
        return 0;
    } else {
        return 1;
    }
}

/* set data for users */

function setUser($userFullname, $userName, $userPassword, $userRole) {

    $setUsers = mysql_query("INSERT INTO `" . DB_NAME . "`.coffee_users(user_id,user_name,user_password,user_fullname,user_role) VALUES(NULL,'" . $userName . "','" . $userPassword . "','" . $userFullname . "'," . $userRole . ")");

    if ($setUsers) {
        return 0;
    } else {
        return mysql_error();
    }
}

/*check details*/

function checkLogin($userName){
    $getUser = mysql_query("SELECT user_password,user_role from `".DB_NAME."`.coffee_users WHERE user_name ='".$userName."'");

    $row = mysql_fetch_array($getUser);

    return $row;
}

/*del data from table*/
function deactivatePage($pageId){
    $dePage = mysql_query("UPDATE `".DB_NAME."`.`coffee_pages` SET `page_active` = '0' WHERE `coffee_pages`.`page_id` =".$pageId);
     if ($dePage) {
        return 0;
    } else {
        return mysql_error();
    }

}

function deactivatePost($postId){
    $dePost = mysql_query("UPDATE `".DB_NAME."`.`coffee_posts` SET `post_active` = '0' WHERE `coffee_posts`.`post_id` =".$postId);
     if ($dePost) {
        return 0;
    } else {
        return mysql_error();
    }

}

function deactivateUser($userId){
    $deUser = mysql_query("UPDATE `".DB_NAME."`.`coffee_users` SET `user_active` = '0' WHERE `coffee_users`.`user_id` =".$userId);
     if ($deUser) {
        return 0;
    } else {
        return mysql_error();
    }

}


/*edit data*/
function editPage($pageId,$pageTitle,$pageDescription,$pageContent,$editDate){
    $editPage = mysql_query("UPDATE `".DB_NAME."`.`coffee_pages` SET `page_title` = '".$pageTitle."' , `page_description` = '".$pageDescription."' , `page_text` = '".$pageContent."' , `edit_date` = '".$editDate."' WHERE `page_id` = ".$pageId);
    if ($editPage) {
        return 0;
    } else {
        return mysql_error();
    }
}

function editPost($postId,$postTitle,$postContent,$editDate){

$editPost = mysql_query("UPDATE `".DB_NAME."`.`coffee_posts` SET `post_title` = '".$postTitle."' , `post_text` = '".$postContent."' , `date_of_edit` = '".$editDate."' WHERE `post_id` = ".$postId);

    if ($editPost) {
        return 0;
    } else {
        return mysql_error();
    }

}

function createDetails($about,$contact,$date,$userName,$userPassword){
 $createDetailsAbout = mysql_query("INSERT INTO `".DB_NAME."`.coffee_pages(page_id, page_title, page_text, page_description,created_date) VALUES (NULL, 'About Us', '".$about."', NULL,'".$date."')");
  
  $createDetailsContact = mysql_query("INSERT INTO `".DB_NAME."`.coffee_pages(page_id, page_title, page_text, page_description,created_date) VALUES (NULL, 'Contact Us', '".$contact."', NULL,'".$date."')");

  $createAdmin = mysql_query("INSERT INTO `" . DB_NAME . "`.coffee_users(user_id,user_name,user_password,user_fullname,user_role) VALUES(NULL,'" . $userName . "','" . $userPassword . "','Administrator',1)");
  
  if ($createDetailsAbout && $createDetailsContact && $createAdmin) {
      return 0;
  } else {
      return 1;
  }

}

?>
