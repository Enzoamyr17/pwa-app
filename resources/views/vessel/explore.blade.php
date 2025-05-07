@include('partials.head')

<div class="relative flex flex-col bg-white min-h-[100vh] py-8 pb-32 gap-y-4 font-poppins ">

    <x-main-banner image="10.png" />

    <h1 class="text-4xl font-bold ml-4 py-2 pb-3 text-green">ABOUT THE VESSEL</h1>

    <x-redirectcard 
        href="{{ route('ves.providence') }}" 
        title="Vessel 1: Providence"
    />

    <x-redirectcard 
        href="{{ route('ves.endurance') }}" 
        title="Vessel 2: Endurance"
    />

</div>

@include('partials.navbar')
@include('partials.foot')