@extends('layouts.main')
@section('title', 'Doctores')



<div class="container">
            
    @section('content')
        <div class="container text-center pt-3">
            <a href="{{ route('doctor.create') }}" class="btn btn-outline-dark btn-lg btn-block"> Registrar nuevo doctor </a>
        </div>   
            <div class="row">
                @foreach ($doctors as $doctor) 
                        <div class="col-12 text-center p-5 col-lg-4">
                            <x-card>
                                <x-slot name="colorheader"> #117864 </x-slot>
                                <x-slot name="colortext"> white </x-slot>
                                <x-slot name="width"> 30rem </x-slot>
            
                                <x-slot name="header">
                                    <h5 class="text-uppercase text-center"> <strong> {{ $doctor->name }} </strong> </h5>
                                </x-slot>
                                <x-slot name="body">
            
                                    <!-- ATRIBUTOS -->
                                    <ul class="list-unstyled">
                                        <li class="py-1"><strong> Direccion: <small>{{ $doctor->adress }}</small></strong></li>
                                        <li class="py-1"><strong> Telefono: <small>{{ $doctor->phone }}</small></strong></li>
                                        <li class="py-1"><strong> Sangre: <small>{{ $doctor->type_blood }}</small></strong></li>
                                        <li class="py-1"><strong> Naciminento: <small>{{ $doctor->date }}</small></strong></li>
                                        <li class="py-1"><strong> Experiencia: <small>{{ $doctor->years_exp }}</small></strong></strong></li>
                                    </ul> <hr>

                                    <!-- BOTONES --> 
                                    <div class="container text-center">
                                        <a href="{{ route('doctor.show', $doctor) }}" class="btn btn-outline-dark m-2 col-md-4 col-sm-12   "> Pacientes </a> 
                                        <a href="{{ route('doctor.edit', $doctor) }}" class="btn btn-outline-dark m-2 col-md-4 col-sm-12    "> Editar </a>
                    
                                        <form action="{{ route('doctor.destroy' , $doctor) }}" method="post">
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
