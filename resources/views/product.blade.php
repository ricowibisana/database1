<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #20 : Eloquent Laravel</title>
</head>
<body>

<h1>Data Produk</h1>

<ul>
	@foreach($product as $p)
		<li>{{ "Nama : ". $p->nama . ' | Product : ' . $p->product }}</li>
	@endforeach
</ul>

</body>
</html>