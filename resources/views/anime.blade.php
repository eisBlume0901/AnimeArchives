@extends('layout')

@section('content')
@include('partials._search')
    <!doctype html>
<html lang="en">
    <a
        href="index.html"
        class="inline-block text-customPurple ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded">
            <div
                class="flex flex-col items-center justify-center text-center"
            >
                <img
                    class="w-48 mr-6 mb-6"
                    src="../Frieren Beyond Journey's End.jpg"
                    alt=""
                />

                <h3 class="text-2xl mb-2 text-customPurple">
                    {{$anime->title}}
                </h3>
                <div class="text-lg mb-4 text-customPurple">{{$anime->episodes}} Episodes</div>
                <div class="text-xl font-bold mb-4 text-customPurple">
                    Studio {{$anime->studio}}
                </div>
                <ul class="flex">
                    @php
                        $genres = array_map('trim', explode(',', $anime->genres));
                    @endphp
                    @foreach($genres as $genre)
                    <li
                        class="bg-customPurple text-white rounded-xl px-3 py-1 mr-2 hover:text-customLightPink hover:bg-customDarkPink"
                    >
                        <a href="#">{{$genre}}</a>
                    @endforeach
                </ul>
                <div class="text-lg text-customPurple my-4">
                    <i class="fa-solid fa-tv"></i> {{$anime->broadcast}}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl text-customPurple font-bold mb-4">Summary</h3>
                    <div class="text-lg space-y-6">
                        <p>
                            {{$anime->description}}
                        </p>

                        <ul class="flex">
                            <li>
                                <a href=""></a>
                            </li>
                        </ul>
                        <a
                            href="{{$anime->website}}"
                            target="_blank"
                            class="block bg-customPurple text-white py-2 rounded-xl hover:bg-customDarkPink hover:text-customLightPink active:bg-customPurple active:text-customLightPink"
                        ><i class="fa-solid fa-globe"></i> Visit
                            Official Website</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-customPurple text-white h-24 mt-24 opacity-90 md:justify-center"
>
    <p class="ml-2">Copyright &copy; 2024, All Rights reserved</p>

    <a
        href="create.html"
        class="absolute top-1/3 right-10 bg-customPurple text-white py-2 px-5"
    >Post Anime</a
    >
</footer>
</body>
</html>

@endsection

