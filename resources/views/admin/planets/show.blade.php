@extends('admin.layouts.app')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Mostrar Planeta ' . $planet->name)
        @slot('url', route('planet.store'))
        @slot('form')
            @include('admin.planets.form')
        @endslot
        @slot('back')
            <button type="submit" form="form-adicionar" class="btn btn-primary float-right">Salvar</button>

        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script>
        $('.form-control').attr('disabled', 'true');
    </script>
@endpush
