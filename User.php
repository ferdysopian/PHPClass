<?php
	require_once('Database.php');

	class User{
		public $id;
		public $email;
		public $username;
		public $password;
		public $konek;

		function user(){
			$this->konek = new Database();
			$this->konek->konek;
		}

		function setId($id){
			$this->id = $id;
		}

		function setEmail($email){
			$this->email = $email;
		}

		function setUsername($username){
			$this->username = $username;
		}

		function setPassword($password){
			$this->password = $password;
		}

		function getId(){
			return $id;
		}

		function getEmail(){
			return $email;
		}

		function getUsername(){
			return $username;
		}

		function getPassword(){
			return $password;
		}

		function showData(){
			echo $this->id;
			echo $this->email;
			echo $this->username;
			echo $this->password;
		}

		function insert(){
			$save = mysqli_query($this->konek->konek, "INSERT INTO user(email, username, password) VALUES('$this->email', '$this->username', '$this->password)");
		}
	}
?>