@include('partials.head')

<div class="relative flex flex-col bg-white min-h-[100vh] py-8 pb-32 gap-y-4 font-poppins ">

    <x-main-banner image="10.png" />

    <h1 class="text-4xl font-bold ml-4 py-2 pb-3 text-green">ABOUT THE VESSEL</h1>

    <x-redirectcard 
        href="{{ route('ves.parts') }}" 
        title="Learn About Vessel Parts"
        imageUrl="{{ asset('assets/images/9.png') }}"
    />

    <x-redirectcard 
        href="{{ route('ves.explore') }}" 
        title="Explore the Vessel"
        imageUrl="{{ asset('assets/images/14.png') }}"

    />

</div>

@include('partials.navbar')
@include('partials.foot')