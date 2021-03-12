<div class="row">
    <div class="col-lg-6 col-md-12 form-group">
        <label for="name" class="required">Nome </label>
        <input name="name" id="name" required value="{{ old('name', $planet->name) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="rotation_period" class="required">Periodo de Rotação </label>
        <input name="rotation_period" required id="rotation_period" value="{{ old('rotation_period', $planet->rotation_period) }}" type="number" step="1" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="orbital_period" class="required">Periodo Orbital </label>
        <input name="orbital_period" required id="orbital_period" value="{{ old('orbital_period', $planet->orbital_period) }}" type="number" step="1" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="diameter" class="required">Diametro </label>
        <input name="diameter" required id="diameter" value="{{ old('diameter', $planet->diameter) }}" type="number" step="1" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="climate" class="required">Clima </label>
        <input name="climate" required id="climate" value="{{ old('climate', $planet->climate) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="gravity" class="required">Gravidade </label>
        <input name="gravity" required id="gravity" value="{{ old('gravity', $planet->gravity) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="terrain" class="required">Terreno </label>
        <input name="terrain" required id="terrain" value="{{ old('terrain', $planet->terrain) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="surface_water" class="required">Agua </label>
        <input name="surface_water" required id="surface_water" value="{{ old('surface_water', $planet->surface_water) }}" type="number" step="1" class="form-control">
    </div>
    <div class="col-lg-12 col-md-12 form-group">
        <label for="population" class="required">População </label>
        <input name="population" required id="population" value="{{ old('population', $planet->population) }}" type="number" step="1" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="residents" class="required">Residentes </label>
        @if ($planet->residents == [])
            <p>Esse planeta não tem residentes !!</p>
        @else
            <select multiple name="residents[]" required id="residents" class="form-control">

                @foreach($planet->residents as $resident)
                    <option>
                        {{ $resident }}
                    </option>
                @endforeach
            </select>
        @endif
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="films" class="required">Filmes </label>
        @if ($planet->films == [])
            <p>Esse planeta não aparece em nehum filme !!</p>
        @else
            <select multiple name="films[]" required id="films" class="form-control">

                @foreach($planet->films as $film)
                    <option>
                        {{ $film }}
                    </option>
                @endforeach
            </select>
        @endif
    </div>

</div>
