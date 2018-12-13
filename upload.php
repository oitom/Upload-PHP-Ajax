<?php 
	$legend = $_REQUEST['legend'];

	if(0 < $_FILES['file']['error']) 
		$data = json_encode(array("code"=> 0, "response"=> $_FILES['file']['error']));
	else {
		$file = $_FILES['file']['tmp_name'];
		$name_tmp = explode('.', $_FILES['file']['name']);
		$name = $name_tmp[0].'-'.date('dmyhis').'.'.$name_tmp[1];
		$filepath = 'uploads/'.$name;
		
		if(move_uploaded_file($file, $filepath))
			echo json_encode(array("code"=> 1, "response"=> $filepath));
		else 
			echo json_encode(array("code"=> 0, "response"=> "Error upload!"));
	}
?>