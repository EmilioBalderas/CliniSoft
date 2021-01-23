<!DOCTYPE html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
@include('navbar')
<br>

<div class="container">


<div class="card">
<h4 class="card-header" >Creando dentista nuevo</h4>
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


    <form method="POST" action="{{ url('dentists/store') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Nombre de usuario:</label>
            <input required autocomplete="off" type="text" class="form-control" name="name" id="name" placeholder="" value="">
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input required autocomplete="off" type="password" class="form-control" name="password" id="password" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="password">mail:</label>
            <input required autocomplete="off" type="text" class="form-control" name="mail" id="mail" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="password">Nombre:</label>
            <input required autocomplete="off" type="text" class="form-control" name="dentistName" id="dentistName" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="password">clinica:</label>
            <input required autocomplete="off" type="text" class="form-control" name="clinic" id="clinic" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="inputState">Especialidad</label>
            <select name="speciality" id="speciality" class="form-control">
                <option>Odontologo</option>
                <option>Protesista</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputState">Servicios</label>
            <select name="services" id="services" class="form-control">
                <option>Protesis</option>
                <option>Ortodoncia</option>
                <option>Endodoncia</option>
                <option>Cirugía maxilofacial</option>
                <option>Implantología</option>
            </select>
        </div>

        <button type="submit" class="btn btn-secondary">Crear dentista </button>

    </form>
</div>
</div>
</div>


</html>
