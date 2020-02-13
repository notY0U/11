<?php
session_start();
define('DB', DIR.'db/db.json');

define('URL', 'http://localhost/11/bankas1/');

require DIR.'functions/common.php';
require DIR.'functions/msg.php';
require DIR.'functions/helper.php';
require DIR.'functions/validator.php';
require DIR.'functions/auth.php';