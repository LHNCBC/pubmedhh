<?php
function db_connect($db_name) {
  if (gethostname() == "lhc-lx-stage.nlm.nih.gov") {
    $db_host = 'localhost';
    $db_user = 'pubweb';
    $db_pass = 'pub4proj@ebm';
  } else {
    $db_host = getenv('MYSQL_HOST');
    $db_user = getenv('MYSQL_USER');
    $db_pass = getenv('MYSQL_PASS');
  }
  //error_log("<br><h3>Connecting to MySQL database using host '".$db_host."' and user '".$db_user."'.</h3><br>", 0);
  $db_object = @mysqli_connect($db_host, $db_user, $db_pass);
  if (!$db_object) die('Cannot connect to MySQL database: ' . mysqli_connect_error());
  mysqli_select_db($db_object, $db_name) or die("Could not select database: ".mysqli_error());
	return $db_object;
}
?>
