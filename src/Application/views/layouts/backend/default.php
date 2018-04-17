<?php use StorageAdmin\Util\PageManager; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require(APP."/Views/includes/meta.php"); ?>
    <?php require(APP."/Views/includes/style.php"); ?>
    <!--<script src="assets/js/lib/turbolinks.js"></script>
    <script> Turbolinks.start(); </script>-->

    <?php echo PageManager::getMeta(); ?>
    <title><?php echo PageManager::getTitle(); ?></title>
</head>
<body>
    <?php require(APP."/Views/includes/menu.php");?>
    <?php echo $page_content; ?>
    <?php require(APP."/Views/includes/script.php"); ?>
    <?php require(APP."/Views/includes/flash-message.php"); ?>
</body>
</html>
