@extends('products.layout')
 
@section('content')
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

	@if($products->count() > 0)
		<h2>All Products</h2>
		<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Description</th>
				<th>Category</th>
				<th>Price</th>
				<th>Amount</th>
				<th>Unit</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			@foreach ($products as $product)
				<tr>
					<td>{{ $product->id }}</td>
					<td>{{ $product->name }}</td>
					<td>{{ $product->description }}</td>
					<td>{{ $product->category->name }}</td>
					<td>{{ $product->price }}</td>
					<td>{{ $product->amount }}</td>
					<td>{{ $product->unit->unit }}</td>

					<td><a href="{{ route('products.edit',$product->id) }}" class="btn btn-default">Edit</a></td>
					<td>
						<form action="{{ route('products.destroy',$product->id) }}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
		</table>
	@endif
  
	{!! $products->links() !!}
      
@endsection