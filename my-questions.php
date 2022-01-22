<?php 
    require('actions/users/securityModels.php');
    require('actions/questions/myQuestionsAction.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--75p p-t-20">
            <?php 
                while($question = $getAllMyQuestions->fetch()){
            ?>
            <div class="card card-4">
                <div class="card-body">
                    <form method="POST">
                        <a href="article.php?id=<?= $question['id']; ?>" class="title">
                            <?= $question['title']; ?>
                        </a>
                        <div class="p-t-20">
                            <p>
                                <?= $question['description']; ?>
                            </p>
                        </div>
                        <div class="p-t-20">
                            <a href="article.php?id=<?= $question['id']; ?>" class="btn btn--radius-2 btn--green">Go to the question</a>
                            <a href="edit-question.php?id=<?= $question['id']; ?>" class="btn btn--radius-2 btn--blue">Edit question</a>
                            <a href="actions/questions/deleteQuestionModels.php?id=<?= $question['id']; ?>" class="btn btn--radius-2 btn--red">Delete question</a>
                        </div>
                    </form>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>

</body>
</html>