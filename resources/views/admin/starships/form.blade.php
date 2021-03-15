@if ($errors->any())
    @push('scripts')
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Nave já salvo!',
                html:
                    ''+
                    '<a class="btn btn-primary" href="{{ route('starship.index')}}">Voltar para Naves</a>',
                showConfirmButton: false,
            })
        </script>
    @endpush
@endif
<div class="row">
    <div class="col-lg-6 col-md-12 form-group">
        <label for="name" class="required">Nome </label>
        <input name="name" id="name" required value="{{ old('name', $starship->name) }}" type="hidden">
        <input name="name" id="name" required value="{{ old('name', $starship->name) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="model" class="required">Modelo </label>
        <input name="model" required id="model" value="{{ old('model', $starship->model) }}" type="hidden">
        <input name="model" required id="model" value="{{ old('model', $starship->model) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="manufacturer" class="required">Fabricante </label>
        <input name="manufacturer" required id="manufacturer" value="{{ old('manufacturer', $starship->manufacturer) }}" type="hidden">
        <input name="manufacturer" required id="manufacturer" value="{{ old('manufacturer', $starship->manufacturer) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="cost_in_credits" class="required">Preço </label>
        <input name="cost_in_credits" required id="cost_in_credits" value="{{ old('cost_in_credits', $starship->cost_in_credits) }}" type="hidden">
        <input name="cost_in_credits" required id="cost_in_credits" value="{{ old('cost_in_credits', $starship->cost_in_credits) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="length" class="required">Comprimento </label>
        <input name="length" required id="length" value="{{ old('length', $starship->length) }}" type="hidden">
        <input name="length" required id="length" value="{{ old('length', $starship->length) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="max_atmosphering_speed" class="required">Velocidade Maxima </label>
        <input name="max_atmosphering_speed" required id="max_atmosphering_speed" value="{{ old('max_atmosphering_speed', $starship->max_atmosphering_speed) }}" type="hidden">
        <input name="max_atmosphering_speed" required id="max_atmosphering_speed" value="{{ old('max_atmosphering_speed', $starship->max_atmosphering_speed) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="crew" class="required">Equipe Técnica </label>
        <input name="crew" required id="crew" value="{{ old('crew', $starship->crew) }}" type="hidden">
        <input name="crew" required id="crew" value="{{ old('crew', $starship->crew) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="passengers" class="required">Capacidade de Passageiros </label>
        <input name="passengers" required id="passengers" value="{{ old('passengers', $starship->passengers) }}" type="hidden">
        <input name="passengers" required id="passengers" value="{{ old('passengers', $starship->passengers) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="cargo_capacity" class="required">Capacidade de Carga </label>
        <input name="cargo_capacity" required id="cargo_capacity" value="{{ old('cargo_capacity', $starship->cargo_capacity) }}" type="hidden">
        <input name="cargo_capacity" required id="cargo_capacity" value="{{ old('cargo_capacity', $starship->cargo_capacity) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="consumables" class="required">Consumíveis </label>
        <input name="consumables" required id="consumables" value="{{ old('consumables', $starship->consumables) }}" type="hidden">
        <input name="consumables" required id="consumables" value="{{ old('consumables', $starship->consumables) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="hyperdrive_rating" class="required">Avaliação Hiperdrive </label>
        <input name="hyperdrive_rating" required id="hyperdrive_rating" value="{{ old('hyperdrive_rating', $starship->hyperdrive_rating) }}" type="hidden">
        <input name="hyperdrive_rating" required id="hyperdrive_rating" value="{{ old('hyperdrive_rating', $starship->hyperdrive_rating) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="MGLT" class="required">MGLT </label>
        <input name="MGLT" required id="MGLT" value="{{ old('MGLT', $starship->MGLT) }}" type="hidden">
        <input name="MGLT" required id="MGLT" value="{{ old('MGLT', $starship->MGLT) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="starship_class" class="required">Classe </label>
        <input name="starship_class" required id="starship_class" value="{{ old('starship_class', $starship->starship_class) }}" type="hidden">
        <input name="starship_class" required id="starship_class" value="{{ old('starship_class', $starship->starship_class) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="url" class="required">URl </label>
        <input name="url" required id="url" value="{{ old('url', $starship->url) }}" type="hidden">
        <input name="url" required id="url" value="{{ old('url', $starship->url) }}" type="text" class="form-control">
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="pilots" class="required">Pilotos </label>
        @if ($starship->pilots == [])
            <p>Essa nave não tem pilotos !!</p>
            <input name="pilots[]" required id="pilots" type="hidden">
        @else
            @foreach($starship->pilots as $pilot)
                <input name="pilots[]" required id="pilots" value="{{$pilot}}" type="hidden">
            @endforeach
            <select multiple name="pilots[]" required id="pilots" class="form-control">

                @foreach($starship->pilots as $pilot)
                    <option>
                        {{ $pilot }}
                    </option>
                @endforeach
            </select>
        @endif
    </div>
    <div class="col-lg-6 col-md-12 form-group">
        <label for="films" class="required">Filmes </label>
        @if ($starship->films == [])
            <p>Essa nave não aparece em nehum filme !!</p>
            <input name="films[]" required id="films" type="hidden">
        @else
            @foreach($starship->films as $film)
                <input name="films[]" required id="films" value="{{ $film }}" type="hidden">

            @endforeach
            <select multiple name="films[]" required id="films" class="form-control">

                @foreach($starship->films as $film)
                    <option>
                        {{ $film }}
                    </option>
                @endforeach
            </select>
        @endif
    </div>

</div>
