@extends('admin.layouts.app')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Mostrar Nave ' . $starship->name)
        @slot('form')
            @include('admin.starships.form')
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script>
        $('.form-control').attr('disabled', 'true');
    </script>
@endpush
