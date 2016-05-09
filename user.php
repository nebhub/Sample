<?php

Class User {
	
	private $users = array(1 => "John", 2 => "Smith");
	
	
	public function getAllUsers(){
		
		
		$response = json_encode( array("status" : "success", "data" = $users) );
		header("Content-Type:". "application/json");
		echo $response
	}
	
	public function getUser($id){
		$response = json_encode( array("status" : "success", "data" = $users[$id]) );
		header("Content-Type:". "application/json");
		echo $response
		
	
	}
	
}
?>