@insert($product)
@foreach ($products as $product)
<h4>Product name: {{$product->name}}</h4>
<h4>Product Description: {{$product->Description}}</h4>
<h4>Product price: {{$product->price}}</h4>
<h4>Product status: {{$product->status}}</h4>

<hr>
@endforeach
@endisset