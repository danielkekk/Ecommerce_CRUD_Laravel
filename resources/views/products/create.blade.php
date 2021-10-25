@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product Details</h2>
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
   
<form class="form-horizontal"  action="{{ route('products.store') }}" method="POST">
    @csrf

     <div class="form-group">
         <label class="col-sm-2 control-label">Name:</label>
         <div class="col-sm-10">
             <input type="text" name="name" class="form-control" placeholder="Name" />
         </div>
     </div>

     <div class="form-group">
         <label class="col-sm-2 control-label">Description:</label>
         <div class="col-sm-10">
             <input type="text" name="description" class="form-control" placeholder="Description"/>
         </div>
     </div>

     <div class="form-group">
         <label class="col-sm-2 control-label">Type:</label>
         <div class="col-sm-10">
             <input type="text" name="type" class="form-control" placeholder="Type"/>
         </div>
     </div>

     <div class="form-group">
         <label class="col-sm-2 control-label">Category:</label>
         <div class="col-sm-10">
             <input type="text" name="category" class="form-control" placeholder="Category"/>
         </div>
     </div>

     <div class="form-group">
         <label class="col-sm-2 control-label">Price:</label>
         <div class="col-sm-10">
             <input type="text" name="price" class="form-control" placeholder="Price"/>
         </div>
     </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Amount:</label>
        <div class="col-sm-10">
            <input type="number" name="amount" class="form-control" placeholder="Amount"/>
        </div>
    </div>

     <div class="form-group">
         <div class="col-sm-2">
             <button type="submit" class="btn btn-primary">Save</button>
         </div>
     </div>

</form>
@endsection