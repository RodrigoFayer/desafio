@extends('admin.layouts.app')

@section('content')
    @component('admin.components.table')
        @slot('titulo', 'Naves')
        @slot('head')
            <th>Nome</th>
            <th>Preço</th>
            <th>Capacidade de Passageiros</th>
            <th></th>
        @endslot
        @slot('body')
            @foreach ($starships as $starship)
                <tr>
                    <td>{{ $starship->name}}</td>
                    <td>{{ $starship->cost_in_credits}}</td>
                    <td>{{ $starship->passengers}}</td>
                    <td class="options">
                        <a href="{{ route('starship.show',Str::substr($starship->url, 31)) }}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script src="{{ asset('js/components/dataTable.js') }}"></script>
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush
