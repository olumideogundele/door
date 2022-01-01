
<?php
include ("config/DB_config.php"); 
$userT = "";
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


if($userT == 1)
{
	 $query =  "SELECT  `id`, `filepath`, `filename`, `ministry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`,`status`,`registry`   FROM `userfiles` WHERE  `file_type` = 'digital' AND `ministry` != ''  ORDER BY `id` DESC";	
}
else
{
	 $query =  "SELECT  `id`, `filepath`, `filename`, `ministry`, `agency`, `directoryname`, `shelf`, `shelf_cell`, `name`, `file_type`,`status`,`registry`  FROM `userfiles` WHERE (`status` != 0 AND `file_type` = 'digital') AND (`ministry` = '$ministry') ORDER BY `id` DESC";	
	
}
 

 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
		 					$FilePath =$row_distance[1];
						   	$filaname =$row_distance[2];
		 					$ministry =$row_distance[3];
					  	   $agency =$row_distance[4];
						 	$directoryname =$row_distance[5];
					   	 
					 $shelf =$row_distance[6];
		 $shelf_cell =$row_distance[7];
		 					$name =$row_distance[8];
						   	$file_type =$row_distance[9];
		 	$status =$row_distance[10];
		 $registry =$row_distance[11];
		 				 
		
		
		
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
		 
		 
		  $registry = $myName->showName($conn, "SELECT `name`  FROM `mda`  WHERE `id` = '$registry'"); 
 		 $ministry = $myName->showName($conn, "SELECT `name`  FROM `mda`  WHERE `id` = '$ministry'"); 
		 
		 $directoryname = $myName->showName($conn, "SELECT `foldername` FROM `file_directory` WHERE `id` = '$directoryname'"); 
		 $shelf = $myName->showName($conn, "SELECT `name` FROM  `shelf` WHERE `id` = '$shelf'"); 
		 $shelf_cell = $myName->showName($conn, "SELECT `cell_name` FROM `shelf_cells` WHERE `id` = '$shelf_cell'"); 
		 
		 
echo '<tr>
 <td>'.$registry.'</td>
<td>'.$ministry.'</td>
 
<td>'.$shelf.'</td>
<td>'.$shelf_cell.'</td>
<td>'.$directoryname.'</td>
<td> <a href="view-file-information.php?file='.$id.'">'.$name.'</a></td>
 <td> <a href = "file-upload/'.$FilePath.'/'.$filaname.'" download> '.$filaname.'</a> </td>
 <td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
  		   
												 <td>
											 
											 <button class="btn btn-primary btn-icon-anim btn-square"> <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=userfiles&id='.$id.'&columnValue=1&column=status"><i class="icon-like"></i></a></button>
											 <button class="btn btn-primary btn-icon-anim btn-square"><a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=userfiles&id='.$id.'&columnValue=0&column=status"><i class="icon-dislike"></i></a></button>
											 <button class="btn btn-info btn-icon-anim btn-square"><a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=userfiles&del='.$id.'"><i class="icon-trash"></i></a></button>
											 <button class="btn btn-warning btn-icon-anim btn-square"><a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=userfiles&id='.$id.'&columnValue=1&column=status"><i class="icon-rocket"></i></a></button>
												 
													
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>