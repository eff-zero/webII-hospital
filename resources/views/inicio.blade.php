@extends('layouts.main')

@section('title' , 'Bienvenidos')
@section('content')



    <div class="container text-center pt-5 pb-5">
        <a href="{{ route('hospital.index') }}" class="btn btn-lg text-white" style="background-color: #533B78"> Ir a Hospital </a>
    </div>
    


    {{-- <a href="{{ route('hospital.index') }}">
        <h1 class="text-center mt-4"> Agregar Hospital </h1>
        
    </a>

    <br><hr>
        Hay que modificar esta vista --}}
@endsection


    
