@section('sejarah-active')
    active
@endsection

@section('content')
    @php
        $company_json = $sejarahs->client_company;
        $company_array = json_decode($company_json, true);
    @endphp

    <div class="content-client">
        <h1 class="header-1">Sejarah Singkat</h1>
        <h3 class="body-1">{{ $sejarahs->sejarah_singkat }} </h3>
        <div class='our-client'>
            <h1 class="header-2">
                Our Client Year to Year
            </h1>
            <div class="our-client-list">
                @foreach ($company_array as $index => $item)
                    @if ($index % 2 === 0)
                        <div class="our-client-item-even">
                            <img src="{{ asset($item['photo_url']) }}" alt="company_logo">
                            <h5 class="header-2">{{ $item['title'] }}</h5>
                        </div>
                    @else
                        <div class="our-client-item-odd">
                            <h5 class="header-2">{{ $item['title'] }}</h5>
                            <img src="{{ asset($item['photo_url']) }}" alt="company_logo">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
