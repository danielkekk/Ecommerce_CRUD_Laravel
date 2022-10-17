@extends('users.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit User Details</h2>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form class="form-horizontal"  action="{{ route('users.store') }}" method="POST">
    @csrf

     <div class="form-group">
         <label class="col-sm-2 control-label">Name:</label>
         <div class="col-sm-10">
             <input type="text" name="name" class="form-control" placeholder="Name" />
         </div>
     </div>

     <div class="form-group">
         <label class="col-sm-2 control-label">Email:</label>
         <div class="col-sm-10">
             <input type="text" name="email" class="form-control" placeholder="Email"/>
         </div>
     </div>

     <div class="form-group">
         <div class="col-sm-2">
             <button type="submit" class="btn btn-primary">Save</button>
         </div>
     </div>

</form>
@endsection