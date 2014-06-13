<?php
require_once("../master/config/config.php");
?>
<?php
session_destroy();
header("Location: /admin/login.php");
?>