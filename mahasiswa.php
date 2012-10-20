<?php

	mysql_connect('localhost','root','') or die('Cannot connect to the DB');
	mysql_select_db('mahasiswaservice') or die('Cannot select the DB');
	
	$json = $_GET['format'];
	if(isset($_GET['alamat']))
	{
		$query = mysql_query("select * from mahasiswa where alamat='$_GET[alamat]'");
		
		$mahasiswa = array();
		while($maha=mysql_fetch_assoc($query))
		{
			$mahasiswa[] = $maha;
			
		}
		
		if($json != '')
		{
		$parsing=array('mhs' => array('mahasis'=>$mahasiswa));
		header('Content-type: application/json');
		echo json_encode($parsing);
		}
		else
		{
			header('Content-type: text/xml');
			echo '<data>';
			foreach($mahasiswa as $index => $post) {
			echo '<mahasiswa>';
				if(is_array($post)) {
					foreach($post as $key => $value) {
						echo '<',$key,'>';
						echo $value;
						/*
						if(is_array($value)) {
							foreach($value as $tag => $val) {
								echo '<',$tag,'>',htmlentities($val),'</',$tag,'>';
							}
						}
						*/
						echo '</',$key,'>';
					}
				}
			echo '</mahasiswa>';
			}
			echo '</data>';
			
		}
	}
	
	
	if(isset($_GET['nim']))
	{
		$query = mysql_query("select * from mahasiswa where nim='$_GET[nim]'");
		
		$mahasiswa = array();
		while($maha=mysql_fetch_assoc($query))
		{
			$mahasiswa[] = $maha;
			
		}
		if($json != '')
		{
		$parsing=array('mhs' => array('mahasis'=>$mahasiswa));
		header('Content-type: application/json');
		echo json_encode($parsing);
		}
		else
		{
			header('Content-type: text/xml');
			echo '<data>';
			echo '<mahasiswa>';
			foreach($mahasiswa as $index => $post) {
				if(is_array($post)) {
					foreach($post as $key => $value) {
						echo '<',$key,'>';
						echo $value;
						/*
						if(is_array($value)) {
							foreach($value as $tag => $val) {
								echo '<',$tag,'>',htmlentities($val),'</',$tag,'>';
							}
						}
						*/
						echo '</',$key,'>';
					}
				}
			}
			echo '</mahasiswa>';
			echo '</data>';
			
		}
	}



?>