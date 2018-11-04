<?php
/*
 * businessopportunity.com API endpoint PHP sample
 * Author: Safeer 
 * Author URI: http://thecodepoetry.com
 */

$secretkey = 'YOURSECRETKEY'; 
if( !empty($_POST && $_POST['secretkey'] == base64_encode($secretkey)) ) {

	//do your logics, security checks, insert to databse etc here
	
	
	//post variables
	//$itemname = strip_tags($_POST['Item_name']);
	//$itemlink = strip_tags($_POST['Item_URL']);
	//$requester_name = strip_tags($_POST['Name']);
	//$requester_email = strip_tags($_POST['Email']);
	//$requester_phone = strip_tags($_POST['Phone']);
	//$requester_address = strip_tags($_POST['Address']);
	//$requester_zip = strip_tags($_POST['Zip']);
	//$capital = strip_tags($_POST['Capital'];
	//$timeframe = strip_tags($_POST['Timeframe']);
	
	
	
	//for confirmation purpose write the revived datas to a text file.
	$myfile = fopen("myleads.txt", "w") or die("Unable to open file!");
	foreach($_POST as $key => $data ) {
		$txt .= "{$key}: {$data} \n";
	}
	fwrite($myfile, $txt);
	fclose($myfile);
	
	//send message back to businessopportunity.com
	echo "OK";
}
?>
