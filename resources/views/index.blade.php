<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    
<style>
 


    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
    <ul>
        <li><a class="active" href="#home">Home</a></li>
      
        
    <li  href="{{route('cart')}}" style="float:right"><a href="so" >Cart</a></li>
      </ul>
      
@foreach ($books->chunk(1) as $booksChunk)
@foreach ($booksChunk as $books)
<div class="card">
    <img src="{{ $books->imagePath }}" style="width:100%">
    <h1>{{ $books->title}}</h1>
<p class="price">{{$books->price}}$</p>
    <p>{{ $books->description}}</p>
<a href="{{route('add', ['id'=>$books->id])}}"><button>Add to Cart</button></a>
  </div>
@endforeach

@endforeach



</body>
</html>