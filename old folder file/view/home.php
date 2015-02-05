<!DOCTYPE html>
<html>
<head>
<title>MVC PHP </title>
</head>
<body>
<table>
	<tr><td>Title</td><td>Category</td><td>Description</td></tr>
	<?php 

		foreach ($homes as $title => $produk)
		{
			echo '<tr><td><a href="?produk='.$produk->title.'">'.$produk->title.'</a></td><td>'.$produk->category.'</td><td>'.$produk->description.'</td></tr>';
		}

	?>
</table>

</body>
</html>