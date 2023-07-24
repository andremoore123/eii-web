@extends('livewire.layouts.app')



@section('content')
    @php
        $location_json = $homes->list_company_location;
        $location_array = json_decode($location_json, true);

        $misi_json = $homes->misi_company;
        $misi_array = json_decode($misi_json, true);

        $core_json = $homes->list_core_company;
        $core_array = json_decode($core_json, true);
    @endphp
    <div class="image-wrapper">
        <img src="{{ asset('home_photo_1.png') }}" alt="home_photo">
        <h1 class="header-1">PT East Infinita Indonesia</h1>
        <h5 class="body-3">Sustainable, Massivﬁe, To Grow, Efficient, Resilient, and Aggressive</h5>
    </div>
    <div class="content">
        <h1 class="header-1">Tentang Perusahan Ini</h1>
        <h3 class="body-1">{{ $homes->about_company }} </h3>
        <h1 class="header-2">
            Kami Ada di Beberapa kota
        </h1>
        <dl style="list-style-type:disc">
            @foreach ($location_array as $item)
                <dt class="header-3">
                    {{ $item['title'] }}
                <dd class="body-3">
                    {{ $item['description'] }}
                </dd>
                </dt>
            @endforeach
        </dl>
        <div class="visi-misi">
            <h1 class="header-2">
                Visi dan Misi Kami
            </h1>
            <h2 class="header-3">
                Visi
            </h2>
            <h5 class="body-3">
                {{ $homes->visi_company }}
            </h5>
            <h2 class="header-3">
                Misi
            </h2>
            <ol>
                @foreach ($misi_array as $item)
                    <li class="body-3">
                        {{ $item['misi_company'] }}
                    </li>
                @endforeach
            </ol>
        </div>
        <div class="core-value">
            <h1 class="header-2">
                Core Value
            </h1>
            @foreach ($core_array as $item)
                <div id="col-rev" class="core-wrapper">
                    <h5>{{$item['alphabet']}}</h5>
                    <div class="core-content">
                        <h3 class="header-3">{{$item['title']}}</h3>
                        <h6 class="dropdown-divider"></h6>
                        <h4 class="body-3">{{$item['description']}}</h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
