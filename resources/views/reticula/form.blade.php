<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_reticula" class="form-label">{{ __('Idreticula') }}</label>
            <input type="text" name="idReticula" class="form-control @error('idReticula') is-invalid @enderror" value="{{ old('idReticula', $reticula?->idReticula) }}" id="id_reticula" placeholder="Idreticula">
            {!! $errors->first('idReticula', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $reticula?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_en_vigor" class="form-label">{{ __('Fechaenvigor') }}</label>
            <input type="date" name="fechaEnVigor" class="form-control @error('fechaEnVigor') is-invalid @enderror" value="{{ old('fechaEnVigor', $reticula?->fechaEnVigor) }}" id="fecha_en_vigor" placeholder="Fechaenvigor">
            {!! $errors->first('fechaEnVigor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
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