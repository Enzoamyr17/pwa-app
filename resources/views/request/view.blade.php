@include('partials.head')

<div class="relative flex flex-col bg-white min-h-[100vh] py-8 pb-32 gap-y-4 font-poppins text-green">
    @php
        $statusColors = [
            'REQUESTED' => 'bg-zinc-500',
            'APPROVED' => 'bg-green',
            'DISAPPROVED' => 'bg-red-600',
            'JUSTIFICATION' => 'bg-yellow-600',
        ];

        $bgColor = $statusColors[$request->status] ?? 'bg-gray-200';
    @endphp
    <div class="mx-auto p-2 w-full">
        <h1 class="text-4xl font-bold text-green">{{ $request->partname }}</h1>
        <p class="text-2xl text-green">Request Order No.: <span class="font-semibold">{{ $request->id }}</span></p>
        <p class="text-2xl text-green">Date Requested: <span class="font-semibold">{{ $request->requested_at }}</span></p>

        <div class="my-2">
        <span class="text-2xl text-green font-semibold">Status:</span>
        <span class="ml-2 inline-block px-3 py-1 text-xl font-bold text-white {{ $bgColor }} rounded-full">{{ $request->status }}</span>
        </div>

        <div class="space-y-2 mt-4">
        <div>
            <p class="text-2xl font-semibold text-green">Part Number</p>
            <div class="bg-gray-200 px-3 py-1 rounded-lg">{{ $request->partnum }}</div>
        </div>
        <div>
            <p class="text-2xl font-semibold text-green">Drawing Number</p>
            <div class="bg-gray-200 px-3 py-1 rounded-lg">{{ $request->drawnum }}</div>
        </div>
        <div>
            <p class="text-2xl font-semibold text-green">Item/Position Number</p>
            <div class="bg-gray-200 px-3 py-1 rounded-lg">{{ $request->posnum }}</div>
        </div>
        <div>
            <p class="text-2xl font-semibold text-green">Material Number</p>
            <div class="bg-gray-200 px-3 py-1 rounded-lg">{{ $request->matnum }}</div>
        </div>
        <div>
            <p class="text-2xl font-semibold text-green">IMPA Number</p>
            <div class="bg-gray-200 px-3 py-1 rounded-lg">{{ $request->impa }}</div>
        </div>
        <div>
            <p class="text-2xl font-semibold text-green">Article Number</p>
            <div class="bg-gray-200 px-3 py-1 rounded-lg">{{ $request->artnum }}</div>
        </div>
        <div>
            <p class="text-xl font-semibold text-green">Specifications/Description/Details</p>
            <div class="bg-gray-200 px-3 py-2 rounded-lg text-2xl">
                {{ $request->spec }}
            </div>
        </div>
        <div>
            <p class="text-2xl font-semibold text-green">Time Period</p>
            <div class="bg-gray-200 px-3 py-1 rounded-lg">{{ $request->timeper }}</div>
        </div>
        </div>
    </div>

</div>

@include('partials.navbar')
@include('partials.foot')