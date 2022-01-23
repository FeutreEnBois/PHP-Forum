<?php require('actions/users/loginModels.php') ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <br><br>
    <form class="container" method="POST">

        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>

        <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Log in</h2>
                    <form method="POST">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username :</label>
                                    <input class="input--style-4" type="text" name="pseudo">
                                </div>
                            </div>                      
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password :</label>
                                    <input class="input--style-4" type="password" name="pwd">
                                </div>
                            </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="validate">Connect</button>
                        </div>
                        <div class="p-t-30">
                            <a href="signup.php"> <p> I don't have an account </p> </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


        <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Log in</h2>
                    <form method="POST">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username :</label>
                                    <input class="input--style-4" type="text" name="pseudo">
                                </div>
                            </div>                      
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password :</label>
                                    <input class="input--style-4" type="password" name="pwd">
                                </div>
                            </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="validate">Connect</button>
                        </div>
                        <div class="p-t-30">
                            <a href="signup.php"> <p> I don't have an account </p> </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>

</body>
</html>