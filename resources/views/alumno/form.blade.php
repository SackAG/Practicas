<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="no_ctrl" class="form-label">{{ __('Noctrl') }}</label>
            <input type="text" name="noCtrl" class="form-control @error('noCtrl') is-invalid @enderror" value="{{ old('noCtrl', $alumno?->noCtrl) }}" id="no_ctrl" placeholder="Noctrl">
            {!! $errors->first('noCtrl', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_alumno" class="form-label">{{ __('Nombrealumno') }}</label>
            <input type="text" name="nombreAlumno" class="form-control @error('nombreAlumno') is-invalid @enderror" value="{{ old('nombreAlumno', $alumno?->nombreAlumno) }}" id="nombre_alumno" placeholder="Nombrealumno">
            {!! $errors->first('nombreAlumno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido_paterno" class="form-label">{{ __('Apellidopaterno') }}</label>
            <input type="text" name="apellidoPaterno" class="form-control @error('apellidoPaterno') is-invalid @enderror" value="{{ old('apellidoPaterno', $alumno?->apellidoPaterno) }}" id="apellido_paterno" placeholder="Apellidopaterno">
            {!! $errors->first('apellidoPaterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido_materno" class="form-label">{{ __('Apellidomaterno') }}</label>
            <input type="text" name="apellidoMaterno" class="form-control @error('apellidoMaterno') is-invalid @enderror" value="{{ old('apellidoMaterno', $alumno?->apellidoMaterno) }}" id="apellido_materno" placeholder="Apellidomaterno">
            {!! $errors->first('apellidoMaterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sexo" class="form-label">{{ __('Sexo') }}</label>
            <input type="text" name="sexo" class="form-control @error('sexo') is-invalid @enderror" value="{{ old('sexo', $alumno?->sexo) }}" id="sexo" placeholder="Sexo">
            {!! $errors->first('sexo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_carrera" class="form-label">{{ __('Idcarrera') }}</label>

            <select name="idCarrera" class="form-control @error('idCarrera') is-invalid @enderror" id="id_carrera" placeholder='Selecciona una carrera'>
                @foreach($carrera as $id => $nombre)
                    <option value="{{ $nombre }}">{{ $id }}</option>
                @endforeach
            </select>

            {!! $errors->first('idCarrera', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>