<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_materia" class="form-label">{{ __('Idmateria') }}</label>
            <input type="text" name="idMateria" class="form-control @error('idMateria') is-invalid @enderror" value="{{ old('idMateria', $materia?->idMateria) }}" id="id_materia" placeholder="Idmateria">
            {!! $errors->first('idMateria', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_materia" class="form-label">{{ __('Nombremateria') }}</label>
            <input type="text" name="nombreMateria" class="form-control @error('nombreMateria') is-invalid @enderror" value="{{ old('nombreMateria', $materia?->nombreMateria) }}" id="nombre_materia" placeholder="Nombremateria">
            {!! $errors->first('nombreMateria', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nivel" class="form-label">{{ __('Nivel') }}</label>
            <input type="text" name="nivel" class="form-control @error('nivel') is-invalid @enderror" value="{{ old('nivel', $materia?->nivel) }}" id="nivel" placeholder="Nivel">
            {!! $errors->first('nivel', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_mediano" class="form-label">{{ __('Nombremediano') }}</label>
            <input type="text" name="nombreMediano" class="form-control @error('nombreMediano') is-invalid @enderror" value="{{ old('nombreMediano', $materia?->nombreMediano) }}" id="nombre_mediano" placeholder="Nombremediano">
            {!! $errors->first('nombreMediano', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_corto" class="form-label">{{ __('Nombrecorto') }}</label>
            <input type="text" name="nombreCorto" class="form-control @error('nombreCorto') is-invalid @enderror" value="{{ old('nombreCorto', $materia?->nombreCorto) }}" id="nombre_corto" placeholder="Nombrecorto">
            {!! $errors->first('nombreCorto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="modalidad" class="form-label">{{ __('Modalidad') }}</label>
            <input type="text" name="modalidad" class="form-control @error('modalidad') is-invalid @enderror" value="{{ old('modalidad', $materia?->modalidad) }}" id="modalidad" placeholder="Modalidad">
            {!! $errors->first('modalidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_reticula" class="form-label">{{ __('Idreticula') }}</label>
            <select name="idReticula" class="form-control @error('idReticula') is-invalid @enderror" id="id_reticula" placeholder='Selecciona una reticula'>
                @foreach($reticula as $id => $nombre)
                    <option value="{{ $nombre }}">{{ $id }}</option>
                @endforeach
            </select>
            {!! $errors->first('idReticula', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>