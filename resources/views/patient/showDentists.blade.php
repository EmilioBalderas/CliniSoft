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
        <th scope="col">Servicios</th>
        <th scope="col">Agendar</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($doctors as $doctor)
        <?php $i = $i+1 ?>
        <tr>
            <td scope="row">{{$i}}</td>
            <td>{{ $doctor->name }}</td>
            <td>{{ $doctor->services }}</td>
            <td>
                <form method="POST" action="{{ url('appointments/create/'.$doctor->id) }}">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-secondary">Agendar cita</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
</body>

</html>
