@extends('layouts.main')
@section('title', 'Pacientes')

<div class="container">
            
    @section('content')
        <div class="container text-center pt-3">
            <a href="{{ route('patient.create') }}" class="btn btn-outline-dark btn-lg btn-block text-uppercase"> Registrar Nuevo Paciente </a>
        </div>   
            <div class="row">
                @foreach ($patients as $patient) 
                        <div class="col-12 text-center p-5 col-lg-4">
                            <x-card>
                                <x-slot name="colorheader"> #154360 </x-slot>
                                <x-slot name="colortext"> white </x-slot>
                                <x-slot name="width"> 30rem </x-slot>
            
                                <x-slot name="header">
                                    <h5 class="text-uppercase text-center"> <strong> {{ $patient->name }} </strong> </h5>
                                </x-slot>
                                <x-slot name="body">
            
                                    <!-- ATRIBUTOS -->
                                    <ul class="list-unstyled">
                                        <li class="py-1"><strong> Direccion: <small>{{ $patient->adress }}</small></strong></li>    
                                        <li class="py-1"><strong> EPS: <small>{{ $patient->eps }}</small></strong></li>
                                        <li class="py-1"><strong> Acompañante: <small>{{ $patient->comp_name }}</small></strong></li>
                                        <li class="py-1"><strong> Tel. Acompañante: <small>{{ $patient->comp_phone }}</small></strong></strong></li>
                                        <li class="py-1"><strong> ¿Posible COVID?: <small>{{ $patient->covid ? 'SI' : 'NO'}}</small></strong></strong></li>
                                    </ul> <hr>

                                    <!-- BOTONES --> 
                                    <div class="container text-center">
                                        <a href="{{ route('patient.show', $patient) }}" class="btn btn-outline-dark m-2 col-md-4 col-sm-12   "> Ver Diagnostico </a> 
                                        
                                        <form action="{{ route('patient.destroy' , $patient) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            {{-- <a href="" class="btn btn-outline-dark m-2 col-md-4 col-sm-12 {{ count($hospitals) ? '' : 'disabled' }}"    > Eliminar </a> --}}
                                            <button class="btn btn-outline-dark m-2 col-md-4 col-sm-12"> Eliminar </button>
                                        </form>                                          
                                    </div>
                                    
                                </x-slot>
                            </x-card> 
                        </div>                 
                @endforeach 
            </div>
    @endsection

</div>
