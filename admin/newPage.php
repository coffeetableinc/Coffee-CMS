<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'header.php';


if ($_GET[form] == 'edit') {

    $pageId = $_GET[id];
    $pageTitle = $_GET[title];
    $pageDescription = $_GET[desc];
    $pageContent = $_GET[con];

}
?>

<div class="container">
    <div class="row"><br></div>
    <div class="row">
        <div class="row details">
            <div class="col-md-offset-1 col-md-10 form-responsive">
                </br>

            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="row inputDetails">
            <?php
            if ($_GET[form] == 'edit') {
                echo '<form name="inputCustomerDetails" action="editData.php?form=page&id=' . $pageId . '" method="post">';
            } else {
                ?>
                <form name="inputCustomerDetails" action="newData.php?id=pageDetails" method="post">
                <?php
            }
            ?>


                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="name">Page Title:</label>
                    </div>
                    <div class="col-md-10">
<?php echo '<input type="text" class="form-control title" name="pageTitle" value="' . $pageTitle . '">'; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="mobile">Page Description:</label>
                    </div>
                    <div class="col-md-10">
<?php echo '<input type="text" class="form-control description" name="pageDescription" value="' . $pageDescription . '">' ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="address">Page Content:</label>
                    </div>
                    <div class="col-md-10">
<?php echo '<textarea type="text" class="form-control content" name="pageContent" rows=7>' . $pageContent . '</textarea>'; ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-offset-5 col-md-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <?php if($_GET[form] != 'edit') { ?>
                        <button type="reset" class="btn btn-success">Reset</button>
                        <?php } ?>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </form>


        </div>

<?php include_once '../web/footer.php'; ?>

     