<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".../css/app.css">
    <title>Document</title>
</head>

<body>

    @foreach ($array as $product)
    <img src="{{$product['path']}}" alt="{{$product['title']}}" srcset="">
    {{$product['title']}}
    {{$product['price']}}
    @endforeach

</body>

</html>