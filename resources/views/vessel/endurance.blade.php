@include('partials.head')

<div class="relative flex flex-col bg-white min-h-[100vh] py-16 pb-32 gap-y-4 font-poppins ">

    <h1 class="text-3xl font-bold ml-4 py-2 pb-3 text-green">M/T Chelsea Endurance</h1>

    @php
        $images = glob(public_path('assets/images/explore/endurance/*.jpg'), GLOB_BRACE);
    @endphp

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 px-4">
        @foreach ($images as $image)
            <div class="border rounded-lg overflow-hidden shadow-md">
                <img src="{{ asset('assets/images/explore/endurance/' . basename($image)) }}" alt="Image" class="w-full h-auto">
            </div>
        @endforeach
    </div>

</div>

@include('partials.navbar')
@include('partials.foot')