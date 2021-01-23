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
<table class="table ">
    <thead >
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre del paciente</th>
        <th scope="col">Hora</th>
        <th scope="col">Servicio</th>
        <th scope="col">Cancelar</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($appointments as $appointment)
        <?php $i = $i+1 ?>
        <tr>
            <td scope="row">{{$i}}</td>
            <td>{{ $appointment->PatientName }}</td>
            <td>{{ $appointment->hour }}</td>
            <td>{{ $appointment->service }}</td>
            <td>
            <form method="POST" action="{{ url('appointments/delete/'.$appointment->id) }}">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-secondary">Eliminar Cita</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<form method="GET" action="{{ '/dentists' }}">
    <button type="submit" class="btn btn-secondary">Volver</button>
</form>
</div>
</body>

</html>
