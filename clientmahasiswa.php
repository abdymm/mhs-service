<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$('#cari').click(function()
		{
			$.getJSON("http://localhost/webservicePHP/mahasiswa.php?format=json&alamat="+$('#alamat').val(),function(data)
			{
				$.each(data.mhs.mahasis, function(i,data){
						var nim = data.nim;
						var nama = data.nama;
						var alamat = data.alamat;
						
						$('#result').append("<p>Nim : "+nim+"<br>Nama : "+nama+"<br>Alamat : "+alamat+"</p>");
				});
			});
		});

		$('#carinim').click(function()
		{
			$.getJSON("http://localhost/webservicePHP/mahasiswa.php?format=json&nim="+$('#nim').val(),function(data)
			{
			
				$.each(data.mhs.mahasis, function(i,data){
						var nim = data.nim;
						var nama = data.nama;
						var alamat = data.alamat;
						
						$('#result').html("<p>Nim : "+nim+"<br>Nama : "+nama+"<br>Alamat : "+alamat+"</p>");
				});
			});
		});
	});
</script>
<h1>
	Program Mencari Data Mahasiswa 
</h1>
<div>
Berdasarkan Alamat :
<br> 
<input type="search" name="alamat" id="alamat" placeholder="Alamat"/><input type="button" value="Cari" id="cari"/>
</div>

<div>
Berdasarkan NIM :
<br> 
<input type="search" name="nim" id="nim" placeholder="Nim"/><input type="button" value="Cari" id="carinim"/>
</div>

<div id="result">
	
</div>