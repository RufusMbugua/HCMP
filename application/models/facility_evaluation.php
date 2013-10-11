<?php
class Facility_Evaluation extends Doctrine_Record {
	public function setTableDefinition() {
		$this -> hasColumn('id', 'int',11);
		$this -> hasColumn('facility_code','int', 11);
		$this -> hasColumn('fhead_no','int', 11);
		$this -> hasColumn('fdep_no','int', 11);
		$this -> hasColumn('nurse_no','int', 11);
		$this -> hasColumn('sman_no','int', 11)	;
		$this -> hasColumn('ptech_no','int', 11);
		$this -> hasColumn('trainer','varchar', 50);
		$this -> hasColumn('comp_avail','int', 11);
		$this -> hasColumn('modem_avail','int', 11);
		$this -> hasColumn('bundles_avail','int', 11);
		$this -> hasColumn('manuals_avail','int', 11);
		$this -> hasColumn('satisfaction_lvl','int', 11);
		$this -> hasColumn('agreed_time','int', 11);
		$this -> hasColumn('feedback','int', 11);
		$this -> hasColumn('pharm_supervision','int', 11);
		$this -> hasColumn('coord_supervision','int', 11);
		$this -> hasColumn('req_id','int', 11);
		$this -> hasColumn('req_spec','varchar', 150);
		$this -> hasColumn('req_addr','int', 11);
		$this -> hasColumn('train_remarks','varchar', 150);
		$this -> hasColumn('train_recommend','int', 11);
		$this -> hasColumn('train_useful','int', 11);
		$this -> hasColumn('comf_issue','int', 11);
		$this -> hasColumn('comf_order','int', 11);
		$this -> hasColumn('comf_update','int', 11);
		$this -> hasColumn('comf_gen','int', 11);
		$this -> hasColumn('use_freq','int', 11);
		$this -> hasColumn('freq_spec','int', 11);
		$this -> hasColumn('improvement','int', 11);
		$this -> hasColumn('ease_of_use','int', 11);
		$this -> hasColumn('meet_expect','int', 11);
		$this -> hasColumn('expect_suggest','varchar', 150);
		$this -> hasColumn('retrain','int', 11);
		$this -> hasColumn('assessor','int', 11);
		$this -> hasColumn('date','date');
}
public function setUp() {
		$this -> setTableName('facility_evaluation');		
	}
	
public static function getAll($facility_code,$user_id=null) {
	
	    isset($user_id)? 
	    $query = Doctrine_Query::create() -> select("*") -> from("facility_evaluation")-> where("facility_code=$facility_code and assessor=$user_id"):
		$query = Doctrine_Query::create() -> select("*") -> from("facility_evaluation")-> where("facility_code=$facility_code");
		
		$level = $query -> execute();
		return $level;
	}
public static function save_facility_evaluation($data_array){
	
	    $facility_code=$data_array['facility_code'];
		$user_id=$data_array['assessor'];
		
	    $query = Doctrine_Query::create() -> select("*") -> from("facility_evaluation")-> where("facility_code=$facility_code and assessor=$user_id");
		$level = $query -> execute();
	    
		if(count($level)==0):
			
		$o = new Facility_Evaluation ();
	    $o->fromArray($data_array);
		$o->save();	
			
		return "saved ";
		
		else:
		
		$query="update facility_evaluation set";
			
			foreach($data_array as $key=> $value):
				
		    $query .="`$key`='$value',";	
				
			endforeach;
			
		$query=substr($query,0,-1);
		
		$query .="where facility_code=$facility_code and assessor=$user_id";
		
	  $inserttransaction1 = Doctrine_Manager::getInstance()->
      getCurrentConnection()
      ->execute("$query");
		
		return "updated";	
		endif;
	}
}