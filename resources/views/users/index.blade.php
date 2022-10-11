@extends('users.layout')
 
@section('content')
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

	@if($users->count() > 0)
		<h2>All Products</h2>
		<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Created</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			@foreach ($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->created_at }}</td>

					<td><a href="{{ route('users.edit',$user->id) }}" class="btn btn-default">Edit</a></td>
					<td>
						<form action="{{ route('users.destroy',$user->id) }}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger show_confirm">Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
		</table>
		<script src="{{ URL::to('/assets/js/delete_confirmation.js') }}"></script>
	@endif
  
	{!! $users->links() !!}
      
@endsection