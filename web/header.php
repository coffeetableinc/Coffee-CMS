<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*include libraries here*/
?>
  
  <html>
      <head>
          <title>Coffee CMS - The lightweight, fast, quick and no pain CMS!</title>
<!-- libraries-->
 <link rel="stylesheet" href="../admin/librariesLocal/bootstrap.min.css">
  <script src="../admin/librariesLocal/jquery.min.js"></script>
  <script src="../admin/librariesLocal/bootstrap.min.js"></script>

  <!-- Local Libraries -->
  <link rel="stylesheet" href="../css/style.css">
      </head>
      <body>
          <div class="container">
              <div class="row">
                  <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-10 header">
                      <span style='color:rgb(109,172,188);font-size:400%;margin:18% 15% 12% 15%;'>
                          <a href="index.php"><img src='../images/logo.gif' alt="Coffee CMS" style='width:10%;'/></a>
                       Coffee CMS </span>
                  </div>
              </div>
          </div>

        <?php
        session_start();

        if ($_SESSION["userName"] != NULL) {
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-9 col-md-3">
                        <button class="btn btn-info"> Hello <?php echo $_SESSION[userName]; ?> </button>
                    </div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-md-offset-2 col-md-1"><a href="../admin/viewUser.php" target="_self"><button type="button" class="btn btn-primary newcust"> Users</button></a></div>
                    <div class="col-md-1"><a href="../admin/viewPage.php"><button type="button" class="btn btn-primary newcust"> Pages</button></a></div>
                    <div class="col-md-1"><a href="../admin/viewPost.php"><button type="button" class="btn btn-primary newcust"> Posts</button></a></div>
                    <div class="col-md-1"><a href="../admin/newUser.php"><button type="button" class="btn btn-primary newcust"> +User</button></a></div>
                    <div class="col-md-1"><a href="../admin/newPost.php"><button type="button" class="btn btn-primary newcust"> +Post</button></a></div>                     
                    <div class="col-md-1"><a href="../admin/newPage.php"><button type="button" class="btn btn-primary newcust"> +Page</button></a> </div>
                    <div class="col-md-1"><a href="../admin/newData.php?id=logoutDetails"><button type="button" class="btn btn-primary newcust"> Logout? </button></a> </div>

                </div>        


            <?php } ?>