<!DOCTYPE html>
<html>
<head>
<title>Buku</title>
</head>
<body>
    <h2>Agus Dwi S P</h2>
    <h3>Buku</h3>
    <a href="/export"> Export Excel </a>
    <table border="1">
<tr>
<th>Id Buku</th>
<th>Judul Buku</th>
<th>Tahun Terbit</th>
</tr>
@foreach($buku as $p)
    <tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->judul }}</td>
    <td>{{ $p->tahun_terbit}}</td>
    </tr>
@endforeach
</table>
</body>
</html>