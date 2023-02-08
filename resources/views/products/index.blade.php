<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    {{-- here we used the route function to insert the url path for products route --}}
    <a href={{ route('products') }}>Products</a>



    <!-- this double bracket syntax is how we pass in variables from controller to view-->
    {{-- for each loop to turn array into string in p tags--}}
    {{-- @foreach ($data as $item)
        <p>
            {{ $item }}
        </p>
    @endforeach --}}
</body>
</html>