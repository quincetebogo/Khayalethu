<?php

function checkUser($userIDNo)
{
    $userIDNo = sanitize($userIDNo);
    $query = mysql_query("SELECT count(`st_IDnum`) FROM `tbl_student` WHERE `st_IDnum` = '$userIDNo'");
    return(mysql_result($query,0)? true: false);
}

function checkEmail($userEmail)
{
	$userEmail = sanitize($userEmail);
	$emailQuery = mysql_query("SELECT count(`st_username`) FROM `tbl_student` WHERE `st_username` = '$userEmail'");
	return(mysql_result($emailQuery,0)? true: false);
}

function registerUsers($registerUser)
{
	array_walk($registerUser, 'array_sanitize');
	$fields = '`'.implode('`,`', array_keys($registerUser)). '`';
	$data = '\''.implode('\', \'', $registerUser).'\'';
	mysql_query("INSERT INTO `tbl_student` ($fields) values($data)");
}

function userLogin($username, $password)
{
	
	return (mysql_result(mysql_query("SELECT `st_username` FROM `tbl_student` WHERE `st_username` = '$username' AND `st_password` = '$password'"),0)? true: false) or die(mysql_error());
   
}

function logged_in()
{
	return (isset($_SESSION['username']))? true: false or die(mysql_error());

}

function studentStatus($username)
{

	return(mysql_result(mysql_query("SELECT `st_status` FROM `tbl_student` WHERE `st_username` = '$username'"),0));

}

function getName($username)
{

	return(mysql_result(mysql_query("SELECT `st_firstName` FROM `tbl_student` WHERE `st_username` = '$username'"), 0));
}

function getAnnouncements()
{

	$query = mysql_query("SELECT * FROM `tbl_announcement`");


			$row =  mysql_fetch_assoc($query);
			$n = 0;
			$type = array(array());
			while($row = mysql_fetch_array($query))
			{
				//echo $n++ .' '.$row['ann_message'].'<br/> <br/> ';
				
				$type[$n][0] = $row['ann_announceID'];
				$type[$n][1] = $row['ann_message'];
				$type[$n][2] = $row['ann_announceDate'];
				$n++;
			}
			return $type;
		}

function userProfile($username)
{



$query = mysql_query("SELECT  tbl_student.st_IDNum,  tbl_student.st_firstName ,  tbl_student.st_lastName ,  
tbl_student.st_gender ,  tbl_student.st_address ,  tbl_student.st_contactNo , tbl_student.st_nationality , 
 tbl_resident.res_refNumber ,  tbl_resroom.rm_roomNumber ,  tbl_resroom.resrm_occupationdate , 
 tbl_room.rnt_RoomType , tbl_student.st_username FROM  tbl_student , tbl_resident , tbl_resroom ,  tbl_room 
WHERE  tbl_student.st_IDNum  =  tbl_resident.st_IDnum 
AND  tbl_resident.res_RefNumber  =  tbl_resroom.res_refNumber 
AND  tbl_room.rm_roomNumber  =  tbl_resroom.rm_RoomNumber 
AND  tbl_student.st_username  = '$username'");

return(mysql_fetch_assoc($query));

}

function changeRooms($refNum, $motivation,$roomType, $roomNumber)
{	
		
	$query = mysql_query("SELECT count(`res_refNumber`) FROM `tbl_changeroom` WHERE `ch_status` IS NULL") or die(mysql_error());

	$date = date('y-m-d');
	if(mysql_result($query,0) == 0)
	{
	mysql_query("INSERT INTO `tbl_changeroom` (`res_refNumber`, `ch_motivation`, `ch_roomType`, `rm_roomNumber`, `ch_applicationDate`) values ('$refNum', '$motivation', '$roomType', '$roomNumber','$date')") or die(mysql_error());
	echo "<script> alert('Your application has been recieved and will be processed when space is availble');
			window.location.href = 'ResidentHome.php';
			</script>";
	}
	else 
	{
		echo "<script> alert('You have already made an application.Therefore you cannot make another one until the current application is processed');
			window.location.href = 'ResidentHome.php';
			</script>";
	}

}

function getFinancialRecords($username, $date)
{

	if($date == '0')
	{

	$query  = mysql_query("SELECT * FROM `tbl_payment` WHERE `res_refNumber` = '$username'") or die(mysql_error());
	}
	else
	{
		$query  = mysql_query("SELECT * FROM `tbl_payment` WHERE `res_refNumber` = '$username' AND datediff(CURDATE(), `pm_date`) < '$date'") or die(mysql_error());
	}

	
			$n = 0;
			$type =  array(array());
			
			while($row = mysql_fetch_assoc($query))
			{
				
				$type[$n][0] = $row['pm_depNo'];
				$type[$n][1] = $row['pm_date'];
				$type[$n][2] = $row['pm_amount'];
				$type[$n][3] = $row['pm_paymentType'];
				$type[$n][4] = $row['pm_paymentMethod'];
					
				$n++;
						
			}

		
		
	return $type;	

}


function lodgeComplaint($description, $details, $floorNumber, $refNumber, $date)
{

	mysql_query("INSERT INTO `tbl_complaint` (`comp_description`, `comp_details`, `comp_floorNumber`, `res_refNumber`, `comp_date`, `comp_status`) 
		values ('$description', '$details', '$floorNumber', '$refNumber', '$date', 'NULL')");

}
 

function asideProfile()
{

			$z =  userProfile($_SESSION['Uname']);
			$a = 0;
			$b = array();
			foreach ($z as $key => $value) 
			{

				$b[$a] = $value;
				$a++;
					# code...
			}	


	echo '<fieldset style= " border: solid; text-align: left; width: 80%; margin-left: 15%; top: 10%" >
			<legend >
				
				<img src="images\user.png" style = "width: 100px; height: 100px; border-radius: 50%; top:-38%; left: calc(40%); position: absolute; overflow: hidden">
			
			</legend>
			<border>
		
					<div class = "txtAlign">';
				
			echo '<strong>Name : </strong>'.$b[1].'<br/'.
			'<strong>Surname : </strong>'.$b[2].'<br/>'.
			'<strong>Gender : </strong>'.$b[3].'<br/>'.
			'<strong>ID Number : </strong>'.$b[0].'<br/>'.
			'<strong>Address : </strong>'.$b[4].'<br/>'.
			'<strong>Contact No : </strong>'.$b[5].'<br/>'.
			'<strong>Nationality : </strong>'.$b[6].'<br/>'.
			'<strong>Ref Number : </strong>'.$b[7].'<br/>'.
			'<strong>Current Room Number : </strong>'.$b[8].'<br/>'.
			'<strong>Current Room Type : </strong>'.$b[10].'<br/>'.
			'<strong>Occupation Date : </strong>'.$b[9].'<br/>'.'</div>
		</border>
		</fieldset>';


}

function updateProfile($idNum, $address, $contactNo,$email)
{

	mysql_query("UPDATE `tbl_student` SET `st_username` = '$email', `st_address` = '$address', `st_contactNo` = '$contactNo' WHERE `st_IDnum` = '$idNum'") or die(mysql_error());

}

function verifyAdmin($username, $password)
{
		return (mysql_result(mysql_query("SELECT `adm_username` FROM `tbl_admin` WHERE `adm_username` = '$username' AND `adm_password` = '$password'"),0)? true: false);

}

function logAdmin()
{
	return(mysql_query("UPDATE `tbl_admin` SET `logged_in` = 1"));
}

function logOutAdmin()
{
	return(mysql_query("UPDATE `tbl_admin` SET `logged_in` = 0"));
}

function postAnnouncements($message, $date)
{

	mysql_query("INSERT INTO `tbl_Announcement` (`ann_Message`, `ann_announceDate`) VALUES ('$message', '$date')");

}

function allResidents()
{

$xArray = array(array());
$a  = 0;
$query = mysql_query ("SELECT a.res_refNumber, b.st_firstName, b.st_lastName
FROM tbl_resident a, tbl_student b WHERE a.st_idNum = b.st_idNum") or die(mysql_error());


while($row = mysql_fetch_assoc($query))
{
	$xArray[$a][0] = $row['res_refNumber'];
	$xArray[$a][1] = $row['st_firstName'];
	$xArray[$a][2] = $row['st_lastName'];

	$a++;

}


return $xArray;
}


function getResidentID($refNumber)
{

$xArray = array(array());
$a  = 0;
$query = mysql_query ("SELECT a.st_idnum , a.res_refNumber, b.st_firstName, b.st_lastName, c.resrm_occupationdate
FROM tbl_resident a, tbl_student b, tbl_resroom c WHERE a.st_idNum = b.st_idNum AND a.res_refNumber = '$refNumber'") or die(mysql_error());


while($row = mysql_fetch_assoc($query))
{
	$xArray[$a][0] = $row['st_idnum'];
	$xArray[$a][1] = $row['res_refNumber'];
	$xArray[$a][2] = $row['st_firstName'];
	$xArray[$a][3] = $row['st_lastName'];
	$xArray[$a][4] = $row['resrm_occupationdate'];
	


	$a++;

}


return $xArray;
}

function recordPayments($date,$amount,$refNumber,$type,$method)
{
		mysql_query("INSERT INTO `tbl_payment` (`pm_date`, `pm_amount`, `res_refNumber`, `pm_paymentType`, `pm_paymentMethod`) VALUES ('$date','$amount','$refNumber','$type','$method')") or die(mysql_error());

}

function deleteAnnouncements($announceID)
{
	mysql_query("DELETE FROM `tbl_Announcement` WHERE `ann_announceID` = '$announceID'") or die(mysql_error());


}


function getComplaints($description)
{
		$xArray = array(array());
        $a  = 0;
        if($description == 'Repairs' OR $description == 'Noise' OR $description == 'Maintenance' OR $description == 'General' )
        {
		$query = mysql_query ("SELECT `comp_complaintID`, `comp_description`, `comp_details`, `comp_floorNumber`, `comp_status`, `res_refNumber`, `comp_date`
		FROM `tbl_complaint` 
		WHERE `comp_status` =  'NULL'
		AND `comp_description` = '$description'
		ORDER BY `comp_date` DESC, `comp_floorNumber` ASC ,`comp_complaintID` DESC") or die(mysql_error());
		}
		else
		{
			$query = mysql_query ("SELECT `comp_complaintID`, `comp_description`, `comp_details`, `comp_floorNumber`, `comp_status`, `res_refNumber`, `comp_date`
		FROM `tbl_complaint` 
		WHERE `comp_status` =  'NULL'
		ORDER BY `comp_date` DESC, `comp_floorNumber` ASC ,`comp_complaintID` DESC
		") or die(mysql_error());

		}


while($row = mysql_fetch_assoc($query))
{
	$xArray[$a][0] = $row['comp_complaintID'];
	$xArray[$a][1] = $row['comp_description'];
	$xArray[$a][2] = $row['comp_details'];
	$xArray[$a][3] = $row['comp_floorNumber'];
	$xArray[$a][4] = $row['comp_status'];
	$xArray[$a][5] = $row['res_refNumber'];
	$xArray[$a][6] = $row['comp_date'];


	$a++;

}


return $xArray;


}


function attendComplaints($compID, $status)
{
	mysql_query("UPDATE `tbl_complaint` SET `comp_status` = '$status' WHERE `comp_complaintID` = '$compID'") or die(mysql_error());

}

function processApplications($idNum, $statuses, $room)
{
	if($statuses == "Approved")
	{
   mysql_query("CALL proc_approveRequest ('$idNum','$statuses','$room')") or die(mysql_error());
	}
	else 
	{
		mysql_query("UPDATE `tbl_student` SET `st_status` = '$statuses' WHERE `st_IDnum` = '$idNum'") or die(mysql_error());
	}

}

function getallStudents($result)
{
	$a = 0;
	$details = array(array());
	$query = mysql_query("SELECT * FROM `tbl_student` WHERE `st_status` = '$result'")or die(mysql_error());

	while ($row = mysql_fetch_assoc($query)) 
	{
		$details[$a][0] = $row['st_IDnum'];
		$details[$a][1] = $row['st_pic'];
		$details[$a][2] = $row['st_firstName'];
		$details[$a][3] = $row['st_lastName'];
		$details[$a][4] = $row['st_Gender'];
		$details[$a][5] = $row['st_address'];
		$details[$a][6] = $row['st_contactNo'];
		$details[$a][7] = $row['st_dateOfBirth'];
		$details[$a][8] = $row['st_nationality'];
		$details[$a][9] = $row['st_username'];
		$details[$a][10] = $row['st_applicationDate'];
		$details[$a][11] = $row['st_status'];
		$details[$a][12] = $row['rnt_roomType'];
		$a++;
	}

return $details;
}


function getSingleStudent($idNum)
{
	$a = 0;
	$details = array(array());
	$query = mysql_query("SELECT * FROM `tbl_student` WHERE `st_status` LIKE 'Waiting List' AND `st_idNum` = '$idNum'")or die(mysql_error());

	while ($row = mysql_fetch_assoc($query)) 
	{
		$details[$a][0] = $row['st_IDnum'];
		$details[$a][1] = $row['st_pic'];
		$details[$a][2] = $row['st_firstName'];
		$details[$a][3] = $row['st_lastName'];
		$details[$a][4] = $row['st_Gender'];
		$details[$a][5] = $row['st_address'];
		$details[$a][6] = $row['st_contactNo'];
		$details[$a][7] = $row['st_dateOfBirth'];
		$details[$a][8] = $row['st_nationality'];
		$details[$a][9] = $row['st_username'];
		$details[$a][10] = $row['st_applicationDate'];
		$details[$a][11] = $row['st_status'];
		$details[$a][12] = $row['rnt_roomType'];
		$a++;
	}

return $details;
}

function getAvailableRoom($roomType)
{
	$a = 0;
	$roomData = array(array());
	$query = mysql_query("SELECT * FROM `tbl_room` WHERE `rm_status` = 'Available' AND `rnt_roomType` = '$roomType'");

	while($row =  mysql_fetch_assoc($query))
	{
		$roomData[$a][0] = $row['rm_roomNumber'];
		$roomData[$a][1] = $row['rnt_roomType'];
		$roomData[$a][2] = $row['rm_status'];
		$a++;
	}
	return $roomData;
}

function getChangeRoomApplications()
{
	$a = 0;
	$details = array(array());
	$query = mysql_query("SELECT * FROM `tbl_changeroom` WHERE `ch_status` IS NULL AND `ch_newRoom` IS NULL");

	while($row = mysql_fetch_assoc($query))
	{
		$details[$a][0] = $row['ch_status'];
		$details[$a][1] = $row['res_refNumber'];  
		$details[$a][2] = $row['ch_motivation'];
		$details[$a][3] = $row['ch_roomType'];
		$details[$a][4] = $row['rm_roomNumber'];
		$details[$a][5] = $row['ch_applicationDate'];
		$a++;
	}

	return $details;

}

function getgetChangeRoomData($refNum)
{
	$a = 0;
	$details = array(array());
	$query = mysql_query("SELECT * FROM `tbl_changeroom` WHERE `res_refNumber` = '$refNum' AND `ch_status` IS NULL AND `ch_newRoom` IS NULL");

	while($row = mysql_fetch_assoc($query))
	{
		$details[$a][0] = $row['ch_status'];
		$details[$a][1] = $row['res_refNumber'];  
		$details[$a][2] = $row['ch_motivation'];
		$details[$a][3] = $row['ch_roomType'];
		$details[$a][4] = $row['rm_roomNumber'];
		$details[$a][5] = $row['ch_applicationDate'];
		$a++;
	}

	return $details;
}


function processChangeRoom($refNum, $status, $newRoom)
{
	mysql_query("CALL proc_approveRoom ('$refNum','$status','$newRoom')") or die(mysql_error());
	
}

function getResidentProfile($username)
{
$a = 0;
$details = array(array());
$query = mysql_query("SELECT tbl_student.*, tbl_resident.*, tbl_resroom.*, tbl_room.*  FROM  tbl_student , tbl_resident , tbl_resroom ,  tbl_room 
WHERE  tbl_student.st_IDNum  =  tbl_resident.st_IDnum 
AND  tbl_resident.res_RefNumber  =  tbl_resroom.res_refNumber 
AND  tbl_room.rm_roomNumber  =  tbl_resroom.rm_RoomNumber 
AND  tbl_student.st_idnum  = '$username'");


while ($row = mysql_fetch_assoc($query)) 
	{
		$details[$a][0] = $row['st_IDnum'];
		$details[$a][1] = $row['st_pic'];
		$details[$a][2] = $row['st_firstName'];
		$details[$a][3] = $row['st_lastName'];
		$details[$a][4] = $row['st_Gender'];
		$details[$a][5] = $row['st_address'];
		$details[$a][6] = $row['st_contactNo'];
		$details[$a][7] = $row['st_dateOfBirth'];
		$details[$a][8] = $row['st_nationality'];
		$details[$a][9] = $row['st_username'];
		$details[$a][10] = $row['st_applicationDate'];
		$details[$a][11] = $row['st_status'];
		$details[$a][12] = $row['res_refNumber'];
		$details[$a][13] = $row['rm_roomNumber'];
		$details[$a][14] = $row['resrm_occupationDate'];
		$details[$a][15] = $row['rnt_roomType'];


		$a++;
	}

return($details);
}


function signOut($idNumber)
{
	mysql_query("CALL proc_delStudent('$idNumber')") or die(mysql_error());

}




?>