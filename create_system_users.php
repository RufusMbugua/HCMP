<?php
$ServerConnect_cfm = mysql_connect("localhost","root","") or die ("Problem: Couldn't connect to MySQL Server");
$DatabaseConnection_cfm = mysql_select_db("kemsa2", $ServerConnect_cfm)or die("Problem: Couldn't select the SIMS Database.");

$facility_users_array=array(
1=>array('district'=>151,'county'=>24,'facility_code'=>12191),
2=>array('district'=>152,'county'=>24,'facility_code'=>18596),
3=>array('district'=>153,'county'=>24,'facility_code'=>16961),
4=>array('district'=>154,'county'=>24,'facility_code'=>17290),
5=>array('district'=>155,'county'=>24,'facility_code'=>16958),
6=>array('district'=>156,'county'=>24,'facility_code'=>12135),
7=>array('district'=>157,'county'=>24,'facility_code'=>11994),
8=>array('district'=>158,'county'=>24,'facility_code'=>17241),
8=>array('district'=>159,'county'=>24,'facility_code'=>18171)
);

$district_users_array=array(
1=>array('district'=>151,'county'=>24,'facility_code'=>12191),
2=>array('district'=>152,'county'=>24,'facility_code'=>18596),
3=>array('district'=>153,'county'=>24,'facility_code'=>16961),
4=>array('district'=>154,'county'=>24,'facility_code'=>17290),
5=>array('district'=>155,'county'=>24,'facility_code'=>16958),
6=>array('district'=>156,'county'=>24,'facility_code'=>12135),
7=>array('district'=>157,'county'=>24,'facility_code'=>11994),
8=>array('district'=>158,'county'=>24,'facility_code'=>17241),
8=>array('district'=>159,'county'=>24,'facility_code'=>18171)
);

$setting=array(1=>'Facility',2=>'User',3=>5);

foreach ($facility_users_array as $key => $value) {
$id=17;
	$id=$id+$key;

$sql=("insert into user set fname='$setting[1]', lname='$setting[2]', email='kariukijackson@gmail.com', username='$setting[1]$id@hcmp.com',facility='$value[facility_code]'
,password='b56578e2f9d28c7497f42b32cbaf7d68',usertype_id='$setting[3]',telephone='254726534272',district='$value[district]'
");

echo $sql.";";

	
	
	
}


?>
