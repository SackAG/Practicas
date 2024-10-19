@extends('layouts.app')

@section('template_title')
    {{ $reticula->name ?? __('Show') . " " . __('Reticula') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reticula</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('reticulas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Idreticula:</strong>
                                    {{ $reticula->idReticula }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $reticula->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechaenvigor:</strong>
                                    {{ $reticula->fechaEnVigor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idcarrera:</strong>
                                    {{ $reticula->idCarrera }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
