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
                <h4 class="my-0 font-weight-normal text-center"> Editar Doctor  </h4>
            </x-slot>

            <x-slot name="body">

                <form method="POST" action="{{ route('doctor.update', $doctor) }}">  
                    @csrf
                    @method('PUT')
    
                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label text-md-right"> Nombre: </label>
    
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="name" value="{{ old('name', $doctor->name) }}" required autofocus>
                        </div>
                    </div>
    
                    <div class="form-group row"> 
                        <label for="adress" class="col-md-3 col-form-label text-md-right"> Dirección: </label>
    
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="adress" value="{{ old('adress', $doctor->adress) }}" required autofocus>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label for="phone" class="col-md-3 col-form-label text-md-right"> Telefono: </label>
    
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="phone" value="{{ old('phone', $doctor->phone) }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type_blood" class="col-md-3 col-form-label text-md-right"> Sangre: </label>
    
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="type_blood" value="{{ old('type_blood', $doctor->type_blood) }}" required autofocus>
                        </div>
                    </div>   
                    
                    <div class="form-group row">
                        <label for="years_exp" class="col-md-3 col-form-label text-md-right"> Años de Experiencia: </label>
    
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="years_exp" value="{{ old('years_exp', $doctor->years_exp) }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="date" class="col-md-3 col-form-label text-md-right"> Fecha de Nacimiento: </label>
    
                        <div class="col-md-7">
                            <input type="date" class="form-control" name="date" value="{{ old('date', $doctor->date) }}" required autofocus>
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
                            <button type="submit" class="btn btn-outline-dark"> Editar </button>
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
    @endsection
</div>

    
