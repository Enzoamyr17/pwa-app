@include('partials.head')

<div class="relative flex flex-col bg-white min-h-[100vh] py-8 pb-32 gap-y-4 font-poppins ">

    <x-main-banner image="10.png" />

    <h1 class="text-4xl font-bold ml-4 py-2 pb-3 text-green">Request for Parts</h1>

    <x-redirectcard 
        href="{{ route('req.form') }}" 
        title="Request Parts"
    />

    <!-- uses dom script to update href -->
    <x-redirectcard 
        href="#" 
        title="List of Requests"
        id="my-request-link"
    />


    <x-redirectcard 
        href="#" 
        title="Draft"
        id="my-draft-link"
    />
    
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const token = localStorage.getItem('client_token');
        const link = document.getElementById('my-request-link');
        if (token && link) {
            link.setAttribute('href', `/req/list?token=${token}`);
        }
    });

    document.addEventListener('DOMContentLoaded', () => {
        const token = localStorage.getItem('client_token');
        const link = document.getElementById('my-draft-link');
        if (token && link) {
            link.setAttribute('href', `/req/draft?token=${token}`);
        }
    });
</script>


@include('partials.navbar')
@include('partials.foot')