@extends('layouts.main')

@section('title')

<div class="container">
    @section('content')
    <div class="py-5 container">
        <x-card>
            <x-slot name="colorheader"> #117864  </x-slot>
            <x-slot name="colortext"> white </x-slot>
            <x-slot name="width"> 45rem </x-slot>

            <x-slot name="header">
                <h4 class="my-0 font-weight-normal text-center text-uppercase"> Registro de Doctores  </h4>
            </x-slot>

            <x-slot name="body">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

                <!-- Se colocaron los errores individualmente para mas estetica -->

                <form method="POST" action="{{ route('doctor.store') }}">
                    @csrf
    
                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label text-md-right"> Nombre: </label>
    
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>
                            @error('name')
                                <small class="text-muted"> * {{ $message }} </small>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group row"> 
                        <label for="adress" class="col-md-3 col-form-label text-md-right"> Dirección: </label>
    
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="adress" value="{{ old('adress') }}" autofocus>
                            @error('adress')
                                <small class="text-muted"> * {{ $message }} </small>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label for="phone" class="col-md-3 col-form-label text-md-right"> Telefono: </label>
    
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" autofocus>
                            @error('phone')
                                <small class="text-muted"> * {{ $message }} </small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type_blood" class="col-md-3 col-form-label text-md-right"> Sangre: </label>
    
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="type_blood" value="{{ old('type_blood') }}" autofocus>
                            @error('type_blood')
                                <small class="text-muted"> * {{ $message }} </small>
                            @enderror
                        </div>
                    </div>   
                    
                    <div class="form-group row">
                        <label for="years_exp" class="col-md-3 col-form-label text-md-right"> Años de Experiencia: </label>
    
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="years_exp" value="{{ old('years_exp') }}" autofocus>
                            @error('years_exp')
                                <small class="text-muted"> * {{ $message }} </small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="date" class="col-md-3 col-form-label text-md-right"> Fecha de Nacimiento: </label>
    
                        <div class="col-md-7">
                            <input type="date" class="form-control" name="date" value="{{ old('date') }}" autofocus>
                            @error('date')
                                <small class="text-muted"> * {{ $message }} </small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="my-select" class="col-md-3 col-form-label text-md-right"> Hospital: </label>

                        <div class="col-md-7">
                            @foreach ($hospitals as $hospital)
                                <select id="my-select" name="hospital_id" class="form-control">
                                    <option value="{{ $hospital->id }}"> {{ $hospital->name }} </option>
                                </select>
                            @endforeach                        
                        </div>   
                    </div>


                    <!-- BOTONES -->
                    <div class="container row"> 
                        <div class="col-md-2 offset-md-5">
                            <button type="submit" class="btn btn-outline-dark"> Registrar </button>
                        </div>
                        <div class="col-md-1">
                            <a href="{{ route('doctor.index') }}" class="btn btn-outline-dark"> Volver </a>
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
</div>
