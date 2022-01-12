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
    <div class="container">
        <?php
        if (isset($errorMsg)) {
            echo '<p>' . $errorMsg . '</p>';
        }
        ?>

        <?php
        if (isset($question_content)) {
        ?>
            <form class="container" method="POST">


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Post Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter here your username" value="<?= $question_title ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Post Description</label>
                    <textarea class="form-control" name="description" placeholder="Enter here your lastname"><?= $question_description ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Post Content</label>
                    <textarea class="form-control" name="content" placeholder="Enter here your firstname"><?= $question_content ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="validate">Modify Post</button>
            </form>
        <?php
        }
        ?>

    </div>

</body>

</html>