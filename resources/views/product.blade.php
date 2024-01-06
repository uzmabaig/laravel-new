<h2>Product Detail</h2>

@foreach ($data as $id => $products)
   <h4>Id: {{$products->id}}</h4>
   <h4>Name: {{$products->name}}</h4>
    <h4>Price: {{$products->price}}</h4>
    
@endforeach