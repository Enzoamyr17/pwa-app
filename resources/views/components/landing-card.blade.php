@props(['href', 'title', 'imageUrl', 'titleClass' => '', 'subtitle' => ''])

<!-- takes the parameters above, 1st-3rd params are required -->

<div class="flex mx-auto block w-11/12 h-auto max-h-24 rounded-3xl shadow-lg overflow-hidden group relative hover:max-h-[500px] transition-all duration-500 ease-in-out">
    <div class="h-full w-full flex overflow-hidden bg-center bg-cover bg-no-repeat transition-transform duration-300"
        style="background-image: url('{{ $imageUrl }}');">
        <div class="w-full h-full {{ isset($imageUrl) && !empty($imageUrl) ? 'bg-greenfilter bg-opacity-50' : 'bg-greenCard' }} flex flex-col p-4 pt-3 transition-all duration-300">
            <h3 class="text-3xl min-h-24 group-hover:min-h-[0px] text-white font-semibold z-50 drop-shadow-greenOutline  transition-all duration-300">
                {{ $title }}
            </h3>
            @if($subtitle)
                <h4 class="text-lg text-white text-justify z-50 drop-shadow-greenOutline py-4 transition-all duration-300">
                    {{ $subtitle }}
                </h4>
            @endif
            <a href="{{ $href }}" target="_blank" class="m-auto pt-3">
                <button class="bg-cta text-zinc-600 rounded-full px-4 py-2">
                    <div class="flex items-center justify-center">
                        Learn More
                    </div>
                </button>
            </a>
        </div>
    </div>
</div>
