<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$('#cari').click(function()
		{
			$.getJSON("http://localhost/webservicePHP/mahasiswa.php?nim="+$('#nim').val(),function(data)
			{
				$.each(data.mahasis, function(i,data){
						var nim = data.mhs.nim;
						var nama = data.mhs.nama;
						var alamat = data.mhs.alamat;
						
						$('#result').html("Nim : "+nim+"<br>Nama : "+nama+"<br>Alamat : "+alamat);
				});
			});
		});
	});
</script>
Program Mencari Data Mahasiswa (Berdasarkan) :
<br> 
<input type="search" name="nim" id="nim"/><input type="button" value="Cari" id="cari"/>

<div id="result">
	
</div>