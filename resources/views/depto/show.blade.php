@extends('layouts.app')

@section('template_title')
    {{ $depto->name ?? __('Show') . " " . __('Depto') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Depto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('deptos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Iddepto:</strong>
                                    {{ $depto->idDepto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombredepto:</strong>
                                    {{ $depto->nombreDepto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombremediano:</strong>
                                    {{ $depto->nombreMediano }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombrecorto:</strong>
                                    {{ $depto->nombreCorto }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
