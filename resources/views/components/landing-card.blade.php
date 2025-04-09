<a href="{{ $href }}" class="flex mx-auto block w-11/12 h-auto min-h-[4rem] rounded-3xl shadow-lg overflow-hidden">
    <div class="h-full w-full flex overflow-hidden bg-center bg-cover bg-no-repeat"
    style="background-image: url('{{ $imageUrl }}');">
        <div class="w-full h-full {{ isset($imageUrl) && !empty($imageUrl) ? 'bg-greenfilter bg-opacity-50' : 'bg-greenCard' }} flex p-4 py-8">
            <h3 class="text-3xl text-left text-white font-semibold z-50 drop-shadow-greenOutline">{{ $title }}</h3>
        </div>
    </div>
</a>
