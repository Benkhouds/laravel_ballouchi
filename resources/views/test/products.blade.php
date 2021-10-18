<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>products</h1>
    @foreach ($products as $product)
    <hr>
        <p> name : {{$product->label}}</p>
        <p> description : {{$product->description}}</p>
        <p> price : {{$product->price}}</p>
        <p> inventory : {{$product->inventory}}</p>
    
    
     <form action="/addToCartItem" method="post">
        @csrf
         <input name="product_id" type="hidden" value="{{$product->id}}"  >
         <input type="number" name="quantity" placeholder="quantity">
         <button type="submit">add to cart</button>
     </form>
        <hr>
    @endforeach
</body>
</html>