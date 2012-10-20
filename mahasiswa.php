<?php

	mysql_connect('localhost','root','') or die('Cannot connect to the DB');
	mysql_select_db('mahasiswaservice') or die('Cannot select the DB');

	if(isset($_GET['alamat']))
	{
		$query = mysql_query("select * from mahasiswa where alamat='$_GET[alamat]'");
		
		$mahasiswa = array();
		while($maha=mysql_fetch_assoc($query))
		{
			$mahasiswa[] = $maha;
			
		}
		
		$parsing=array('mhs' => array('mahasis'=>$mahasiswa));
		header('Content-type: application/json');
		echo json_encode($parsing);
		
	}
	
	
	if(isset($_GET['nim']))
	{
		$query = mysql_query("select * from mahasiswa where nim='$_GET[nim]'");
		
		$mahasiswa = array();
		while($maha=mysql_fetch_assoc($query))
		{
			$mahasiswa[] = $maha;
			
		}
		
		$parsing=array('mhs' => array('mahasis'=>$mahasiswa));
		header('Content-type: application/json');
		echo json_encode($parsing);
		/*
		header('Content-type: text/xml');
		echo '<mahasiswa>';
		foreach($mahasiswa as $index => $post) {
			if(is_array($post)) {
				foreach($post as $key => $value) {
					echo '<',$key,'>';
					if(is_array($value)) {
						foreach($value as $tag => $val) {
							echo '<',$tag,'>',htmlentities($val),'</',$tag,'>';
						}
					}
					echo '</',$key,'>';
				}
			}
		}
		echo '</mahasiswa>';
		*/
	}



?>