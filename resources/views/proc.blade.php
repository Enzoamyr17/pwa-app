@include('partials.head')

<div class="relative flex flex-col bg-white min-h-[100vh] py-8 pb-32 gap-y-4">

    <x-main-banner image="13.png" />

    <h1 class="text-5xl font-bold ml-4 py-2 pb-3 text-green">PROCESS</h1>

    <x-search-bar />

    @foreach($results as $item)
    <x-landing-card 
        href="{{ $item->link }}"
        title="{{ $item->title }}"
        subtitle="{{ $item->desc }}"
    />
    @endforeach

</div>

@include('partials.navbar')
@include('partials.foot')