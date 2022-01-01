 
<?php
include ("config/DB_config.php"); 
$active= "active";

$userT = "";
$usernameT = "";
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
	   $userT = $_SESSION['usertype'] ;
 }
 $ministry = "";

if(isset($_SESSION['ministry'] ))
{
$ministry = $_SESSION['ministry'] ;	
	
}
$query = "";

$value = "";


if($userT == 1)
{
	$file = $_GET['value'];
	 
	
	 $query =  "SELECT  `id`, `FilePath`, `filename`, `registry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`,`status` , `filesize`, `filecode`, `submitted_by`, `group_code` FROM `userfiles` WHERE  `directoryname` = '$file'   ORDER BY `id` DESC";	
}
else
{
	$file = $_GET['value'];
	 
	 $query =  "SELECT  `id`, `FilePath`, `filename`, `registry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`,`status`, `filesize`, `filecode`, `submitted_by`, `group_code`  FROM `userfiles` WHERE  `directoryname` = '$file'  AND (status = 1 or status = 4) ORDER BY `id` DESC";	
	
}
 






 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$id4 =$row_distance[0];
		 					$filepath =$row_distance[1];
						   	$filename =$row_distance[2];
		 					$ministry =$row_distance[3];
					  	   $agency =$row_distance[4];
						 	$directoryname =$row_distance[5];
					   	 
					 $shelf =$row_distance[6];
		 $shelf_cell =$row_distance[7];
		 					$name =$row_distance[8];
						   	$file_type =$row_distance[9];
		 	$status =$row_distance[10];
		 	  	$filesize =$row_distance[11];
						   	$filecode =$row_distance[12];
						   	$submitted_by =$row_distance[13];			 
						   	$group_code =$row_distance[14];			 
		
		
		
 $statusCSS = "";
$statusParam = "";
if($status == 1)
{
 $statusCSS = "badge badge-success m-b-5";
$statusParam = "Active";
}			
else  if($status == 0)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Not Active";
}
 	
		 $usernameT = $myName->showName($conn, "SELECT  `username` FROM `document_access` WHERE  `username` = '$emailing' AND (`code` = '$filecode' OR `code` = '$group_code')"); 
		 
		 
	 
		 
		 
		  $comment = $myName->showName($conn, "SELECT `comment` FROM `document_access` WHERE `username` = '$emailing' AND `code` = '$filecode'"); 
		 
		 
		 
		 $ministry = $myName->showName($conn, "SELECT `name`  FROM `mda`  WHERE `id` = '$ministry'"); 
		
		 $directoryname = $myName->showName($conn, "SELECT `foldername` FROM `file_directory` WHERE `id` = '$directoryname'"); 
		 $shelf = $myName->showName($conn, "SELECT `name` FROM  `shelf` WHERE `id` = '$shelf'"); 
		 $shelf_cell = $myName->showName($conn, "SELECT `cell_name` FROM `shelf_cells` WHERE `id` = '$shelf_cell'"); 
		 $name_cell = $myName->showName($conn, "SELECT `name` FROM `user_unit` WHERE `account_number` = '$emailing'"); 
		 
	
		 $rights = $myName->showName($conn, "SELECT `rights` FROM  `privilege` WHERE `account_number` = '$emailing'"); 
		 $values1 = "";
		 if($rights == "download" or $userT == 1)
		 {
			 $values1 .='<a onClick="return confirm(\'Are you sure you want to download?\')" href="download.php?file='.$filename.'&filecode='.$filecode.'"  class="btn btn-primary waves-effect waves-light m-1"> <i class="fa fa-download"></i></a>';
			 
			 
		 }
		 else
		 {
			  $values1 .='<a onClick="return confirm(\'Are you sure you want to request?\')" href="file-request-digital.php"  class="btn btn-primary waves-effect waves-light m-1"> <i class="fa fa-level-up""></i> <span> Request File </span></a>';
			 
		 }
		   $print = '<button type="button" class="btn btn-primary waves-effect waves-light m-1"  onclick="printDiv(\'printableArea\')" value="print"> <i class="fa fa-print"></i> </button>';
		 
		 
		if($usernameT == $emailing)
		{
			/*$value.=' 
		 <div id="printableArea">
                       <img class="d-block w-100" src="https://'.$_SERVER['HTTP_HOST'].'/requipro/'.$filepath.'/'.$filename.'" alt="'.$name.'" >
					 </div>
                      <div class="carousel-caption  gradient-quepal" style = "background:red;">
                        <h3 class="text-white">'.$name.'</h3>
                     
                       <p>'. $values1 .' '.$print .'</p>
                      </div>   
                     ';
			*/
			
			
			
			 
			 
			 
			 
			  
			 			  
				   $fileName = $filename;
 
$file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
//echo ($file_ext); 
		 
		 $images = "-------";
		 
		 
		 if($file_ext == "jpg" or $file_ext == "png" or $file_ext == "gif")
		 {
			 
			$value .= '<div class="cta" style="padding: 5px; margin: 0 auto;">
     <img src="http://'.$_SERVER['HTTP_HOST'].'/requipro/uploads/'.$fileName  .'" width = "100%" height = "100%"> 
    </div>' ;
			 
			 
			 
			 
			 
			 
		 }
				  else{
					
					  $value .= '<iframe src="uploads/'.$fileName  .'" style="overflow:hidden;height:1100px;width:100%" height="1100px" width="100%"r>
                    Your browser does not support inline frames.
                </iframe>';
					  
					  
				  }  
			
			 
	 
			 $active = "";
		}
		 else if($userT == 1)
		 {
			 
			 
			 
			 
			  
			 			  
				   $fileName = $filename;
 
$file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
//echo ($file_ext); 
		 
		 $images = "-------";
		 
		 
		 if($file_ext == "jpg" or $file_ext == "png" or $file_ext == "gif")
		 {
			 
			$value .= '<div class="cta" style="padding: 5px; margin: 0 auto;">
     <img src="http://'.$_SERVER['HTTP_HOST'].'/requipro/uploads/'.$fileName  .'" width = "100%" height = "100%"> 
    </div>' ;
			 
			 
			 
			 
			 
			 
		 }
				  else{
					
					  $value .= '<iframe src="uploads/'.$fileName  .'" style="overflow:hidden;height:1100px;width:100%" height="1100px" width="100%"r>
                    Your browser does not support inline frames.
                </iframe>';
					  
					  
				  }  
			 
		 }
		 else{
			 
			 	$value.=' 
		 <div id="printableArea">
                        
					 </div>
                      <div class="carousel-caption  gradient-quepal" style = "background:red;">
                        <h3 class="text-white">You are not allowed to view this file</h3>
                     
                    
                      </div>   
                     ';
			 			  
		 }
		 
		
	 
}
 
						  
				 	
				 
			 
					}
else
{
	
	///echo '<meta http-equiv="Refresh" content="0; url= all-my-accessed-files.php"> ';
}
		   
	 echo $value;
?>


<script>
 window.printDiv = function printDiv(printableArea) {
   
 var printContents = document.getElementById("printableArea").innerHTML;
 popup = window.open();
 popup.document.body.insertAdjacentHTML("beforeend", printContents);
 popup.focus(); //for IE
 popup.print()
}
</script>