<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_periodo" class="form-label">{{ __('Idperiodo') }}</label>
            <input type="text" name="idPeriodo" class="form-control @error('idPeriodo') is-invalid @enderror" value="{{ old('idPeriodo', $periodo?->idPeriodo) }}" id="id_periodo" placeholder="Idperiodo">
            {!! $errors->first('idPeriodo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="periodo" class="form-label">{{ __('Periodo') }}</label>
            <input type="text" name="periodo" class="form-control @error('periodo') is-invalid @enderror" value="{{ old('periodo', $periodo?->periodo) }}" id="periodo" placeholder="Periodo">
            {!! $errors->first('periodo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="des_corta" class="form-label">{{ __('Descorta') }}</label>
            <input type="text" name="desCorta" class="form-control @error('desCorta') is-invalid @enderror" value="{{ old('desCorta', $periodo?->desCorta) }}" id="des_corta" placeholder="Descorta">
            {!! $errors->first('desCorta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_ini" class="form-label">{{ __('Fechaini') }}</label>
            <input type="text" name="fechaIni" class="form-control @error('fechaIni') is-invalid @enderror" value="{{ old('fechaIni', $periodo?->fechaIni) }}" id="fecha_ini" placeholder="Fechaini">
            {!! $errors->first('fechaIni', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_fin" class="form-label">{{ __('Fechafin') }}</label>
            <input type="text" name="fechaFin" class="form-control @error('fechaFin') is-invalid @enderror" value="{{ old('fechaFin', $periodo?->fechaFin) }}" id="fecha_fin" placeholder="Fechafin">
            {!! $errors->first('fechaFin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>