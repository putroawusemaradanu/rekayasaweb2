<h1>Daftar Tokohp</h1>
<p><a href="{{ url('home') }}">Home</a></p>
<table border="1">
<tr>
<th>Id</th>
<th>Merk</th>
<th>Tipe</th>
<th>Harga</th>
</tr>
@foreach($query as $row)
<tr>
<td>{{ $row['id'] }}</td>
<td>{{ $row['merk'] }}</td>
<td>{{ $row['tipe'] }}</td>
<td>{{ $row['harga'] }}</td>
</tr>
@endforeach
</