@extends('layouts.main')
@section('title', 'Bienvenidos')

@section('content')
<div class="pt-5 container">
    <x-card>
        <x-slot name="colorheader"> </x-slot>
        <x-slot name="colortext">  </x-slot>

        <x-slot name="header">
            <h4 class="my-0 font-weight-normal text-center text-muted"> Editar Hospital  </h4>
        </x-slot>

        <x-slot name="body">

            <form method="POST" action="{{ route('hospital.update', $hospital) }}">  
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label text-md-right"> Nombre: </label>

                    <div class="col-md-7">
                        <input type="text" class="form-control" name="name" value="{{ old('name', $hospital->name) }}" required autofocus>
                    </div>
                </div>

                <div class="form-group row"> 
                    <label for="adress" class="col-md-3 col-form-label text-md-right"> Dirección: </label>

                    <div class="col-md-7">
                        <input type="text" class="form-control" name="adress" value="{{ old('adress' , $hospital->adress) }}" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-md-3 col-form-label text-md-right"> Telefono: </label>

                    <div class="col-md-7">
                        <input type="text" class="form-control" name="phone" value="{{ old('phone', $hospital->phone) }}" required autofocus>
                    </div>
                </div>
   

                <div class="container row">
                    <div class="col-md-3 offset-md-4">
                        <button type="submit" class="btn btn-outline-dark"> Editar </button>
                    </div>
                    <div class="col">
                        <a href="{{ route('hospital.index') }}" class="btn btn-outline-dark"> Volver </a>
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