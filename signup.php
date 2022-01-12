<?php require('actions/users/signupModels.php') ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <br><br>
    <form class="container" method="POST">

        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" name="pseudo" placeholder="Enter here your username">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="text" class="form-control" name="lastname" placeholder="Enter here your lastname">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Firstname</label>
            <input type="text" class="form-control" name="firstname" placeholder="Enter here your firstname">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="pwd">
        </div>
        <button type="submit" class="btn btn-primary" name="validate">S'incrire</button>
        <br><br>
        <a href="index.php"><p>J'ai déjà un compte, je me connecte</p></a>
    </form>

</body>

</html>