@include('partials.head')


<div class="relative flex flex-col bg-white min-h-[100vh] py-8 pb-32 gap-y-4 font-poppins text-green">
    
    <div class="rounded-[20px] w-11/12 h-44 mx-auto bg-green flex">
        <img src="{{ asset('assets/images/marina.png') }}" class="h-3/4 aspect-auto m-auto">
    </div>

    <h1 class="text-5xl font-bold ml-4 py-2 pb-3">
        @yield('title')
    </h1>

    <div class="flex flex-col text-2xl gap-y-2 px-6">
        @yield('contact')
    </div>

    <div class="flex flex-col text-4xl gap-y-2 px-6">
        <h1>About @yield('contentHeader')</h1>
    </div>

    <div class="flex flex-col text-2xl gap-y-2 px-6">
        @yield('content')
    </div>

    
    <a href="tel:@yield('phone_number')" class="absolute sticky bottom-8 mt-20 transform -translate-y-full bg-green flex flex-nowrap rounded-full px-4 py-2 w-1/2 text-white text-4xl font-bold m-auto z-50">
        <div class="m-auto flex flex-nowrap gap-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="my-auto lucide lucide-phone-icon lucide-phone">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            Call
        </div>
    </a>

</div>

@include('partials.navbar')
@include('partials.foot')