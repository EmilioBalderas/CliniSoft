<!DOCTYPE html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
@include('navbar')
<div class="container">
<div class="card">
    <h4 class="card-header" >Crear cita con {{$data[1]->name}}</h4>
    <div class="card-body">
        <form method="POST" action="{{ url('appointments/store') }}">
            {{ csrf_field() }}

            <input type="hidden" class="form-control" name="doctorID" id="doctorID" placeholder="" value="{{ $data[1]->id}}">

            <div class="form-group">
                <label for="name">Nombre del paciente:</label>
                <input type="text" class="form-control" name="patientName" id="patientName" placeholder="" value="">
            </div>


            <div class="form-group">
                <label for="inputState">Horarios</label>
                <select name="shedule" id="shedule" class="form-control">
                    @foreach ($data[0] as $appointment)
                        <option>{{$appointment->hour}}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label for="inputState">Servicio</label>
                <select name="service" id="service" class="form-control">

                        <?php
                        $services = explode(',',$data[1]->services);
                        ?>

                    @foreach ($services as $service)
                        <option>{{$service}}</option>
                    @endforeach

                </select>
            </div>


            <button type="submit" class="btn btn-secondary">Guardar paciente </button>

        </form>
    </div>
</div>
</div>

</html>
