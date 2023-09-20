<?php 
 class myClass
 {
 		protected $code = null;
 		protected $con = null;
 		protected $dbconn = null;
 		public function myclass()
 	{  
 		$this->dbconn = @new mysqli("localhost","root","","db_book");
 		if (mysqli_connect_errno()) 
	 	{
 		printf("Error: found: %s\n Please Ask for Your Administrator!",mysqli_connect_error());
 		exit();
 		}
 		return $this->dbconn;
 	}
 				public function entitiesHtml($code)
 	{
 		return htmlentities($code, ENT_QUOTES,'UTF-8');
 	}
 	public function escape_string($code)
 	{
 		$code = @trim($code);
 		if(get_magic_quotes_gpc())
 		{
 			$str = stripcslashes($codes);
 		}
 			return mysqli_real_escape_string($this->dbconn,$code);
 	}
 		public function closeCon()
 		{
 			mysqli_close($code);
 		}
 	}
 	$function = new myClass;
 ?>