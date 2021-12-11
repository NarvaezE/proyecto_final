<?php
  include_once($_SERVER["DOCUMENT_ROOT"]."/api/v1/controllers/User.php");
  $userController = new User(false);
  if(!$userController->isLoggedIn()) {
    header("Location: /");
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/head.php");
  ?>
</head>
<body>
  <?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/header.php");
    include_once($_SERVER["DOCUMENT_ROOT"]."/components/userProfile.php");
    include_once($_SERVER["DOCUMENT_ROOT"]."/components/mapForm.php");
    include_once($_SERVER["DOCUMENT_ROOT"]."/components/logout.php");
    include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/footer.php");
  ?>
</body>
</html>