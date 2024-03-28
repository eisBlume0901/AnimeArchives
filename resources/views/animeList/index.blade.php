<x-layout>
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @if(count($animeList) == 0)
            <h2>No listings found</h2>
        @endif

        @foreach ($animeList as $animeElement)
            <x-anime-card :animeElement="$animeElement">
                {{--The x-anime-card component is a custom Blade component that we created in anime-card.blade.php.--}}
                {{--We also included the animeElement property in the x-anime-card component.--}}
                {{--The animeElement is an instance of the Anime model.--}}
            </x-anime-card>
        @endforeach
    </div>
    <div class="mt-6 p-4 text-customPurple">
        {{$animeList->links()}}
{{--        links() method is used to display the pagination links. The links() method is called on the $animeList variable, which is an instance of the LengthAwarePaginator class. The LengthAwarePaginator class is a paginator class that is used to paginate the results of a query. The links() method generates the pagination links that are displayed at the bottom of the page. The links() method accepts an optional parameter that specifies the number of links that should be displayed on each side of the current page. If no parameter is provided, the default value of 3 is used.--}}
    </div>
</x-layout>

