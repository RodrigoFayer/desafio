@extends('admin.layouts.app')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Mostrar Planeta ' . $planet->name)
        @slot('url', "".Str::substr($planet->url, 31))
        @slot('form')
            @include('admin.save.planets.form')
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script>
        $('.form-control').attr('disabled', 'true');
    </script>
@endpush
