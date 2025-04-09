@include('partials.head')

<div class="relative flex flex-col bg-white min-h-[100vh] py-8 pb-32 gap-y-4">

    <x-main-banner image="13.png" />

    <h1 class="text-5xl font-bold ml-4 py-2 pb-3 text-green">PROCESS</h1>

    <x-search-bar />

    <x-landing-card 
        href="#" 
        title="Awareness of Locations in which an Emergency may occur"
    />

    <x-landing-card 
        href="#" 
        title="Response Procedures in an Emergency"
    />

    <x-landing-card 
        href="#" 
        title="Maximize Effective Use of Personnel during an Emergency"
    />

</div>

@include('partials.navbar')
@include('partials.foot')