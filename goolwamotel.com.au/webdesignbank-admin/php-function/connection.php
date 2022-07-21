<?php
class connection
{
	var $host_name="localhost";
	var $user_name="cityreac_user";
	var $password="}_Gz][z6zPZj";
	var $db_name="cityreac_mysqldb"; 
	var $links="";
	
	public function __construct()
	{
		$this->links=mysqli_connect($this->host_name, $this->user_name,$this->password,$this->db_name);
		if(!$this->links)
		{
			echo "Connection Error".mysqli_connect_error();
			exit();
		}
	}
	
	public function __destruct()
	{
		mysqli_close($this->links);
	}
}

$conn_class=new connection();

?>