
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
       <h1>One address</h1>
    <form  method="post" action="/address">
        {{-- @method('put/patch') --}}
        @csrf
        <input type="text" name="region" placeholder="region" id="region" value={{$address->region}}>
  
        <input type="text" name="city" placeholder="city" id="city" value={{$address->city}}>
     

        <input type="text" name="postal_code" placeholder="postal_code" id="postal_code" value={{$address->postal_code}}>
   

        <input type="text" name="street" placeholder="street" id="street" value={{$address->street}}> 
    
        <button type="submit">update</button>
    </form>
</body>
</html>