@include('partials.head')

<div class="relative flex flex-col bg-white min-h-[100vh] py-8 pb-32 gap-y-4 font-poppins ">

    <x-main-banner image="5.jpg" />

    <h1 class="text-4xl font-bold ml-4 py-2 pb-3 text-green">INTERNATIONAL ORGANIZATION FOR STANDARDIZATION</h1>

    <x-search-bar />

    <x-landing-card 
        href="#" 
        title="ISO/TC 8: Ships and marine technology"
    />

    <x-landing-card 
        href="#" 
        title="ISO/TC 8/SC 1: Maritime safety"
    />

    <x-landing-card 
        href="#" 
        title="ISO/TC 8/SC 2: Marine environment protection"
    />

    <x-landing-card 
        href="#" 
        title="ISO/TC 8/SC 3: Piping and machinery"
    />

    <x-landing-card 
        href="#" 
        title="ISO/TC 8/SC 4: Outfittingand deck machinery"
    />
    
    





</div>

@include('partials.navbar')
@include('partials.foot')