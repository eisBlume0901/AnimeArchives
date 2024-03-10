@props(['streamingPlatformsCSV'])

@php
    $streamingPlatforms = array_map('trim', explode(',', $streamingPlatformsCSV));
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

<div class="mt-4">
    <h4 class="mb-2 text-lg text-customPurple">Streaming Platforms</h4>
    <ul class="list-none flex flex-row gap-3">
        @foreach($streamingPlatforms as $streamingPlatform)
            <li>
                <a href="{{$streamingPlatformsUrlsWithLogos[$streamingPlatform]['url']}}" target="_blank">
                    <img
                        width="30"
                        class="rounded-2xl bg-white border-2 border-customLightPink"
                        src="{{$streamingPlatformsUrlsWithLogos[$streamingPlatform]['logo']}}"
                        alt="{{$streamingPlatform}} logo"
                    />
                </a>
            </li>
        @endforeach
    </ul>
</div>
