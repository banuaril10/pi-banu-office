<?php

	$html = $_POST['html'];
	$html .= '\r\n'; 
	$html .= '\r\n'; 
	$html .= '\r\n'; 
	$html .= '\r\n'; 
	$html .= '\r\n'; 
	$html .= '\r\n'; 
	
	$cmd='';
    $cmd='echo "'.$html.'" | lpr -o raw'; //linux

    $child = shell_exec($cmd); 
	
	$data = array("result"=>1, "msg"=>$child);
		
	$json_string = json_encode($data);	
	echo $json_string;

?>