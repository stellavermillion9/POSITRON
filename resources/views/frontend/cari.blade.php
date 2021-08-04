<!DOCTYPE html>
<html>
<head>
	<title>Cari Kelompok</title>
</head>
<body>
 
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>

	<h3>Daftar Mahasiswa Baru</h3>
 
 
	<p>Cari Kelompok :</p>
	<form action="cari" method="GET">
		<input type="text" name="cari" placeholder="Masukkan NIM" value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
		
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>Kelompok</th>
			<th>Guardian</th>
		</tr>
		@foreach($data as $d)
		<tr>
			<td>{{ $d->nama }}</td>
			<td>{{ $d->nim }}</td>
			<td>{{ $d->kelompok }}</td>
			<td>{{ $d->pendamping }}</td>
		</tr>
		@endforeach
	</table>
 
	<br/>
 
	{{ $data->links() }}
 
 
</body>
</html>