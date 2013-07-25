<?php
class Log extends Doctrine_Record {
	public function setTableDefinition() {
		$this -> hasColumn('user_id', 'varchar',255);	
		$this -> hasColumn('action', 'varchar',255);	
		
		
	}

	public function setUp() {
		$this -> setTableName('log');
		
	}
	
	
	public static function get_active_login($option,$option_id){
		
		switch ($option) {
			case 'county':
		
		$q = Doctrine_Manager::getInstance()->getCurrentConnection();
$result = $q->execute("SELECT DISTINCT  `user_id` , f.facility_name
FROM log l, user u, facilities f, districts d, counties c
WHERE l.user_id = u.id
AND u.facility = f.facility_code
AND f.district = d.id
AND d.county = c.id
AND c.id =$option_id");		
				
				break;
			
			default:
				
				break;
		}
		
	}
}