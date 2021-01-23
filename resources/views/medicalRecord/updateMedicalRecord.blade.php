<!DOCTYPE html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
@include('navbar')
<div class="container">
@foreach ($expedientes as $expediente)
    <div class="card">
        <h4 class="card-header">Modificando expediente de: {{ $expediente->patientName }} </h4>
        <div class="card-body">
            <form method="POST" action="{{ url('medicalRecords/update/'.$expediente->id) }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Doctor:</label>
                    <input type="text" class="form-control" name="doctor" id="doctor" placeholder="" value="{{ $expediente->dentistName }}">
                </div>

                <div class="form-group">
                    <label for="name">Paciente:</label>
                    <input type="text" class="form-control" name="patient" id="patient" placeholder="" value="{{ $expediente->patientName }}">
                </div>
                <div class="form-group">
                    <label for="name">Telefono:</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="" value="{{ $expediente->phone }}">
                </div>

                <div class="form-group">
                    <label for="name">Sexo:</label>
                    <input type="text" class="form-control" name="sex" id="sex" placeholder="" value="{{ $expediente->sex }}">
                </div>

                <div class="form-group">
                    <label for="name">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="" value="{{ $expediente->birthdate }}">
                </div>
                <div class="form-group">
                    <label for="name">Alergias:</label>
                    <input type="text" class="form-control" name="alergies" id="alergies" placeholder="" value="{{ $expediente->alergies }}">
                </div>

                <div class="form-group">
                    <label for="name">Padecimientos:</label>
                    <input type="text" class="form-control" name="sickness" id="sickness" placeholder="" value="{{ $expediente->sickness }}">
                </div>
                <div class="form-group">
                    <label for="name">Observaciones:</label>
                    <input type="text" class="form-control" name="observaciones" id="observaciones" placeholder="" value="{{ $expediente->observaciones }}">
                </div>

                <div class="form-group">
                    <label for="name">Plan de tratamiento:</label>
                    <input type="text" class="form-control" name="plan" id="plan" placeholder="" value="{{ $expediente->plan }}">
                </div>
                <input type="hidden" class="form-control" name="creationDate" id="creationDate" placeholder="" value="{{ $expediente->creationDate }}">
                <button type="submit" class="btn btn-secondary">Actualizar expediente </button>

            </form>
        </div>
    </div>

@endforeach

</div>
</body>

</html>
