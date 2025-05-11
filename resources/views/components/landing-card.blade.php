@props(['href' => null, 'title', 'imageUrl', 'titleClass' => '', 'subtitle' => '', 'displayImg' => null])

<!-- takes the parameters above, 1st-3rd params are required -->

<div class="flex mx-auto block w-11/12 h-auto max-h-24 rounded-3xl shadow-lg overflow-hidden group relative transition-all duration-700 ease-in-out" 
     x-data="{ isOpen: false }" 
     @click="isOpen = !isOpen"
     :class="{ 'max-h-[1000px]': isOpen, 'max-h-24': !isOpen }">
    <div class="h-full w-full flex overflow-hidden bg-center bg-cover bg-no-repeat transition-all duration-700 ease-in-out"
        style="background-image: url('{{ $imageUrl }}');">
        <div class="w-full h-full {{ isset($imageUrl) && !empty($imageUrl) ? 'bg-greenfilter bg-opacity-50' : 'bg-greenCard' }} flex flex-col p-4 pt-3 transition-all duration-700 ease-in-out">
            <h3 class="text-3xl min-h-24 text-white font-semibold z-50 drop-shadow-greenOutline transition-all duration-700 ease-in-out"
                :class="{ 'min-h-[0px]': isOpen, 'min-h-24': !isOpen }">
                {!! html_entity_decode($title) !!}
            </h3>
            @if($displayImg)
                <div class="flex flex-col gap-y-4 w-full">
                    <div class="w-full overflow-hidden rounded-lg">
                        <img src="{{ $displayImg }}" alt="{{ $title }}" class="w-full h-auto max-h-[400px] object-contain">
                    </div>
                </div>
            @endif
            @if($subtitle)
                <h4 class="text-lg text-white text-justify z-50 drop-shadow-greenOutline py-4 transition-all duration-700 ease-in-out opacity-0"
                    :class="{ 'opacity-100': isOpen, 'opacity-0': !isOpen }">
                    {!! html_entity_decode($subtitle) !!}
                </h4>
            @endif
            @if($href)
                <a href="{{ $href }}" target="_blank" class="m-auto pt-3 transition-all duration-700 ease-in-out opacity-0"
                   :class="{ 'opacity-100': isOpen, 'opacity-0': !isOpen }">
                    <button class="bg-cta text-zinc-600 rounded-full px-4 py-2 transform transition-all duration-700 ease-in-out hover:scale-105">
                        <div class="flex items-center justify-center">
                            Learn More
                        </div>
                    </button>
                </a>
            @endif
        </div>
    </div>
</div>
