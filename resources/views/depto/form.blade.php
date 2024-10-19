<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_depto" class="form-label">{{ __('Iddepto') }}</label>
            <input type="text" name="idDepto" class="form-control @error('idDepto') is-invalid @enderror" value="{{ old('idDepto', $depto?->idDepto) }}" id="id_depto" placeholder="Iddepto">
            {!! $errors->first('idDepto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_depto" class="form-label">{{ __('Nombredepto') }}</label>
            <input type="text" name="nombreDepto" class="form-control @error('nombreDepto') is-invalid @enderror" value="{{ old('nombreDepto', $depto?->nombreDepto) }}" id="nombre_depto" placeholder="Nombredepto">
            {!! $errors->first('nombreDepto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_mediano" class="form-label">{{ __('Nombremediano') }}</label>
            <input type="text" name="nombreMediano" class="form-control @error('nombreMediano') is-invalid @enderror" value="{{ old('nombreMediano', $depto?->nombreMediano) }}" id="nombre_mediano" placeholder="Nombremediano">
            {!! $errors->first('nombreMediano', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_corto" class="form-label">{{ __('Nombrecorto') }}</label>
            <input type="text" name="nombreCorto" class="form-control @error('nombreCorto') is-invalid @enderror" value="{{ old('nombreCorto', $depto?->nombreCorto) }}" id="nombre_corto" placeholder="Nombrecorto">
            {!! $errors->first('nombreCorto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>