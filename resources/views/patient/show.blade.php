@extends('layouts.main')
@section('title', 'Pacientes')

<div class="container">
    @section('content')
        <div class="container my-5">
            <x-card>
                <x-slot name="colorheader"> #154360 </x-slot>
                <x-slot name="colortext"> white </x-slot>
                <x-slot name="width"> 30rem </x-slot>
                
                 <x-slot name="header">
                     <h5 class="text-uppercase text-center"> <strong> INFORMACION DEL PACIENTE {{ $patient->name }} </strong> </h5>
                 </x-slot>
    
                 <x-slot name="body">  

                    <div>
                        <h6 class="text-uppercase">
                            historia medica: <br>
                            <small class="text-muted"> {{ $patient->med_history }} </small>
                        </h6>
                    </div> <br>
    
                    <div>
                        <h6 class="text-uppercase">
                            Motivo de consulta: <br>
                            <small class="text-muted"> {{ $patient->reasons }} </small>
                        </h6>
                    </div> <br>
    
                    <div>
                        <h6 class="text-uppercase">
                            DIAGNOSTICO: <br>
                            <small class="text-muted"> {{ $patient->diagnosis }} </small>
                        </h6>
                    </div>

                    <div class="container text-center mt-4">
                        <a href="{{ route('patient.edit', $patient) }}" class="btn btn-outline-dark mx-1"> Editar </a>
                        <a href="{{ route('patient.index') }}" class="btn btn-outline-dark mx-1"> Volver </a>
                    </div>
                 </x-slot>     
            </x-card>

            
        </div>
    @endsection
</div>