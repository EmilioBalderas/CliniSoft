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
        <th scope="col">Doctor</th>
        <th scope="col">Paciente</th>
        <th scope="col">Fecha de creación </th>
        <th scope="col">Modificar expediente</th>
        <th scope="col">Eliminar expediente</th>
        <th scope="col">Ver expediente</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($expedientes as $expediente)
        <?php $i = $i+1 ?>
        <tr>
            <td scope="row">{{$i}}</td>
            <td>{{ $expediente->dentistName }}</td>
            <td>{{ $expediente->patientName }}</td>
            <td>{{ $expediente->creationDate }}</td>
            <td>
                <form method="POST" action="{{ url('medicalRecords/edit/'.$expediente->id) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" id='id' value="{{ $expediente->id }}">
                    <button type="submit" class="btn btn-secondary">Modificar expediente</button>
                </form>
            </td>
            <td>
                <form method="POST" action="{{ url('medicalRecords/delete/'.$expediente->id) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" id='id' value="{{ $expediente->patientName }}">
                    <button type="submit" class="btn btn-secondary">Eliminar expediente</button>
                </form>
            </td>
            <td>
                <form method="GET" action="{{ url('medicalRecords/show/'.$expediente->id) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" id='id' value="{{ $expediente->patientName }}">
                    <button type="submit" class="btn btn-secondary">Ver expediente</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>>
</body>

</html>
