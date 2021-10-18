<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>address</title>
</head>
<body>
    <h1>address</h1>
    <form  method="post" action="/address">
        @csrf
        <input type="text" name="region" placeholder="region" id="region">
  
        <input type="text" name="city" placeholder="city" id="city">
     

        <input type="text" name="postal_code" placeholder="postal_code" id="postal_code">
   

        <input type="text" name="street" placeholder="street" id="street">
    
        <button type="submit">send</button>
    </form>
  
    <h1>show all address</h1>
    @foreach ($addresses as $address)
      <hr>
        <p> region : {{$address->region}}</p>
        <p> postal code : {{$address->postal_code}}</p>
        <p> street : {{$address->street}}</p>
        <p> City : {{$address->city}}</p>
         <a href="/address/{{$address->id}}">edit</a>
         <form method="post" action="/address/{{$address->id}}">
            @csrf
            @method('delete')
             
             <input type="hidden" value={{$address->id}}>
             <button type="submit">delete</button>
         </form>
    @endforeach
</body>
</html>