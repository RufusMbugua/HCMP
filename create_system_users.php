<?php
$ServerConnect_cfm = mysql_connect("localhost","root","") or die ("Problem: Couldn't connect to MySQL Server");
$DatabaseConnection_cfm = mysql_select_db("kemsa2", $ServerConnect_cfm)or die("Problem: Couldn't select the SIMS Database.");

$facility_users_array=array(
1=>array('district'=>188,'county'=>29,'facility_code'=>11254),
2=>array('district'=>188,'county'=>29,'facility_code'=>11436),
3=>array('district'=>189,'county'=>29,'facility_code'=>18431),
4=>array('district'=>189,'county'=>29,'facility_code'=>17233),
5=>array('district'=>190,'county'=>29,'facility_code'=>11520),
6=>array('district'=>190,'county'=>29,'facility_code'=>11592),
7=>array('district'=>191,'county'=>29,'facility_code'=>11303),
8=>array('district'=>191,'county'=>29,'facility_code'=>11679)
);

$district_users_array=array(
1=>array('district'=>188,'county'=>29,'facility_code'=>11254),
2=>array('district'=>189,'county'=>29,'facility_code'=>18431),
3=>array('district'=>190,'county'=>29,'facility_code'=>11520),
4=>array('district'=>191,'county'=>29,'facility_code'=>11679)
);


foreach ($district_users_array as $key => $value) {
$id=9;
	$id=$id+$key;

$sql=("insert into user set fname='District', lname='Admin', email='kariukijackson@gmail.com', username='District$id@hcmp.com',
password='b56578e2f9d28c7497f42b32cbaf7d68',usertype_id='3',telephone='254726534272',district='$value[district]'
");

echo $sql.";";

	
	
	
}


?>
