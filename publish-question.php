<?php require('actions/securityModels.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
<br><br>

    <?php include 'includes/navbar.php'; ?>
    
    <form class="container" method="POST">

        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Post Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter here your username">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Post Description</label>
            <textarea  class="form-control" name="description" placeholder="Enter here your lastname"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Post Content</label>
            <textarea  class="form-control" name="content" placeholder="Enter here your firstname"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="validate">Submit Post</button>
    </form>
</body>
</html>