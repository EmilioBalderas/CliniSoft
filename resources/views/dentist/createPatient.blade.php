<!DOCTYPE html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
@include('navbar')
<div class="container">
<div class="card">
    <h4 class="card-header" >Creando paciente nuevo</h4>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif


        <form method="POST" action="{{ url('patients/store') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Nombre de usuario:</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="" value="">
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="" value="">
            </div>

            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="" value="">
            </div>
            <div class="form-group">
                <label for="phone">Telefono:</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="" value="">
            </div>
            <div class="form-group">
                <label for="sex">Sexo:</label>
                <input type="text" class="form-control" name="sex" id="sex" placeholder="" value="">
            </div>
            <div class="form-group">
                <label for="birthdate">Fecha de nacimiento:</label>
                <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="" value="">
            </div>

            <button type="submit" class="btn btn-secondary">Guardar paciente </button>

        </form>
    </div>
</div>
</div>>

</html>
