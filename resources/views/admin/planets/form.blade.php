<div class="row">
    <div class="col-lg-6 col-md-12 form-group">
        <label for="name" class="required">Nome </label>
        <input name="name" id="name" required value="{{ old('name', $planet->name) }}" type="hidden">
        <input value="{{ old('name', $planet->name) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="rotation_period" class="required">Periodo de Rotação </label>
        <input name="rotation_period" id="rotation_period" required value="{{ old('rotation_period', $planet->rotation_period) }}" type="hidden">
        <input name="rotation_period" required id="rotation_period" value="{{ old('rotation_period', $planet->rotation_period) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="orbital_period" class="required">Periodo Orbital </label>
        <input name="orbital_period" required id="orbital_period" value="{{ old('orbital_period', $planet->orbital_period) }}" type="hidden">
        <input name="orbital_period" required id="orbital_period" value="{{ old('orbital_period', $planet->orbital_period) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="diameter" class="required">Diametro </label>
        <input name="diameter" required id="diameter" value="{{ old('diameter', $planet->diameter) }}" type="hidden">
        <input name="diameter" required id="diameter" value="{{ old('diameter', $planet->diameter) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="climate" class="required">Clima </label>
        <input name="climate" required id="climate" value="{{ old('climate', $planet->climate) }}" type="hidden">
        <input name="climate" required id="climate" value="{{ old('climate', $planet->climate) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="gravity" class="required">Gravidade </label>
        <input name="gravity" required id="gravity" value="{{ old('gravity', $planet->gravity) }}" type="hidden" >
        <input name="gravity" required id="gravity" value="{{ old('gravity', $planet->gravity) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="terrain" class="required">Terreno </label>
        <input name="terrain" required id="terrain" value="{{ old('terrain', $planet->terrain) }}" type="hidden" >
        <input name="terrain" required id="terrain" value="{{ old('terrain', $planet->terrain) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="surface_water" class="required">Agua </label>
        <input name="surface_water" required id="surface_water" value="{{ old('surface_water', $planet->surface_water) }}" type="hidden">
        <input name="surface_water" required id="surface_water" value="{{ old('surface_water', $planet->surface_water) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-12 col-md-12 form-group">
        <label for="population" class="required">População </label>
        <input name="population" required id="population" value="{{ old('population', $planet->population) }}" type="hidden">
        <input name="population" required id="population" value="{{ old('population', $planet->population) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="residents" class="required">Residentes </label>
        @if ($planet->residents == [])
            <p>Esse planeta não tem residentes !!</p>
            <input name="residents[]" required id="residents" type="hidden">

        @else
            @foreach($planet->residents as $resident)
            <input name="residents[]" required id="residents" value="{{ old('residents', $resident) }}" type="hidden">

            @endforeach
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
            @foreach($planet->films as $film)
                <input name="films[]" required id="films" value="{{ old('films', $film) }}" type="hidden">
            @endforeach
            <select multiple name="films[]" required id="films" class="form-control">
                @foreach($planet->films as $film)
                    <option>
                        {{ $film }}
                    </option>
                @endforeach
            </select>
        @endif
    </div>
    <input name="url" required id="url" value="{{ old('url', $planet->url) }}" type="hidden">


</div>
