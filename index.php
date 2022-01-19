<?php 
    session_start();
    require('actions/questions/showAllQuestionsAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <label class="nav-title m-l-45">Forum</label>
        <form method="GET">
            <div class="row p-t-30 m-l-45">
                <div>
                    <input type="search" name="search" class="input--style-4" placeholder="Type what you want">
                </div>
                <div class="m-l-45">
                    <button class="btn btn--radius-2 btn--blue" type="submit">Rechercher</button>
                </div>
            </div>
        </form>
        <br>
        <div class="wrapper wrapper--w960 p-t-20">
            <?php 
                while($question = $getAllQuestions->fetch()){
            ?>
            <div class="card card-4">
                <div class="card-body">
                    <a href="article.php?id=<?= $question['id']; ?>" class="title">
                        <?= $question['title']; ?>
                        question titre
                    </a>
                    <div class="p-t-30">
                        <?= $question['description']; ?>
                        description
                    </div>
                        <div class="p-t-20">
                            Publish by <a href="profile.php?id=<?= $question['id_auteur']; ?>"><?= $question['pseudo_auteur']; ?></a> le <?= $question['date_publication']; ?>
                        </div>
                </div>
            </div>
            <br>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>