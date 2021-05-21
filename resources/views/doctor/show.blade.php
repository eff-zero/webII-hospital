@extends('layouts.main')

@section('title')

<div class="container">
    @section('content')
        <div class="container my-5">
            <x-card>
                <x-slot name="colortext"> white </x-slot>
                <x-slot name="width"></x-slot>
                <x-slot name="colorheader"> #117864</x-slot>
    
                <x-slot name="header"> 
                    <h3 class="text-center pt-2"> <strong class="text-uppercase"> lista de pacientes del doctor {{ $doctor->name}}</strong></h3>
                </x-slot>
                <x-slot name="body">
                    <ul class="list-group list-group-flush">
                        @foreach ($doctor->patients as $patient)
                            <li class="list-group-item"> <h4 class="text-center text-monospace"> {{ $patient->name }} </h4> </li>
                        @endforeach         
                    </ul>
                    <hr>
                    <div class="container text-center">
                        <a href="{{ route('doctor.index') }}" class="btn btn-outline-dark "> Volver </a>  
                    </div>                    
                </x-slot>
            </x-card>
        </div>     
    @endsection
</div>