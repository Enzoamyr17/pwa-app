@include('partials.head')

<div class="relative flex flex-col bg-white min-h-[100vh] py-8 pb-32 gap-y-4 font-poppins text-green">
    
    <x-main-banner image="12.png" />

    <h1 class="text-4xl font-bold ml-4 py-2 pb-3 text-green">Request for Parts</h1>

    @foreach($requests as $item)

        <x-request-card 
            href="{{ route('req.view', ['id' => $item->id]) }}" 
            partname="{{ $item->partname }}" 
            ordernum="{{ $item->partnum }}"
            status="{{ $item->status }}"
        />

    @endforeach

</div>

@include('partials.navbar')
@include('partials.foot')