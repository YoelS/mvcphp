<html>
<head>
<title><?=$produk->title?> | MVC PHP</title>
</head>

<body>

<?php 

	echo 'Title:' . $produk->title . '<br/>';
	echo 'Category:' . $produk->category . '<br/>';
	echo 'Description:' . $produk->description . '<br/>';

?>
<br />
<a href="/mvcphp">Back To Home</a>
</body>
</html>