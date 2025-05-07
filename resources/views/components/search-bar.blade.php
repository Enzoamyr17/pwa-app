<form method="GET" action="{{ url()->current() }}">
    <div class="flex flex-nowrap w-full px-6 gap-6">
        <input type="text" value="{{ request('search') }}" name="search" placeholder="Search" class="m-auto h-10 w-[92%] rounded-[20px] text-xl tracking-wide pl-4 bg-notwhite">
        <button type="submit" aria-label="Search">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="m-auto lucide lucide-search-icon lucide-search"><path d="m21 21-4.34-4.34"/><circle cx="11" cy="11" r="8"/></svg>
        </button>
    </div>
</form>