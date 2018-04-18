<?php include(APP."/Views/includes/copyright.txt"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require(APP."/Views/includes/meta.php"); ?>
    <?php require(APP."/Views/includes/style.php"); ?>
    <title><?= $pageName ?></title>
</head>
<body>
    <main>
        <?php echo $pageContent; ?>
    </main>
    <?php require(APP."/Views/includes/script.php"); ?>
    <?php require(APP."/Views/includes/flash-message.php"); ?>
</body>
</html>
