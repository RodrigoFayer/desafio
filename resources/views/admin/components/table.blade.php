@if ($body != '' || !($createFirst ?? true))
    <div class="card">
        @if (isset($create) || isset($titulo))
            <div class="card-header card-outline card-primary">
                <h3 class="float-left m-0 table-title">{{ $titulo ?? null }}</h3>
                @if (isset($create))
                    <div class="float-right mr-2">
                        <div class="input-group input-group-sm">
                            <a href="{{ $create }}">
                                <button type="button" class="btn btn-primary">
                                    <b><i class="fas fa-plus-circle"></i> Adicionar</b>
                                </button>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        @endif

        <div class="card-body table-responsive ">
            <table  class="table table-hover dataTable table-striped">
                <thead>
                    <tr>
                        {{ $head ?? null }}
                    </tr>
                </thead>
                <tbody>
                    {{ $body ?? null }}
                </tbody>
            </table>
        </div>
    </div>
@else
    @if ( Route::is('savesStarships.index'))
        <div class="text-center" style="color: #949699">
            <i class="fas fa-exclamation-circle" style="font-size: 10em"></i>
            <p class="mb-4 h2">Nenhum Nave foi salva!</p>
            <a href="{{ route('starship.index') }}">
                <button type="button" class="btn btn-primary">
                    <b>Ir para Naves <i class="fas fa-arrow-right"></i></b>
                </button>
            </a>
        </div>
    @elseif (Route::is('savesPlanets.index'))
        <div class="text-center" style="color: #949699">
            <i class="fas fa-exclamation-circle" style="font-size: 10em"></i>
            <p class="mb-4 h2">Nenhum Planeta foi salvo!</p>
            <a href="{{ route('planet.index') }}">
                <button type="button" class="btn btn-primary">
                    <b>Ir para Planetas <i class="fas fa-arrow-right"></i></b>
                </button>
            </a>
        </div>
    @else
        <div class="text-center" style="color: #949699">
            <i class="fas fa-exclamation-circle" style="font-size: 10em"></i>
            <p class="mb-4 h2">Nenhum item encontrado! </p>
        </div>
    @endif
@endif
