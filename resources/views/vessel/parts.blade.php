@include('partials.head')

<div class="relative flex flex-col bg-white min-h-[100vh] py-8 pb-32 gap-y-4 font-poppins ">

    <x-main-banner image="10.png" />

    <h1 class="text-4xl font-bold ml-4 py-2 pb-3 text-green">Learn About Parts</h1>

    <x-redirectcard 
        href="{{ route('ves.engine') }}" 
        title="Engine"
    />

    <x-redirectcard 
        href="{{ route('ves.ship') }}" 
        title="Ship"
    />
    





</div>

@include('partials.navbar')
@include('partials.foot')