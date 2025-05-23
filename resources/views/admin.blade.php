@include('partials.head')

    @include('layouts.navigation')

    <div class="shadow">
        <div class="max-w-7xl text-2xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            Dashboard
        </div>
    </div>

    <!-- Requests -->
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div id="reqDD" class="p-6 text-gray-900 bg-gray-200 h-20 overflow-hidden">
                    <div class="flex flex-nowrap mb-6">
                        <h1 class="m-auto ml-0 text-2xl pb-2">Requests</h1>
                        <button onclick="drop('reqDD','reqSVG','reqSVG2')" class="m-auto mr-0">
                            <svg id="reqSVG" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down-icon lucide-chevron-down"><path d="m6 9 6 6 6-6"/></svg>
                            <svg id="reqSVG2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up-icon lucide-chevron-up hidden"><path d="m18 15-6-6-6 6"/></svg>
                        </button>
                    </div>

                    @foreach($requests as $item)
                    <div id="req{{ $item->id }}DD" class="flex flex-col h-14 shadow overflow-hidden">
                        <div class="flex flex-nowrap p-4 w-full h-14">
                            <h1 class="w-full">{{ $item->partname }}</h1>
                            <button onclick="drop('req{{ $item->id }}DD','req{{ $item->id }}SVG','req{{ $item->id }}SVG2')" class="">
                                <svg id="req{{ $item->id }}SVG" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down-icon lucide-chevron-down"><path d="m6 9 6 6 6-6"/></svg>
                                <svg id="req{{ $item->id }}SVG2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up-icon lucide-chevron-up hidden"><path d="m18 15-6-6-6 6"/></svg>
                            </button>
                        </div>
                        <div class="p-6 bg-notwhite">
                            @foreach($item->getAttributes() as $key => $value)
                                @if($key == 'status')
                                    <div class="flex flex-nowrap w-full py-4">
                                        <h1 class="w-3/4 font-semibold">Status</h1>
                                        <select 
                                            onchange="updateRequestStatus(this, {{ $item->id }})"
                                            class="m-auto mr-0 bg-white border border-gray-300 rounded-lg px-4 py-2 text-gray-900 uppercase"
                                        >
                                            <option value="{{ $value }}">{{ $value }}</option>
                                            @foreach(['REQUESTED', 'APPROVED', 'DISAPPROVED', 'JUSTIFICATION'] as $status)
                                                @if($status !== $value)
                                                    <option value="{{ $status }}">{{ $status }}</option>
                                                @endif
                                            @endforeach
                                        </select>

                                    </div>
                                @elseif($key == 'partname')
                                    <div class="flex flex-nowrap w-full py-4">
                                        <h1 class="w-3/4 font-semibold">Part Name</h1>
                                        <h1 class="m-auto mr-0">{{ $value }}</h1>
                                    </div>
                                @elseif($key == 'partnum')
                                    <div class="flex flex-nowrap w-full py-4">
                                        <h1 class="w-3/4 font-semibold">Part Number</h1>
                                        <h1 class="m-auto mr-0">{{ $value }}</h1>
                                    </div>
                                @elseif($key == 'drawnum')
                                    <div class="flex flex-nowrap w-full py-4">
                                        <h1 class="w-3/4 font-semibold">Drawing Number</h1>
                                        <h1 class="m-auto mr-0">{{ $value }}</h1>
                                    </div>
                                @elseif($key == 'posnum')
                                    <div class="flex flex-nowrap w-full py-4">
                                        <h1 class="w-3/4 font-semibold">Item/Position Number</h1>
                                        <h1 class="m-auto mr-0">{{ $value }}</h1>
                                    </div>
                                @elseif($key == 'matnum')
                                    <div class="flex flex-nowrap w-full py-4">
                                        <h1 class="w-3/4 font-semibold">Material Number</h1>
                                        <h1 class="m-auto mr-0">{{ $value }}</h1>
                                    </div>
                                @elseif($key == 'impa')
                                    <div class="flex flex-nowrap w-full py-4">
                                        <h1 class="w-3/4 font-semibold">IMPA Number</h1>
                                        <h1 class="m-auto mr-0">{{ $value }}</h1>
                                    </div>
                                @elseif($key == 'artnum')
                                    <div class="flex flex-nowrap w-full py-4">
                                        <h1 class="w-3/4 font-semibold">Article Number</h1>
                                        <h1 class="m-auto mr-0">{{ $value }}</h1>
                                    </div>
                                @elseif($key == 'specs')
                                    <div class="flex flex-nowrap w-full py-4">
                                        <h1 class="m-auto font-bold">Specifications</h1>
                                        <h1 class="m-auto w-3/4 mr-0 px-2">{{ $value }}</h1>
                                    </div>
                                @elseif($key == 'timeper')
                                    <div class="flex flex-nowrap w-full py-4">
                                        <h1 class="w-3/4 font-semibold">Priority</h1>
                                        <h1 class="m-auto mr-0">{{ $value }}</h1>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                            

                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <!-- Processes -->
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div id="procDD" class="p-6 text-gray-900 bg-gray-200 h-20 overflow-hidden">
                    <div class="flex flex-nowrap mb-6">
                        <h1 class="m-auto ml-0 text-2xl pb-2">Processes</h1>
                        <button onclick="drop('procDD','procSVG','procSVG2')" class="m-auto mr-0">
                            <svg id="procSVG" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down-icon lucide-chevron-down"><path d="m6 9 6 6 6-6"/></svg>
                            <svg id="procSVG2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up-icon lucide-chevron-up hidden"><path d="m18 15-6-6-6 6"/></svg>
                        </button>
                    </div>

                    @foreach($processes as $item)
                        <div id="proce{{ $item->id }}DD" class="flex flex-col h-14 shadow overflow-hidden">
                            <div class="flex flex-nowrap p-4 w-full h-14">
                                <h1 class="w-full">{{ $item->title }}</h1>
                                <button onclick="drop('proce{{ $item->id }}DD','proce{{ $item->id }}SVG','proce{{ $item->id }}SVG2')" class="">
                                    <svg id="proce{{ $item->id }}SVG" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down-icon lucide-chevron-down"><path d="m6 9 6 6 6-6"/></svg>
                                    <svg id="proce{{ $item->id }}SVG2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up-icon lucide-chevron-up hidden"><path d="m18 15-6-6-6 6"/></svg>
                                </button>
                            </div>
                            <div class="p-6">
                                <input onclick="showUpdate(this.id)" id="proclink{{ $item->id }}" class="w-full" type="text" value="{{ $item->link }}">                                
                            </div>
                            <div id="proclink{{ $item->id }}Button" class="flex p-6 hidden">
                                <button onclick="updateProcess('proclink{{ $item->id }}', {{ $item->id }})" class="m-auto w-3/4 bg-blue text-white rounded-lg py-1">Update Link</button>                                
                            </div>
                            <div class="flex p-6">
                                <form class="w-full m-auto flex" method="POST" action="/delete-process" class="m-auto" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit" class="m-auto w-3/4 bg-red text-white rounded-lg py-1">Delete</button>
                                </form>
                            </div>
                                

                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
    
    <!-- Modules -->
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div id="modDD" class="p-6 text-gray-900 bg-gray-200 h-20 overflow-hidden">
                    <div class="flex flex-nowrap mb-6">
                        <h1 class="m-auto ml-0 text-2xl pb-2">Modules</h1>
                        <button onclick="drop('modDD','modSVG','modSVG2')" class="m-auto mr-0">
                            <svg id="modSVG" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down-icon lucide-chevron-down"><path d="m6 9 6 6 6-6"/></svg>
                            <svg id="modSVG2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up-icon lucide-chevron-up hidden"><path d="m18 15-6-6-6 6"/></svg>
                        </button>
                    </div>

                    @foreach($modules as $item)
                        <div id="modu{{ $item->id }}DD" class="flex flex-col h-14 shadow overflow-hidden">
                            <div class="flex flex-nowrap p-4 w-full h-14">
                                <h1 class="w-full">{{ $item->title }}</h1>
                                <button onclick="drop('modu{{ $item->id }}DD','modu{{ $item->id }}SVG','modu{{ $item->id }}SVG2')" class="">
                                    <svg id="modu{{ $item->id }}SVG" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down-icon lucide-chevron-down"><path d="m6 9 6 6 6-6"/></svg>
                                    <svg id="modu{{ $item->id }}SVG2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up-icon lucide-chevron-up hidden"><path d="m18 15-6-6-6 6"/></svg>
                                </button>
                            </div>
                            <div class="p-6">
                                <input onclick="showUpdate(this.id)" id="modlink{{ $item->id }}" class="w-full" type="text" value="{{ $item->link }}">                                
                            </div>
                            <div id="modlink{{ $item->id }}Button" class="flex p-6 hidden">
                                <button onclick="updateModule('modlink{{ $item->id }}', {{ $item->id }})" class="m-auto w-3/4 bg-blue text-white rounded-lg py-1">Update Link</button>                                
                            </div>
                            <div class="flex p-6">
                                <form class="w-full m-auto flex" method="POST" action="/delete-module" class="m-auto" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit" class="m-auto w-3/4 bg-red text-white rounded-lg py-1">Delete</button>
                                </form>
                            </div>
                                

                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>

    <!-- Parts -->
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div id="partsDD" class="p-6 text-gray-900 bg-gray-200 h-20 overflow-hidden">
                    <div class="flex flex-nowrap mb-6">
                        <h1 class="m-auto ml-0 text-2xl pb-2">Parts</h1>
                        <button onclick="drop('partsDD','partsSVG','partsSVG2')" class="m-auto mr-0">
                            <svg id="partsSVG" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down-icon lucide-chevron-down"><path d="m6 9 6 6 6-6"/></svg>
                            <svg id="partsSVG2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up-icon lucide-chevron-up hidden"><path d="m18 15-6-6-6 6"/></svg>
                        </button>
                    </div>

                    @foreach($parts as $category => $categoryParts)
                        <div id="partCat{{ $loop->index }}DD" class="flex flex-col h-14 shadow overflow-hidden">
                            <div class="flex flex-nowrap p-4 w-full h-14">
                                <h1 class="w-full text-xl font-semibold">{{ ucwords(strtolower($category)) }}</h1>
                                <button onclick="drop('partCat{{ $loop->index }}DD','partCat{{ $loop->index }}SVG','partCat{{ $loop->index }}SVG2')" class="">
                                    <svg id="partCat{{ $loop->index }}SVG" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down-icon lucide-chevron-down"><path d="m6 9 6 6 6-6"/></svg>
                                    <svg id="partCat{{ $loop->index }}SVG2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-up-icon lucide-chevron-up hidden"><path d="m18 15-6-6-6 6"/></svg>
                                </button>
                            </div>
                            <div class="p-6 bg-notwhite">
                                @foreach($categoryParts as $part)
                                    <div class="mb-6 last:mb-0 shadow-md py-6 w-full">
                                        <div class="flex flex-col gap-y-4">
                                            <div class="flex flex-col items-center text-center">
                                                <img src="{{ asset('assets/images/parts/' . ucwords(strtolower($category)) . '/' . $part->name . '.png') }}" 
                                                     alt="{{ $part->name }}" 
                                                     class="w-16 h-16 object-contain mb-2">
                                                <h3 class="text-lg font-semibold">{{ $part->name }}</h3>
                                                <p class="text-gray-600 text-sm">{{ $part->desc }}</p>
                                            </div>
                                            <div class="flex justify-center">
                                                <form method="POST" action="/delete-part" class="w-1/3" onsubmit="return confirm('Are you sure you want to delete this part?');">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $part->id }}">
                                                    <button type="submit" class="w-full bg-red text-white rounded-lg py-1">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- add buttons -->
    <div class="">
        <div class="flex flex-wrap gap-y-4 gap-x-2 max-w-7xl text-lg mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <button onclick="toggle('mod')" class="w-[48%] m-auto bg-zinc-600 rounded-xl text-white px-4 py-1">Add Module</button>
            <button onclick="toggle('proc')" class="w-[48%] m-auto bg-zinc-600 rounded-xl text-white px-4 py-1">Add Process</button>
            <button onclick="toggle('part')" class="w-[48%] m-auto bg-zinc-600 rounded-xl text-white px-4 py-1">Add Part</button>
        </div>
    </div>

    <!-- forms -->
    <div class="h-auto pb-20">
        <div id="mod" class="hidden flex flex-col overflow-hidden gap-y-2">
            <form method="POST" action="/add-module" class="w-3/4 m-auto flex flex-col">
                @csrf
                <input class="w-full mb-2" type="text" name="title" placeholder="Module Title" required>
                <input class="w-full mb-2" type="text" name="link" placeholder="Module Link" required>
                <button type="submit" class="py-1 px-4 bg-notwhite w-1/3 m-auto rounded-xl">Add Module</button>
            </form>
        </div>
        
        <div id="proc" class="hidden flex flex-col overflow-hidden gap-y-2">
            <form method="POST" action="/add-process" class="w-3/4 m-auto flex flex-col">
                @csrf
                <input class="w-full mb-2" type="text" name="title" placeholder="Process Title" required>
                <input class="w-full mb-2" type="text" name="link" placeholder="Process Link" required>
                <button type="submit" class="py-1 px-4 bg-notwhite w-1/3 m-auto rounded-xl">Add Process</button>
            </form>
        </div>

        <div id="part" class="hidden flex flex-col overflow-hidden gap-y-2">
            <form method="POST" action="/add-part" class="w-3/4 m-auto flex flex-col" enctype="multipart/form-data">
                @csrf
                <input class="w-full mb-2" type="text" name="name" placeholder="Part Name" required>
                <input class="w-full mb-2" type="text" name="category" placeholder="Part Category" list="categories" required>
                <datalist id="categories">
                    @foreach($categories as $category)
                        <option value="{{ $category }}">
                    @endforeach
                </datalist>
                <textarea class="w-full mb-2" name="desc" placeholder="Part Description" required></textarea>
                <div class="mb-2">
                    <label class="block text-sm text-gray-600 mb-1">Part Image (PNG only)</label>
                    <input class="w-full" type="file" name="image" accept=".png" required>
                </div>
                <button type="submit" class="py-1 px-4 bg-notwhite w-1/3 m-auto rounded-xl">Add Part</button>
            </form>
        </div>
    </div>
    

<script>

    // dropdown for viewing/editing modules and processes
    function showUpdate(id){
        let div = document.getElementById(id);

        div = document.getElementById(id + 'Button');

        div.classList.toggle('hidden');
    }

    

    // dropdown for adding modules
    function toggle(el) {
        let target = document.getElementById(el);
        let siblings = ['mod', 'proc', 'part'].filter(id => id !== el);
        
        siblings.forEach(siblingId => {
            let sibling = document.getElementById(siblingId);
            if (!sibling.classList.contains('hidden')) {
                sibling.classList.add('hidden');
            }
        });

        target.classList.toggle('hidden');
    }

    // dropdown for lists
    function drop(el,button,button2) {
        let target = document.getElementById(el);
        let svg = document.getElementById(button);
        let svg2 = document.getElementById(button2);

        target.classList.toggle('h-auto');
        svg.classList.toggle('hidden');
        svg2.classList.toggle('hidden');

    }

    function updateRequestStatus(selectEl, itemId) {
        const newStatus = selectEl.value;

        const csrf = document.querySelector('meta[name="csrf-token"]');
        if (!csrf) {
            alert('CSRF token missing.');
            return;
        }

        fetch('/update-request', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrf.getAttribute('content')
            },
            body: JSON.stringify({
                id: itemId,
                status: newStatus
            })
        })
        .then(async response => {
            const data = await response.json();
            if (data.success) {
                alert('✅ Status updated!');
            } else {
                alert('Failed to update status: ' + (data.message || 'Unknown error'));
            }
        })
        .catch(error => {
            console.error('❌ Error updating status:', error);
            alert('An error occurred while updating the status.');
        });
    }    

    function updateProcess(link, itemId) {
        const newLink = document.getElementById(link).value;


        const csrf = document.querySelector('meta[name="csrf-token"]');
        if (!csrf) {
            alert('CSRF token missing.');
            return;
        }

        fetch('/update-process', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrf.getAttribute('content')
            },
            body: JSON.stringify({
                id: itemId,
                link: newLink
            })
        })
        .then(async response => {
            const data = await response.json();
            if (data.success) {
                alert('✅ link updated!');
            } else {
                alert('Failed to update link: ' + (data.message || 'Unknown error'));
            }
        })
        .catch(error => {
            console.error('❌ Error updating link:', error);
            alert('An error occurred while updating the link.');
        });
    }

    function updateModule(link, itemId) {
        const newLink = document.getElementById(link).value;


        const csrf = document.querySelector('meta[name="csrf-token"]');
        if (!csrf) {
            alert('CSRF token missing.');
            return;
        }

        fetch('/update-module', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrf.getAttribute('content')
            },
            body: JSON.stringify({
                id: itemId,
                link: newLink
            })
        })
        .then(async response => {
            const data = await response.json();
            if (data.success) {
                alert('✅ link updated!');
            } else {
                alert('Failed to update link: ' + (data.message || 'Unknown error'));
            }
        })
        .catch(error => {
            console.error('❌ Error updating link:', error);
            alert('An error occurred while updating the link.');
        });
    }




</script>

@include('partials.foot')
