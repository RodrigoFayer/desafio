@extends('admin.layouts.app')

@section('content')
    @component('admin.components.table')
        @slot('titulo', 'Planetas')
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
                        <a href="{{ route('planet.show',Str::substr($planet->url, 29)) }}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection
