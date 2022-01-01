<?php 
 $result = array();
$img = str_replace('image/png;base64,', '',$_POST['img src']);
	$imagedata = base64_decode($img);
	$filename = md5(date("d"));
	//Location to where you want to created sign image
	$file_name = './doc_signs/'.$filename.'.jpg';
	 file_put_contents($file_name,$imagedata);
	//file_put_contents("file.png" ,file_get_contents("data://".$imagedata));
	$result['status'] = 1;
	$result['file_name'] = $file_name ;
	echo json_encode($result); 
 

 


?>
<?php
 
$img = $_POST['img src'];
 $filename = md5(date("d"));
 $img = str_replace('image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = $filename;
$success = file_put_contents($file, $data);




echo '<img src="'. $img .'" />';
 
?>