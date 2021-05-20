<!-- SE PASO EL FORMULARIO DE CREACION DEL HOSPITAL DE INDEX A CREATE -->

@extends('layouts.main')
@section('title', 'R. Hospital')

<!-- slot para definir el color del header y del texto -->


@section('content')
    <div class="pt-5 container">
        <x-card>
            <x-slot name="colorheader"> #533B78 </x-slot>
            <x-slot name="colortext">   white   </x-slot>

            <x-slot name="header">
                <h4 class="my-0 font-weight-normal text-center"> Registro de Hospital  </h4>
            </x-slot>

            <x-slot name="body">

                <form method="POST" action="{{ route('hospital.store') }}">  
                    @csrf
    
                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label text-md-right"> Nombre: </label>
    
                        <div class="col-md-7">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        </div>
                    </div>
    
                    <div class="form-group row"> 
                        <label for="adress" class="col-md-3 col-form-label text-md-right"> Dirección: </label>
    
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="adress" value="{{ old('adress') }}" required autofocus>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label for="phone" class="col-md-3 col-form-label text-md-right"> Telefono: </label>
    
                        <div class="col-md-7">
                            <input id="phone" type="text" class="form-control" name="phone" value="{{ old('name') }}" required autofocus>
                        </div>
                    </div>

                    <div class="container row">
                        <div class="col-md-3 offset-md-4">
                            <button type="submit" class="btn btn-outline-dark"> Registrar </button>
                        </div>
                        <div class="col">
                            <a href="/" class="btn btn-outline-dark"> Volver </a>
                        </div>
                    </div>
    
                    {{-- <div class="form-group row mb-0">
                        <div class="col-md-1 offset-md-3">
                            <button type="submit" class="btn btn-outline-dark">
                                Registrar 
                            </button>
                        </div>
                    </div>    --}}
                </form>

            </x-slot>
        </x-card>
    </div>   
@endsection

