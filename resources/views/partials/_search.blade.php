<!-- Search -->
<form action="/"> <!--default is get method-->
{{--    The form will be submitted to the same page, which is the index.blade.php template.--}}
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <div class="absolute top-4 left-3">
            <i
                class="fa fa-search text-customPurple z-20"
            ></i>
        </div>
        <input
            type="text"
            name="search"
            class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none hover:bg-customLightPink"
            placeholder="Search Anime"
        />
        <div class="absolute top-2 right-2">
            <button
                type="submit"
                class="h-10 w-20 text-white rounded-lg bg-customPurple hover:bg-customDarkPink active:bg-customPurple"
            >
                Search
            </button>
        </div>
    </div>
</form>
