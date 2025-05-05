@include('partials.head')

    @include('layouts.navigation')

    <div class="shadow">
        <div class="max-w-7xl text-2xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            Dashboard
        </div>
    </div>

    
    <!-- Requests -->
    <div class="py-6 mt-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 bg-gray-200 h-14">
                    <h1 class="text-2xl">Requests</h1>

                    @foreach($requests as $item)
                    <div class="flex flex-nowrap h-20">
                        <div class="m-auto flex w-1/2 h-full">
                            <h1 class="my-auto pl-4">{{ $item->partname }}</h1>
                        </div>
                        <div class="m-auto flex w-1/2 h-full">
                            <select class="m-auto bg-white border border-gray-300 rounded-lg px-4 py-2 text-gray-900 uppercase">
                                
                                <option value="{{ $item->status }}">{{ $item->status }}</option>
                                @foreach(['REQUESTED', 'APPROVED', 'DISAPPROVED', 'JUSTIFICATION'] as $status)
                                    @if($status !== $item->status)
                                        <option value="{{ $status }}">{{ $status }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <!-- add buttons -->
    <div class="shadow">
        <div class="flex max-w-7xl text-lg mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <button onclick="toggle('mod')" class="m-auto bg-zinc-600 rounded-xl text-white px-4 py-1">Add Module</button>
            <button onclick="toggle('proc')" class="m-auto bg-zinc-600 rounded-xl text-white px-4 py-1">Add Process</button>
        </div>
    </div>

    <!-- forms -->
    <div class="h-auto">
        <div id="mod" class="hidden flex flex-col overflow-hidden gap-y-2">
            <form method="POST" action="/add-module" class="w-3/4 m-auto flex flex-col">
                @csrf
                <input class="w-full mb-2" type="text" name="title" placeholder="Module Title" required>
                <input class="w-full mb-2" type="text" name="link" placeholder="Module Link" required>
                <button type="submit" class="mt-6 py-1 px-4 bg-notwhite w-1/3 m-auto rounded-xl">Add Module</button>
            </form>
        </div>
        
        <div id="proc" class="hidden flex flex-col overflow-hidden gap-y-2">
            <form method="POST" action="/add-process" class="w-3/4 m-auto flex flex-col">
                @csrf
                <input class="w-full mb-2" type="text" name="title" placeholder="Process Title" required>
                <input class="w-full mb-2" type="text" name="link" placeholder="Process Link" required>
                <button type="submit" class="mt-6 py-1 px-4 bg-notwhite w-1/3 m-auto rounded-xl">Add Process</button>
            </form>
        </div>
    </div>

    <!-- modules and processes -->
    <div class="py-6 mt-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 bg-gray-200">
                    <h1 class="text-2xl">Processes</h1>

                    @foreach($processes as $item)
                    <div class="flex flex-nowrap h-20">
                        <div class="m-auto flex w-1/2 h-full">
                            <h1 class="my-auto pl-4">{{ $item->title }}</h1>
                        </div>
                        <div class="m-auto flex w-1/2 h-full">
                            <form method="POST" action="/delete-process" class="m-auto" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button type="submit" class="bg-red-600 text-white rounded-lg px-4">Delete</button>
                            </form>
                        </div>
                    </div>
                    @endforeach

                    <h1 class="text-2xl mt-6 pt-6">Modules</h1>

                    @foreach($modules as $item)
                    <div class="flex flex-nowrap h-20">
                        <div class="m-auto flex w-1/2 h-full">
                            <h1 class="my-auto pl-4">{{ $item->title }}</h1>
                        </div>
                        <div class="m-auto flex w-1/2 h-full">
                            <form method="POST" action="/delete-module" class="m-auto" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button type="submit" class="bg-red-600 text-white rounded-lg px-4">Delete</button>
                            </form>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

<script>

    function toggle(el) {
        let target = document.getElementById(el);
        let sibling = el === 'mod'
            ? document.getElementById('proc')
            : document.getElementById('mod');
        
        if(sibling.classList.contains('hidden')){
            // Do nothing if sibling already has the 'hidden' class
        } else {
            sibling.classList.toggle('hidden');
        }

        target.classList.toggle('hidden');

    }

</script>

@include('partials.foot')
