<?php
/*
 * --------------------------------------------------------------------
 * LOAD THE CUSTOM FILE CONFIGURATIONS
 * --------------------------------------------------------------------
 *
 */
// configure enviroment / set true if it is in live server
$PRODUCTION = true;
define('PRODUCTION', $PRODUCTION);

$BASE_URL = (PRODUCTION) ? "https://internshala-project1.herokuapp.com" : "http://localhost/nazish/blood_bank";

define('BASE_URL', $BASE_URL);



/**
 * Configuration for database
 */
$HOSTNAME = (PRODUCTION) ? "sql12.freemysqlhosting.net" : "localhost";
$USERNAME = (PRODUCTION) ? "sql12380200" : "root";
$PASSWORD = (PRODUCTION) ? "ssmJ2XfQbw" : "root";
$DATABASE = (PRODUCTION) ? "sql12380200" : "blood_bank";
$PREFIX   = (PRODUCTION) ? "bb_" : "bb_";

define('HOSTNAME', $HOSTNAME);
define('USERNAME', $USERNAME);
define('PASSWORD', $PASSWORD);
define('DATABASE', $DATABASE);
define('PREFIX'  , $PREFIX);

define('MAINTENANCE_MODE', false);
define('ENCRYPTION_KEY', '');

define('EMAIL_API', '');


?>
