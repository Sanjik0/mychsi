<?php 

require ('modules/db.php');
require ('components/header.php'); 

unset($_SESSION['logged_user']);
header('Location: index.php');

require('components/footer.php');
?>