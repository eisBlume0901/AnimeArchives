<x-layout>
    <x-card
        class="bg-gray-50 border border-gray-200 p-10 rounded max-w-3xl mx-auto mt-24"
    >
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create an Anime
            </h2>
            <p class="mb-4">Post an anime for the world to see!</p>
        </header>

        <form action="/anime" method="POST">
{{--            This is a CSRF token that Laravel uses to protect against cross-site request forgery attacks.--}}
            @csrf
            <div class="mb-6">
                <label
                    for="title"
                    class="inline-block text-lg mb-2"
                >Title</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="title"
                    id="title"
                />

                @error('title')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="description"
                    class="inline-block text-lg mb-2"
                >
                    Sypnosis
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="description"
                    id="description"
                    rows="10"
                    placeholder="The story is all about..."
                ></textarea>

                @error('description')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="episodes" class="inline-block text-lg mb-2"
                >Episodes</label
                >
                <input
                    type="number"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="episodes"
                    id="episodes"
                />

                @error('episodes')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="genres" class="inline-block text-lg mb-2">
                    Genres (Comma Separated)
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="genres"
                    id="genres"
                    placeholder="Example: Adventure, Comedy, etc"
                />

                @error('genres')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label
                    for="start_aired_date"
                    class="inline-block text-lg mb-2"
                >Start Aired Date</label
                >
                <input
                    type="date"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="start_aired_date"
                    id="start_aired_date"
                />

                @error('start_aired_date')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="end_aired_date"
                    class="inline-block text-lg mb-2"
                >End Aired Date</label
                >
                <input
                    type="date"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="end_aired_date"
                    id="end_aired_date"
                />

                @error('end_aired_date')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="broadcast" class="inline-block text-lg mb-2"
                >Broadcast</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="broadcast"
                    id="broadcast"
                    placeholder="Example: Fridays at 23:00 (JST)"
                />

                @error('broadcast')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="studio"
                    class="inline-block text-lg mb-2"
                >
                    Studio
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="studio"
                    id="studio"
                />

                @error('studio')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="website"
                    class="inline-block text-lg mb-2"
                >
                    Official Website
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="website"
                    id="website"
                />
                @error('website')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="streaming_platforms" class="inline-block text-lg mb-2">
                    Streaming Platforms (Comma Separated)
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="streaming_platforms"
                    id="streaming_platforms"
                    placeholder="Example: Crunchyroll, Netflix, etc"
                />
                @error('streaming_platforms')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button
                    class="bg-customPurple text-white rounded py-2 px-4 hover:bg-customDarkPink hover:text-customLightPink active:bg-customPurple text-white"
                >
                    Create Anime
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
