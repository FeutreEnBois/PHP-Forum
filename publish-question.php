<?php
require('actions/users/securityModels.php');
require('actions/questions/publishQuestionModels.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
</head>

<body>
    
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">

    <?php include 'includes/navbar.php'; ?>

    <form method="POST">

        <div class="wrapper wrapper--75p p-t-20">
            <div class="card card-4">
                <div class="card-body">
                    <?php
                    if (isset($errorMsg)) {
                        echo '<p>' . $errorMsg . '</p>';
                    }
                    if (isset($successMsg)) {
                        echo '<p>' . $successMsg . '</p>';
                    }
                    ?>
                    <div>
                        <label for="exampleInputEmail1">Question Title :</label>
                        <input type="text" class="input--style-4" name="title" placeholder="Enter your question">
                        </div>
                        <div class="p-t-20">
                            <label for="exampleInputEmail1" class="form-label">Describe your problem :</label> <br>
                            <textarea class="txtareas" name="description"></textarea>
                        </div>
                        <div class="p-t-20">
                            <label for="exampleInputEmail1" class="form-label">Add content :</label> <br>
                            <textarea type="text" class="txtareas" name="content"></textarea>
                        </div>
                        <div class="p-t-20">
                        <button type="submit" class="btn btn--radius-2 btn--blue" name="validate">Publish question</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>