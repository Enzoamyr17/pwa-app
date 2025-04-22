@props(['href', 'partname', 'ordernum', 'status'])

<!-- takes the parameters above, 1st-3rd params are required -->

@php
    $statusColors = [
        'REQUESTED' => 'bg-zinc-500',
        'APPROVED' => 'bg-green',
        'DISAPPROVED' => 'bg-red-600',
        'JUSTIFICATION' => 'bg-yellow-600',
    ];

    $bgColor = $statusColors[$status] ?? 'bg-gray-200';
@endphp

<a href="{{ $href }}">
    <div class="h-full w-full flex flex-wrap px-6 my-2 shadow-md">
        <div class="flex flex-col w-2/3">
            <h3 class="my-auto text-2xl text-green font-semibold z-50">
                {{ $partname }}
            </h3>
            <h4 class="my-auto text-xl text-green z-50">
                {{ $ordernum }}
            </h4>
        </div>

        <div class="text-white m-auto {{ $bgColor }} w-1/3 text-center py-1 rounded-xl">
            {{ $status }}
        </div>
    </div>
</a>
