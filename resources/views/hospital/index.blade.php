@extends('layouts.main')
@section('title', 'Bienvenidos')

@section('content')
        @component('components.card')
            @slot('header')
               <h2> Registro del Hospital </h2>
            @endslot

            @slot('body')

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

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-dark">
                                Registrar 
                            </button>
                        </div>
                    </div>

                </form>
            @endslot
        @endcomponent
@endsection


    