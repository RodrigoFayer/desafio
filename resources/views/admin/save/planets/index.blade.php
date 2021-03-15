@extends('admin.layouts.app')

@section('content')
    @component('admin.components.table')
        @slot('titulo', 'Planetas Salvos')
        @slot('head')
            <th>Nome</th>
            <th>Clima</th>
            <th>População</th>
            <th></th>
        @endslot
        @slot('body')
            @foreach ($planets as $planet)
                <tr>
                    <td>{{ $planet->name}}</td>
                    <td>{{ $planet->climate}}</td>
                    <td>{{ $planet->population}}</td>
                    <td class="options">
                        <a href="{{ route('savesPlanets.show',$planet->id) }}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
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

