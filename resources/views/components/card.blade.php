<div {{$attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6'])}}>
{{--The attributes property is a collection of all the attributes passed to the component. --}}
{{--We use the merge method to merge the class attribute with the default classes we want to apply to the component.--}}
{{--Check the <x-card></x-card> in the animeList.blade.php and anime.blade.php files.--}}
    {{$slot}}
    {{--    The slot is a placeholder for the content that will be passed from the parent component to the child component. --}}
    {{--    The slot is a way to pass custom content into a Blade component from a parent view.--}}
</div>
