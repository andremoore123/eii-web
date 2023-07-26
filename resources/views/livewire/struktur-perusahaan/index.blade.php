@extends('livewire.layouts.app')

@section('struktur-active')
    active
@endsection

@section('content')
    <div class="content-struktur">
        <h1 class="header-1">Struktur Perusahaan</h1>
        <div class="content-company">
            <h1 class="header-2">
                PT. EII Pusat Balikpapan
            </h1>
            <img src="{{ asset('struktur-balikpapan.png') }}" alt="">
        </div>
        <div class="content-company">
            <h1 class="header-2">
                PT. EII Project Pertamina Hulu Rokan
            </h1>
            <img src="{{ asset('struktur-duri.png') }}" alt="">
        </div>
    </div>
@endsection
