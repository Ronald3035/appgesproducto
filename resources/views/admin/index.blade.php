
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
</head>
<body>
<h1>LISTA DE PRODUCTOS</h1>
                    @foreach($producto as $prod)
	
						<p>code:{{$prod->code}}</p>
						<p>name:{{$prod->name}}</p>
						<p>precio:{{$prod->price}}</p>
                  
					<hr>
                    @endforeach
			
		
</body>
</html>
					