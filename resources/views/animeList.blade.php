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
                    src="Frieren Beyond Journey's End.jpg"
                    alt=""
                />
                <div>
                    <div class="">
                        <h3 class="text-2xl hover:text-customDarkPink">
{{--                            Instead of using the [] notation (i.e., {{$animeElement['title']}}),--}}
{{--                            we can use the Eloquent model to fetch data from the database.--}}
{{--                            This is a more object-oriented approach and is the recommended way to--}}
{{--                            fetch data from the database.--}}
                            <a href="./anime/{{$animeElement->id}}">{{$animeElement->title}}</a>
                        </h3>
                    </div>
                    <div class="text-md mt-2 mb-3">{{$animeElement->episodes}} Episodes</div>

                    <ul class="flex">
                        <li
                            class="flex items-center justify-center bg-customPurple text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">Adventure</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-customPurple text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">Action</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-customPurple text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">Drama</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-customPurple text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">Fantasy</a>
                        </li>
                    </ul>
                    <div class="mt-4">
                        <h4 class="mb-2 text-lg">Streaming Platforms</h4>
                        <ul class="flex flex-row gap-3">
                            <li>
                                <a href="https://www.crunchyroll.com"><img src="https://cdn.iconscout.com/icon/free/png-512/crunchyroll-4062809-3357695.png"
                                                                           alt="Crunchyroll logo" width="30" class="rounded-2xl bg-white border-2 border-customLightPink"></a>
                            </li>
                            <li>
                                <a href="https://www.netflix.com"><img src="https://vignette2.wikia.nocookie.net/logopedia/images/b/b2/NetflixIcon2016.jpg/revision/latest/scale-to-width-down/2000?cb=20160620223003"
                                                                       alt="Netflix logo" width="30" class="rounded-2xl bg-white border-2 border-customLightPink"></a>
                            </li>
                            <li>
                                <a href=""><img src="https://th.bing.com/th/id/OIP.BZDUzewveeEejbZ5rdSetQHaHa?rs=1&pid=ImgDetMain"
                                                alt="Aniplus TV logo" width="30" back class="rounded-2xl bg-white border-2 border-customLightPink"></a>
                            </li>
                            <li>
                                <a href=""><img src="https://img.icons8.com/color/452/bilibili.png" alt="Bilibili Global logo" width="30" class="rounded-2xl bg-white border-2 border-customLightPink"></a>
                            </li>
                            <li>
                                <a href=""><img src="https://th.bing.com/th/id/OIP.PCg0iBIJYDpjE6ReDPSB1gHaHa?rs=1&pid=ImgDetMain" alt="Muse Asia logo" width="30" class="rounded-2xl bg-white border-2 border-customLightPink"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="text-sm mt-4 mx-1.5">
                        <i class="fa-solid fa-tv mr-1"></i>{{$animeElement->broadcast}}
                    </div>
                </div>
            </div>
        </div>
@endforeach
    </div>
@endsection
