@extends('admin.layouts.app')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Mostrar Planeta ' . $planet->name)
        @slot('form')
            @include('admin.planets.form')
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script>
        $('.form-control').attr('disabled', 'true');
    </script>
@endpush
