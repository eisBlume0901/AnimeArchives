@props(['animeElement'])
{{--The purpose of props is to allow the parent component to pass data to the child component. --}}
{{--In this case, the parent component is resources/views/index.blade.php and the child component --}}
{{--is resources/views/components/anime-card.blade.php. The animeElement is the data that is being passed --}}
{{--from the parent component to the child component. The animeElement is an instance of the Anime model.--}}

<x-card class="hover:bg-customLightPink">
    <div class="flex">
        {{--                Have to update the hidden attribute--}}
        <img
            class="hidden w-48 mr-6 md:block"
            {{--                    not showing anything with the animeDirectoryDummy have to be configured--}}
            src="animeDirectoryDummy/Frieren_Beyond_Journey's_End.jpg"
            alt=""
        />
        <div>
            <div class="">
                <h3 class="text-2xl text-customPurple text-customPurple hover:text-customDarkPink">
                    <a href="/anime/{{$animeElement->id}}">{{$animeElement->title}}</a>
                </h3>
            </div>
            <div class="text-md text-customPurple mt-2 mb-3">{{$animeElement->episodes}} Episodes</div>
{{--            Use a x-card template (Blade custom component) card.blade.php--}}
            <x-anime-genres :genresCSV="$animeElement->genres"></x-anime-genres>
            <x-anime-streaming-platforms :streamingPlatformsCSV="$animeElement->streaming_platforms"></x-anime-streaming-platforms>
            <div class="text-customPurple mt-4 mx-1.5">
                <i class="fa-solid fa-tv mr-1"></i> {{$animeElement->broadcast}}
            </div>
        </div>
    </div>
</x-card>
