<?php
	
	if(isset($_GET['nim']))
	{
		
		mysql_connect('localhost','root','') or die('Cannot connect to the DB');
		mysql_select_db('mahasiswaservice') or die('Cannot select the DB');

		$query = mysql_query("select * from mahasiswa where nim='$_GET[nim]'");
		
		$mahasiswa = array();
		while($maha=mysql_fetch_assoc($query))
		{
			$mahasiswa[] = array('mhs'=>$maha);
			
		}
		
		header('Content-type: application/json');
		echo json_encode(array('mahasis'=>$mahasiswa));
		
	}



?>