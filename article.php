<?php
session_start();
require('actions/questions/showArticleContentAction.php');
require('actions/questions/postAnswerAction.php');
require('actions/questions/showAllAnswersOfQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>

    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">


        <?php
        if (isset($errorMsg)) {
            echo $errorMsg;
        }


        if (isset($question_publication_date)) {
        ?>
            <section class="show-content">
                <h3 class="nav-title m-l-45"><?= $question_title; ?></h3>
                <div class="wrapper wrapper--75p">
                    <div class="card card-4">
                        <div class="card-body">
                            <p><?= $question_content; ?></p>
                            <hr>
                            <small><?= '<a href="profile.php?id=' . $question_id_author . '">' . $question_pseudo_author . '</a> ' . $question_publication_date; ?></small>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section>

                <form class="form-group" method="POST">
                    <div class="wrapper wrapper--w780 p-t-30 height-wrap">
                        <div class="card card-4 bg-blue">
                            <div class="card-body-TB p-t-15">
                                <label for="exampleInputEmail1" class="nav-title-b m-l-45">Answers :</label> <br>
                                <div class="p-t-20">
                                    <textarea name="answer" class="txtareas m-l-45"></textarea>
                                </div>
                                <br>
                                <div class="p-b-30">
                                    <button class="btn btn--blue m-l-45" type="submit" name="validate">Answer</button>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
    </form>

    <?php
            while ($answer = $getAllAnswersOfThisQuestion->fetch()) {
    ?>
        <div class="card card-4">
            <div class="card-body">
                <a href="profile.php?id=<?= $answer['id_auteur']; ?>" class="title">
                    <?= $answer['pseudo_auteur']; ?>
                </a>
            </div>
            <div class="card-body">
                <p> <?= $answer['contenu']; ?> </p>
            </div>
        </div>
        <br>
    <?php
            }
    ?>

    </section>

<?php
        }
?>

</div>

</body>

</html>