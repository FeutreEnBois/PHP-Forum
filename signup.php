<?php require('actions/users/signupModels.php') ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <br><br>
    <form class="container" method="POST">

        <?php if (isset($errorMsg)) {
            echo '<p>' . $errorMsg . '</p>';
        } ?>

        <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
            <div class="wrapper wrapper--w680">
                <div class="card card-4">
                    <div class="card-body">
                        <h2 class="title">Registration Form</h2>
                        <form method="POST">
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">First name :</label>
                                        <input class="input--style-4" type="text" name="firstname" placeholder="Enter here your firstname">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Last name :</label>
                                        <input class="input--style-4" type="text" name="lastname" placeholder="Enter here your lastname">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Username :</label>
                                        <input class="input--style-4" type="text" name="pseudo" placeholder="Enter here your username">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Email :</label>
                                        <input class="input--style-4" type="email" name="email" placeholder="Ex: mymail@mail.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password :</label>
                                    <input class="input--style-4" type="password" name="pwd">
                                </div>
                            </div>
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit" name="validate">Submit</button>
                            </div>
                            <div class="p-t-30">
                                <a href="index.php">
                                    <p> I already have an account </p>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--
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

-->
    </form>

</body>

</html>