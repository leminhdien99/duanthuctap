@extends('client.layout.master')
@php
    $title1 = "Chi tiết tin";
@endphp
@section('main')
<main class="main">
    <x-client.pages :title="$title1"></x-client.pages>
    <x-client.blog></x-client.blog>
</main>
@endsection