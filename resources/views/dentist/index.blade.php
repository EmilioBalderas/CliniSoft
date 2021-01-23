<?php
$i = 0;
?>
<!DOCTYPE html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


</head>
<body>
@include('navbar')

<div class="container">
    <br>

    <table class="table table-striped" style="background-color: white">
        <thead >
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Crear expediente</th>
            <th scope="col">Ver expedientes</th>
            <th scope="col">Eliminar paciente</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($pacientes as $paciente)
            <?php $i = $i+1 ?>
            <tr>
                <td scope="row">{{$i}}</td>
                <td>{{ $paciente->name }}</td>
                <td>
                    <form method="POST" action="{{ url('medicalRecords/create/'.$paciente->id) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" id='id' value="{{ $paciente->id }}">
                        <button type="submit" class="btn btn-primary">Crear expediente</button>
                    </form>
                </td>
                <td>
                    <form method="GET" action="{{ url('medicalRecords/show/patient/'.$paciente->name) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" id='id' value="{{ $paciente->name }}">
                            <button type="submit" class="btn btn-primary">Ver expedientes</button>
                        </form>
                </td>
                <td>
                    <form method="POST" action="{{ url('patients/delete/'.$paciente->id) }}">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Eliminar paciente</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>

</html>
