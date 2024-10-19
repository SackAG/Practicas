<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_carrera" class="form-label">{{ __('Idcarrera') }}</label>
            <input type="text" name="idCarrera" class="form-control @error('idCarrera') is-invalid @enderror" value="{{ old('idCarrera', $carrera?->idCarrera) }}" id="id_carrera" placeholder="Idcarrera">
            {!! $errors->first('idCarrera', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_carrera" class="form-label">{{ __('Nombrecarrera') }}</label>
            <input type="text" name="nombreCarrera" class="form-control @error('nombreCarrera') is-invalid @enderror" value="{{ old('nombreCarrera', $carrera?->nombreCarrera) }}" id="nombre_carrera" placeholder="Nombrecarrera">
            {!! $errors->first('nombreCarrera', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_corto" class="form-label">{{ __('Nombrecorto') }}</label>
            <input type="text" name="nombreCorto" class="form-control @error('nombreCorto') is-invalid @enderror" value="{{ old('nombreCorto', $carrera?->nombreCorto) }}" id="nombre_corto" placeholder="Nombrecorto">
            {!! $errors->first('nombreCorto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_depto" class="form-label">{{ __('Iddepto') }}</label>

            <select name="idDepto" class="form-control @error('idDepto') is-invalid @enderror" id="id_depto">
                <option value="">Selecciona un departamento</option>
                @foreach($depto as $id => $nombre)
                    <option value="{{ $nombre }}">{{ $id }}</option>
                @endforeach
            </select>
            
            
            {!! $errors->first('idDepto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>