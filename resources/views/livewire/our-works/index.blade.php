@extends('livewire.layouts.app')

@section('work-active')
    active
@endsection

@section('content')
    @php
        $works_json = $ourWorks->work_result;
        $works_array = json_decode($works_json, true);
    @endphp

    <div class="content-out-works">
        <h1 class="header-1">Our Works</h1>
        <div class="out-works-list">
            @foreach ($works_array as $index => $item)
                @if ($index % 2 === 0)
                    <div class="our-works-item-even">
                        <img src="{{ asset($item['photo_url']) }}" alt="company_logo">
                        <h5 class="header-3">{{ $item['description'] }}</h5>
                    </div>
                @else
                    <div class="our-client-item-odd">
                        <h5 class="header-3">{{ $item['description'] }}</h5>
                        <img src="{{ asset($item['photo_url']) }}" alt="company_logo">
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
