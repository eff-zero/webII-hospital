@extends('layouts.main')
@section('title', 'Bienvenidos')

@section('content')

<div class="container pt-5">

    <x-card>
        <x-slot name="colorheader"> </x-slot>
        <x-slot name="colortext"> </x-slot>

        <x-slot name="header">
            <h4 class="my-0 font-weight-normal text-center"> 
                ESTADO DEL HOSPITAL:  
                <small class="text-muted"> 
                    {{ count($hospitals) ? 'REGISTRADO' : 'NO REGISTRADO' }}
                </small>  
            </h4>
        </x-slot>

        <x-slot name="body">

            @foreach ($hospitals as $hospital)
                <div class="container">
                    <strong> Hospital:  <small class="text-muted"> {{ $hospital->name }}  </small>  </strong> <br>
                    <strong> Direccion: <small class="text-muted"> {{ $hospital->adress }} </small> </strong> <br>
                    <strong> Telefono:  <small class="text-muted"> {{ $hospital->phone }}  </small> </strong> <br>
                </div> <hr>

                <div class="container text-center">
                    <a href="" class="btn btn-outline-dark m-2 col-md-4 col-sm-12   "> Ver Doctores </a> 
                    <a href="{{ route('hospital.edit', $hospital) }}" class="btn btn-outline-dark m-2 col-md-4 col-sm-12    "> Editar </a>

                    <form action="{{ route('hospital.destroy' , $hospital) }}" method="post">
                        @csrf
                        @method('delete')
                        {{-- <a href="" class="btn btn-outline-dark m-2 col-md-4 col-sm-12 {{ count($hospitals) ? '' : 'disabled' }}"    > Eliminar </a> --}}
                        <button class="btn btn-outline-dark m-2 col-md-4 col-sm-12"> Eliminar </button>
                    </form>                                          
                </div> <hr>
            @endforeach
            
            <div class="container text-center">
                <a href="{{ route('hospital.create') }}" class="btn btn-outline-dark m-2 col-md-4 col-sm-12 {{ count($hospitals) ? 'disabled' : '' }}"> Registar </a>
                <a href="/" class="btn btn-outline-dark m-2 col-md-4 col-sm-12"> Atras </a>
            </div>  

        </x-slot>
    </x-card>
</div>   

@endsection


    