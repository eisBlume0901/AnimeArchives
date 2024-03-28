@if(session()->has('success'))
{{--    x-data means that we are using AlpineJS to manage the state of the div. x-init is used to set the div to be hidden after 3 seconds. x-show is used to show the div if the show variable is true. The div is shown for 3 seconds and then hidden.--}}
    <div x-data="{show: true}" x-init="setTimeout( () => show = false, 3000)" x-show="show"
         class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-customLightPink text-customPurple px-48 py-3">
        <p>{{session('success')}}</p>
    </div>
@endif
