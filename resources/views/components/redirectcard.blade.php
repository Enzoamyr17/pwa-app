@props(['href', 'title', 'imageUrl', 'titleClass' => '', 'subtitle' => ''])

<!-- takes the parameters above, 1st-3rd params are required -->

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'flex mx-auto block w-11/12 h-auto min-h-[4rem] rounded-3xl shadow-lg overflow-hidden']) }}>
    <div class="h-full w-full flex overflow-hidden bg-center bg-cover bg-no-repeat"
        style="background-image: url('{{ $imageUrl }}');">
        <div class="w-full h-full {{ isset($imageUrl) && !empty($imageUrl) ? 'bg-greenfilter bg-opacity-50' : 'bg-greenCard' }} flex flex-col p-4">
            <h3 class="text-3xl text-white font-semibold z-50 drop-shadow-greenOutline {{ $titleClass }}">
                {{ $title }}
            </h3>
            <h4 class="text-3xl text-white font-semibold z-50 drop-shadow-greenOutline {{ $titleClass }}">
                {{ $subtitle }}
            </h4>
        </div>
    </div>
</a>
