@extends('layouts.main')

@section('title')

<div class="container">
    @section('content')
    <div class="pt-5 container">

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

        <form action="{{ route('patient.store') }}" method="post">
            @csrf
            
            <div class="row">

                <!-- DATOS PARA EL PACIENTE -->
                <div class="col-md-12">
                    <x-card>
                        <x-slot name="colorheader"> #154360 </x-slot>
                        <x-slot name="colortext"> white </x-slot>
                        <x-slot name="width">  </x-slot>
            
                        <x-slot name="header">
                            <h4 class="my-0 font-weight-normal text-center text-uppercase"> Datos paciente y acompañante  </h4>
                        </x-slot>
            
                        <x-slot name="body">
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
                                <label for="my-select" class="col-md-3 col-form-label text-md-right ">EPS: </label>

                                <div class="col-md-7">
                                    <select id="my-select" class="form-control" name="eps">
                                        <option value="SURA">SURA</option>
                                        <option value="COOMEVA">COOMEVA</option>
                                        <option value="SUSALUD">SUSALUD</option>
                                        <option value="VIVA1A">VIVA1A</option>
                                    </select>
                                </div>
                                
                            </div>

                            <div class="form-group row"> 
                                <label for="adress" class="col-md-3 col-form-label text-md-right"> Nombre del Acompañante: </label>
            
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="comp_name" value="{{ old('comp_name') }}" autofocus>
                                    @error('comp_name')
                                        <small class="text-muted"> * {{ $message }} </small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row"> 
                                <label for="adress" class="col-md-3 col-form-label text-md-right"> Tel. Acompañante: </label>
            
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="comp_phone" value="{{ old('comp_phone') }}" autofocus>
                                    @error('comp_phone')
                                    <small class="text-muted"> * {{ $message }} </small>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="my-select" class="col-md-3 col-form-label text-md-right ">Asignar a Doctor: </label>

                                <div class="col-md-7">
                                    <select id="my-select" class="form-control" name="doctor_id">
                                        @foreach ($doctors as $doctor)
                                            <option value={{ $doctor->id }}> {{ $doctor->name }} </option>     
                                        @endforeach                                                           
                                    </select>
                                </div>
                                
                            </div>

                        </x-slot>
                    </x-card>
                </div>

                 <!-- ANTECEDENTES, MOTIVOS DE LA CONSULTA Y DIAGNOTICO -->
                 <div class="col-md-8 pt-4">
                    <x-card>
                        <x-slot name="colorheader"> #154360 </x-slot>
                        <x-slot name="colortext"> white </x-slot>
                        <x-slot name="width"> 45rem </x-slot>
            
                        <x-slot name="header">
                            <h4 class="my-0 font-weight-normal text-center text-uppercase"> Apartado del Doctor  </h4>
                        </x-slot>
            
                        <x-slot name="body">
                            <div class="form-group">
                                <label for="my-textarea"> Historial Medico o Antecedentes </label>
                                <textarea id="my-textarea" class="form-control" name="med_history" rows="2"></textarea>
                                @error('med_history')
                                    <small class="text-muted"> * {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="my-textarea"> Motivos de la Consulta </label>
                                <textarea id="my-textarea" class="form-control" name="reasons" rows="2"></textarea>
                                @error('reasons')
                                    <small class="text-muted"> * {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="my-textarea"> Diagnostico </label>
                                <textarea id="my-textarea" class="form-control" name="diagnosis" rows="2"></textarea>
                                @error('diagnosis')
                                    <small class="text-muted"> * {{ $message }} </small>
                                @enderror
                            </div>

                        </x-slot>
                    </x-card>
                </div> 
    
    
                <!-- CONSULTA COVID -->
                <div class="col-md-4 pt-5 mt-5">
                    <x-card>
                        <x-slot name="colorheader"> #154360 </x-slot>
                        <x-slot name="colortext"> white </x-slot>
                        <x-slot name="width"> 20rem </x-slot>
            
                        <x-slot name="header">
                            <h4 class="my-0 font-weight-normal text-center text-uppercase"> Consulta de Covid  </h4>
                        </x-slot>
            
                        <x-slot name="body">
                            
                            <div class="form-check">
                                <input type="hidden" name="covid" value="0"> <!-- COVID FALSO POR DEFECTO -->

                                <!-- 1 ELEGIR UN SOLO SINTONA ES PARA SER CANDIDATO DE COVID -->
                                <input id="my-input" class="form-check-input" type="checkbox" name="covid" value="1">
                                <label for="my-input" class="form-check-label">¿Presenta tos?</label> <br>

                                <input id="my-input" class="form-check-input" type="checkbox" name="covid" value="1">
                                <label for="my-input" class="form-check-label">Dificultad para Respirar</label><br>

                                <input id="my-input" class="form-check-input" type="checkbox" name="covid" value="1">
                                <label for="my-input" class="form-check-label">Fiebre</label><br>

                                <input id="my-input" class="form-check-input" type="checkbox" name="covid" value="1">
                                <label for="my-input" class="form-check-label">Escalofrios</label><br>

                                <input id="my-input" class="form-check-input" type="checkbox" name="covid" value="1">
                                <label for="my-input" class="form-check-label">Temblores que no ceden </label><br>

                                <input id="my-input" class="form-check-input" type="checkbox" name="covid" value="1">
                                <label for="my-input" class="form-check-label">Dolor muscular</label><br>
                            </div>

                        </x-slot>
                    </x-card>
                </div>

                

            </div> 
            <hr>
            <div class="text-center pt-2 text-uppercase"> 
                <button type="submit" class="btn btn-outline-dark text-uppercase m-2"> Agregar paciente </button>
                <a href="{{ route('patient.index') }}" class="btn btn-outline-dark m-2"> volver </a>
            </div>
            
        </form>

    </div>
    @endsection
</div>
