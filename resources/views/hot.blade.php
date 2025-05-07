@include('partials.head')

<div class="relative flex flex-col bg-white min-h-[100vh] py-8 pb-32 gap-y-4 font-poppins ">

    <x-main-banner image="7.png" />

    <h1 class="text-4xl font-bold ml-4 py-2 pb-3 text-green">Hotlines</h1>

    <x-redirectcard 
        href="{{ route('hotl.EnforcementService') }}"
        title="Enforcement Service"
        subtitle="(02) 8524-9126"
        titleClass="m-auto text-center"
    />

    <x-redirectcard 
        href="#" 
        title="Manpower Development Service"
        titleClass="m-auto text-center"
        subtitle="(02) 8524-6517"
    />

    <x-redirectcard 
        href="#" 
        title="Domestic Shipping Service"
        titleClass="m-auto text-center"
        subtitle="(02) 8525-5030"
    />

    <x-redirectcard 
        href="#" 
        title="Maritime Safety Service"
        titleClass="m-auto text-center"
        subtitle="(02) 8523-5030"
    />

    <x-redirectcard 
        href="#" 
        title="Franchising Service"
        titleClass="m-auto text-center"
        subtitle="(02) 8521-8045"
    />

    <x-redirectcard 
        href="#" 
        title="Shipyards Regulation Service"
        titleClass="m-auto text-center"
        subtitle="(02) 8525-7212"
    />

</div>

@include('partials.navbar')
@include('partials.foot')