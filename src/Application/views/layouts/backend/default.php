<?php include(APP."/Views/includes/copyright.txt"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require(APP."/Views/includes/meta.php"); ?>
    <?php require(APP."/Views/includes/style.php"); ?>
</head>
<body>
    <?php require(APP."/Views/includes/menu.php");?>
    <?php echo $pageContent; ?>
    <?php require(APP."/Views/includes/script.php"); ?>
    <?php require(APP."/Views/includes/flash-message.php"); ?>
</body>
</html>
