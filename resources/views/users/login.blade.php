<!DOCTYPE html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
@include('navbar')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif
<body>
<div class="container">
<div class="card">
    <h4 class="card-header">Iniciar sesión</h4>
    <div class="card-body">
        <form method="POST" action="{{ url('users/session') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Nombre de usuario:</label>
                <input autocomplete="off" type="text" class="form-control" name="name" id="name" placeholder="" value="">
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input autocomplete="off" type="password" class="form-control" name="password" id="password" placeholder="" value="">
            </div>

            <button type="submit" class="btn btn-secondary">Iniciar sesión </button>

        </form>
    </div>
</div>
</div>
</body>

</html>
