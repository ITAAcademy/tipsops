<?php
session_start();
setcookie('username', $username, time()-1);
unset($_SESSION['username']);

echo "
<meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'>
";

?>