@include('partials.head')

<div class="h-[67vw] bg-fixed bg-top bg-contain bg-no-repeat bg-[length:120%] z-10" style="background-image: url('assets/images/2.jpg');">
    <div class="w-full h-full bg-greenfilter opacity-50">

    </div>

</div>

<div class="relative m-auto -mt-28 bg-white h-auto min-h-[60vh] flex flex-col gap-y-4 w-full rounded-t-[24px] z-40 py-8 pb-32">

    <x-search-bar />


    <div class="flex mx-auto block w-11/12 aspect-video min-h-44 bg-greenfilter rounded-3xl shadow-lg overflow-hidden">
        <div class="h-full w-full flex overflow-hidden bg-center bg-cover bg-no-repeat bg-[length:120%]"
        style="background-image: url('assets/images/3.jpg');">
            <div class="w-full h-full bg-greenfilter flex flex-col bg-opacity-50 p-2 gap-2">
                <h3 class="mx-auto text-[10vw] text-white font-semibold z-50 drop-shadow-greenOutline">DO YOU KNOW?</h3>
                <p class="text-white drop-shadow-greenOutline mx-auto text-[5vw] text-justify text-balance px-6 leading-none">Port refers to the left side of the
                    ship, when facing forward. While,
                    Starboard refers to the right side
                    of the ship, when facing forward.
                </p>
            </div>
        </div>
    </div>

    <h1 class="text-5xl font-bold ml-4 py-2 pb-3 text-green">FEATURES</h1>

    <x-landing-card 
        href="#" 
        title="Learn about the processes"
        imageUrl="{{ asset('assets/images/4.jpg') }}"
    />
    
    <x-landing-card 
        href="#" 
        title="Learn about the ISO"
        imageUrl="{{ asset('assets/images/6.jpg') }}"
    />
    
    <x-landing-card 
        href="#" 
        title="Lorem ipsum dolor sit amet"
    />
    
</div>



@include('partials.navbar')
@include('partials.foot')