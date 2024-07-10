<?php
// Database environment everywhere.
if (gethostname() == ("lhc-lx-stage.nlm.nih.gov" || "lhc-lx-stage-swap.nlm.nih.gov")) {
  $db_host = 'localhost';
  $db_user = 'pubweb';
  $db_pass = 'pub4proj@ebm';
} else {
  $db_host = getenv('MYSQL_HOST');
  $db_user = getenv('MYSQL_USER');
  $db_pass = getenv('MYSQL_PASS');
}
?>
