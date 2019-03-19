<?php
	if(!isset($_SESSION)){
		session_start();
	}
	
	//mysql
	$db_user='root';
	$db_pass='';
	$db_host='localhost';
	$db_database='swapoter';
	if(@mysql_connect($db_host,$db_user,$db_pass)){
		$conoff=true;
	}else{
		$conoff=false;
	}
	if(@mysql_select_db($db_database)){
		$dboff=true;
	}else{
		$dboff=false;
	}
	
	function tglindo($date){
		$tgl=date('d',strtotime($date));
		$bln=date('n',strtotime($date));
		$thn=date('Y',strtotime($date));
		if($bln==1) return "$tgl Januari $thn";
		else if($bln==2) return "$tgl Februari $thn";
		else if($bln==3) return "$tgl Maret $thn";
		else if($bln==4) return "$tgl April $thn";
		else if($bln==5) return "$tgl Mei $thn";
		else if($bln==6) return "$tgl Juni $thn";
		else if($bln==7) return "$tgl Juli $thn";
		else if($bln==8) return "$tgl Agustus $thn";
		else if($bln==9) return "$tgl September $thn";
		else if($bln==10) return "$tgl Oktober $thn";
		else if($bln==11) return "$tgl Nopember $thn";
		else if($bln==12) return "$tgl Desember $thn";
		else return 'Error';
	}
	
	function amankan($str){
		foreach($str as &$val){
			$val=trim(strip_tags(stripslashes(mysql_real_escape_string($val))));
		}
		return $str;
	}
	
	function get_ip() {
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}
	
	function getmac(){
		$q=exec('getmac /fo csv /v | find "Local Area Connection"');
		if(empty($q)){
			$q=exec('getmac /fo csv /v | find "Ethernet"');
		}
		$q=str_replace('"','',$q);
		$q=str_replace('-',':',$q);
		$q=explode(',',$q);
		return $q[2];
	}
	
	function getpin(){
		$mac=getmac();
		return filter_var($mac,FILTER_SANITIZE_NUMBER_INT);
	}
	
	function cekserver() {
		$header_check = get_headers("http://betangcs.com");
		$response_code = $header_check[0];
		return $response_code;
	}
?>