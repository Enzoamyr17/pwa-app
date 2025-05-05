@include('partials.head')

<div class="relative flex flex-col bg-white min-h-[100vh] py-8 pb-32 gap-y-4 font-poppins text-green">

<h1 class="mx-auto font-semibold text-4xl">Part Request Form</h1>

<form method="POST" action="{{ route('req.store') }}">
    @CSRF
    <input type="hidden" name="token" id="client_token_input">
    <div class="flex flex-col gap-y-4 px-6 text-lg">
        <label>
            Part Name:
            <input type="text" name="partname" class="border border-green rounded-lg px-2 py-1 w-full">
        </label>
        <label>
            Part Number:
            <input type="text" name="partnum" class="border border-green rounded-lg px-2 py-1 w-full">
        </label>
        <label>
            Drawing Number:
            <input type="text" name="drawnum" class="border border-green rounded-lg px-2 py-1 w-full">
        </label>
        <label>
            Item/Position Number:
            <input type="text" name="posnum" class="border border-green rounded-lg px-2 py-1 w-full">
        </label>
        <label>
            Material Number:
            <input type="text" name="matnum" class="border border-green rounded-lg px-2 py-1 w-full">
        </label>
        <label>
            IMPA Number:
            <input type="text" name="impa" class="border border-green rounded-lg px-2 py-1 w-full">
        </label>
        <label>
            Article Number:
            <input type="text" name="artnum" class="border border-green rounded-lg px-2 py-1 w-full">
        </label>
        <label>
            Specifications/Descriptions/Details:
            <input type="text" name="specs" class="border border-green rounded-lg px-2 py-1 w-full">
        </label>
        <label class="flex flex-col">
            Time Period:
            <span class="text-base opacity-80 pb-2 pl-1">When do you need the parts?</span>
            <select name="timeper" class="border border-green rounded-lg px-2 py-1 w-full">
                <option value="">Select</option>
                <option value="0">Urgent (3-7 Days)</option>
                <option value="1">7 Days</option>
                <option value="2">14 Days</option>
                <option value="3">30 Days</option>
                <option value="4">60 Days</option>
                <option value="5">90 Days</option>
                <option value="6">180 Days</option>
                <option value="7">Not Priority</option>
            </select>
        </label>
    </div>
    <div class="flex flex-col w-full py-8 gap-y-4">
        <button type="submit" class="m-auto bg-green rounded-xl">
            <h1 class="text-3xl font-bold text-white px-10 py-2">Send Request</h1>
        </button>
        <button type="button" class="m-auto bg-zinc-600 rounded-xl">
            <h1 class="text-3xl font-bold text-white px-10 py-2">Save to drafts</h1>
        </button>
    </div>
</form>


</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const token = localStorage.getItem('client_token');
        document.getElementById('client_token_input').value = token;
    });
</script>


@include('partials.navbar')
@include('partials.foot')