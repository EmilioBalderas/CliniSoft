<!DOCTYPE html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
@include('navbar')
<div class="container">

    @foreach ($pacientes as $paciente)
        <div class="card">
            <h4 class="card-header">Nuevo expediente de: {{ $paciente->name }} </h4>
            <div class="card-body">
                <form method="POST" action="{{ url('medicalRecords/store') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Doctor:</label>
                        <input type="text" class="form-control" name="doctor" id="doctor" placeholder="" value="{{Auth::user()->dentistName}}">
                    </div>

                    <div class="form-group">
                        <label for="name">Paciente:</label>
                        <input type="text" class="form-control" name="patient" id="patient" placeholder="" value="{{ $paciente->patientName }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Telefono:</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="" value="{{ $paciente->phone }}">
                    </div>

                    <div class="form-group">
                        <label for="name">Sexo:</label>
                        <input type="text" class="form-control" name="sex" id="sex" placeholder="" value="{{ $paciente->sex }}">
                    </div>

                    <div class="form-group">
                        <label for="name">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="" value="{{ $paciente->birthdate }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Alergias:</label>
                        <input type="text" class="form-control" name="alergies" id="alergies" placeholder="" value="">
                    </div>

                    <div class="form-group">
                        <label for="name">Padecimientos:</label>
                        <input type="text" class="form-control" name="sickness" id="sickness" placeholder="" value="">
                    </div>
                    <div class="form-group">
                        <label for="name">Observaciones:</label>
                        <input type="text" class="form-control" name="observaciones" id="observaciones" placeholder="" value="">
                    </div>

                    <div class="form-group">
                        <label for="name">Plan de tratamiento:</label>
                        <input type="text" class="form-control" name="plan" id="plan" placeholder="" value="">
                    </div>
                    <button type="submit" class="btn btn-secondary">Crear expediente </button>

                </form>
            </div>
        </div>
</div>

    @endforeach


</body>

</html>
