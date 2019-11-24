<?php

	class Customer{

		private $db;
		

		public function __construct(){
		$this->db = new Database;

		}

		public function addCustomer($data){
		
		
			//Prepare Query
			$this->db->query('INSERT INTO customers(id,first_name,last_name,email)VALUES(:id,:first_name,:last_name,:email)');

			//Bind values
			$this->db->bind(':id',$data['id']);
			$this->db->bind(':first_name',$data['first_name']);
			$this->db->bind(':last_name',$data['last_name']);
			$this->db->bind(':email',$data['email']);

			//Execute
			if($this->db->execute()){
			//echo "<script>console.log("si se conecto")</script>"
		
				return true;
			}else{
			//echo "<script>console.log("no se conecto")</script>"
		
				return false;
			}

		}




	}
?>