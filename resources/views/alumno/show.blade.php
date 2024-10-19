@extends('layouts.app')

@section('template_title')
    {{ $alumno->name ?? __('Show') . " " . __('Alumno') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Alumno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('alumnos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Noctrl:</strong>
                                    {{ $alumno->noCtrl }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombrealumno:</strong>
                                    {{ $alumno->nombreAlumno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellidopaterno:</strong>
                                    {{ $alumno->apellidoPaterno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellidomaterno:</strong>
                                    {{ $alumno->apellidoMaterno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sexo:</strong>
                                    {{ $alumno->sexo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idcarrera:</strong>
                                    {{ $alumno->idCarrera }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
