<?php
/*

--------------------------
Copyright © Tấn Phát-IT 
--------------------------
//Nếu bạn tôn trọng người viết code
//Hãy để lại dòng này !!


*/
date_default_timezone_set("Asia/Ho_Chi_Minh");
define("DB_HOST","localhost");
define("DB_NAME","caosu");
define("DB_USER","root");
define("DB_PWD","");
$currency			= ' đ'; //currency symbol
$shipping_cost		= 0; //shipping cost
$taxes				= array( //List your Taxes percent here.
							'VAT' => 10,
							'Thuế dịch vụ' => 0,
							'Khác' => 0
							);

?>