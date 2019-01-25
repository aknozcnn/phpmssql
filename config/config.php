<?php

include(__DIR__ . '/SQL.php');

// Mssql
$host = "DESKTOP-5PAGMNQ\SQLEXPRESS";
$user = "test";
$password = "1";

// Define database
define('database1', 'SRO_VT_ACCOUNT');
define('database2', 'SRO_VT_SHARD');
define('database3', 'SRO_VT_LOG');
define('database4', 'SRO_VT_LOG');
define('database5', 'SRO_WEB');

// Define sv information
define('server_MaxSlots', 1000);
define('server_cap', 100);
define('server_expsp', 150);
define('server_gold', 5);
define('server_job', 10);
define('server_party', 175);
define('server_alchemy', 2);

// Enable/Disable System
// True=Disabled, False=Enable
define('state_register', false);
define('state_login', false);

$cInfo['Host'] = $host;
$cInfo['User'] = $user;
$cInfo['Pass'] = $password;

// For register
define('minLength', 6);
define('maxLength', 12);


define('failedLogins', 5);
define('ticketAmount', 3);

$sql = new SQL($cInfo, true);