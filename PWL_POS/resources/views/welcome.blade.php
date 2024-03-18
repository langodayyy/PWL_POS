@extends('layouts.app')

{{-- Custpmize layout section --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content body: main page content --}}

@section('content_body')
    <p>Wellcome to this beautiful admin panel.</p>
@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheet --}}
    {{-- <link rel="stylesheet" href="css/admin_custom.css"> --}}
@endpush

{{-- Push extra acripts --}}
@push('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!");</script>    
@endpush