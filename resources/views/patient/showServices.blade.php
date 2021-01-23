<!DOCTYPE html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
@include('navbar')
<div class="container">
    <div class="card">
        <h4 class="card-header">Lista de servicios </h4>
        <div class="card-body">
            <div class="card">
                <h4 class="card-header">Protesis</h4>
                <div class="card-body">
                <p>Mantenimiento de lugar</p>
                </div>
            </div>

            <div class="card">
                <h4 class="card-header">Ortodoncia</h4>
                <div class="card-body">
                    <p>Mantenimiento de lugar</p>
                </div>
            </div>

            <div class="card">
                <h4 class="card-header">Endodoncia</h4>
                <div class="card-body">
                    <p>Mantenimiento de lugar</p>
                </div>
            </div>

            <div class="card">
                <h4 class="card-header">Cirugía maxilofacial</h4>
                <div class="card-body">
                    <p>Mantenimiento de lugar</p>
                </div>
            </div>

            <div class="card">
                <h4 class="card-header">Implantología </h4>
                <div class="card-body">
                    <p>Mantenimiento de lugar</p>
                </div>
            </div>

        </div>

        <form method="get" action="{{ url('appointments') }}">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">Agendar cita</button>
        </form>
    </div>

</div>
