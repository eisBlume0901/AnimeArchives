@extends('layout')

@section('content')
@include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
@if(count($animeList) == 0)
    <h2>No listings found</h2>
@endif

@foreach ($animeList as $animeElement)
        <div class="bg-gray-50 border border-gray-200 rounded p-6 hover:bg-customLightPink">
            <div class="flex">
                {{--                Have to update the hidden attribute--}}
                <img
                    class="hidden w-48 mr-6 md:block"
                    src="../Frieren%20Beyond%20Journey's%20End.jpg"
                    alt=""
                />
                <div>
                    <div class="">
                        <h3 class="text-2xl text-customPurple text-customPurple hover:text-customDarkPink">
                            {{--                            Instead of using the [] notation (i.e., {{$animeElement['title']}}),--}}
                            {{--                            we can use the Eloquent model to fetch data from the database.--}}
                            {{--                            This is a more object-oriented approach and is the recommended way to--}}
                            {{--                            fetch data from the database.--}}
                            <a href="show.html">{{$animeElement->title}}</a>
                        </h3>
                    </div>
                    <div class="text-md text-customPurple mt-2 mb-3">{{$animeElement->episodes}} Episodes</div>

                    <ul class="flex">
                        @php
                            $genres = explode(',', $animeElement->genres);
                        @endphp
                        @foreach($genres as $genre)
                        <li
                            class="flex items-center justify-center bg-customPurple text-white hover:text-customLightPink hover:bg-customDarkPink rounded-xl py-1 px-3 mr-2 text-xs"
                        >

                                <a href="#">{{$genre}}</a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="mt-4">
                        <h4 class="mb-2 text-lg text-customPurple">Streaming Platforms</h4>
                        <ul class="list-none flex flex-row gap-3">
                            @php
                                $streamingPlatforms = explode(',', $animeElement->streaming_platforms);
                                $streamingPlatformsUrlsWithLogos =
                                [

                                        'Crunchyroll' =>
                                            [
                                                'url' => 'https://www.crunchyroll.com/',
                                                'logo' => 'https://cdn.iconscout.com/icon/free/png-512/crunchyroll-4062809-3357695.png'
                                            ],
                                         'Netflix' =>
                                            [
                                                'url' => 'https://www.netflix.com/',
                                                'logo' => 'https://vignette2.wikia.nocookie.net/logopedia/images/b/b2/NetflixIcon2016.jpg/revision/latest/scale-to-width-down/2000?cb=20160620223003'
                                            ],
                                        'Aniplus TV' =>
                                            [
                                                'url' => 'https://www.aniplus-asia.com/',
                                                'logo' => 'https://th.bing.com/th/id/OIP.BZDUzewveeEejbZ5rdSetQHaHa?rs=1&pid=ImgDetMain'
                                            ],
                                        'Bilibili Global' =>
                                            [
                                                'url' => 'https://www.bilibili.tv/',
                                                'logo' => 'https://img.icons8.com/color/452/bilibili.png'
                                            ],
                                        'Muse Asia' =>
                                            [
                                                'url' => 'https://en.e-muse.com.tw/',
                                                'logo' => 'https://th.bing.com/th/id/OIP.PCg0iBIJYDpjE6ReDPSB1gHaHa?rs=1&pid=ImgDetMain'
                                            ]

                                ];
                            @endphp
                            @foreach($streamingPlatforms as $streamingPlatform)
                            <li>
                                <a href="{{$streamingPlatformsUrlsWithLogos[trim($streamingPlatform)]['url']}}">
                                    <img
                                        width="30"
                                        class="rounded-2xl bg-white border-2 border-customLightPink"
                                        src="{{$streamingPlatformsUrlsWithLogos[trim($streamingPlatform)]['logo']}}"
                                        alt="{{$streamingPlatform}} logo"
                                    />
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="text-customPurple mt-4 mx-1.5">
                        <i class="fa-solid fa-tv mr-1"></i> {{$animeElement->broadcast}}
                    </div>
                </div>
            </div>
        </div>
@endforeach
    </div>
@endsection
