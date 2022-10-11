<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <title>Laravel 8 CRUD Application - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::to('/assets/css/style.css') }}" />
</head>
<body>

<div class="container">
    <div class="header">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('home.index') }}">Home</a>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('users.index') }}">Users</a></li>
                        <li><a href="{{ route('products.index') }}">Products List</a></li>
                        <li><a href="{{ route('products.create') }}">Create Product</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron">
            <div class="row text-center">
                <div class="row">
                    <h2>Spring MVC Crud Application</h2>
                </div>
            </div>
            <div class="row text-center">
                <img src="{{ URL::to('/assets/images/Pivotal_Java_Spring_Logo.png') }}" width="30%"/>
            </div>
        </div>

    </div>
</div>
  
<div class="container">
    @yield('content')
</div>
   
</body>
</html>