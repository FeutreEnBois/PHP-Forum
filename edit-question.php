<?php
require('actions/users/securityModels.php');
require('actions/questions/getInfosOfEditedQuestionModels.php');
require('actions/questions/editQuestionModels.php');

?>


<!DOCTYPE html>
<html lang="en">
<?php require('includes/head.php'); ?>

<body>
    <?php require('includes/navbar.php'); ?>

    <br><br>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <?php
        if (isset($errorMsg)) {
            echo '<p>' . $errorMsg . '</p>';
        }
        ?>

        <?php
        if (isset($question_content)) {
        ?>

        <label class="nav-title m-l-45">Edit message</label>

            <form method="POST">

            <div class="wrapper wrapper--75p p-t-20">
                <div class="card card-4">
                    <div class="card-body">

            <div class="mb-3">
                <label for="exampleInputPassword1" class="">Edit Title :</label> <br>
                <input type="text" class="input--style-4" name="title" placeholder="Enter the new title">
            </div>
            <div class="p-t-15">
                <label for="exampleInputPassword1" class="">Edit Description :</label> <br>
                <textarea class="txtareas" name="description" placeholder="Enter here your lastname"><?= $question_description ?></textarea>
            </div>
            <div class="p-t-15">
                <label for="exampleInputPassword1" class="form-label">Edit Content :</label> <br>
                <textarea class="txtareas" name="content" placeholder="Enter here your firstname"><?= $question_content ?></textarea>
            </div>
            <div class="p-t-15">
            <button type="submit" class="btn btn--radius-2 btn--blue" name="validate">Modify Post</button>
            </div>
            </div>
            </div>
            </div>
            
            </form>
        <?php
        }
        ?>

    </div>

</body>

</html>