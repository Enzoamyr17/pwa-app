<div class="Absolute fixed flex bg-white flex-nowrap bottom-0 w-full h-auto border-t border-gray-300 shadow-nav z-50">
    <a href="/" class="m-auto w-1/6 max-w-[4rem] p-3 aspect-square">
        <img src="{{ request()->is('/') 
        ? asset('assets/icons/HomeSel.png') 
        : asset('assets/icons/Home.png') }}" class="w-full h-full aspect-square">
    </a>
    <a href="/proc" class="m-auto w-1/6 max-w-[4rem] p-3 aspect-square">
        <img src="{{ request()->is('proc') 
        ? asset('assets/icons/ProcSel.png') 
        : asset('assets/icons/Proc.png') }}" class="w-full h-full aspect-square">
    </a>
    <a href="/iso" class="m-auto w-1/6 max-w-[4rem] p-3 aspect-square">
        <img src="{{ request()->is('iso')
        ? asset('assets/icons/IsoSel.png') 
        : asset('assets/icons/Iso.png') }}" class="w-full h-full aspect-square">
    </a>
    <a href="/ves" class="m-auto w-1/6 max-w-[4rem] p-3 aspect-square">
        <img src="{{ request()->is('ves')
        ? asset('assets/icons/VesSel.png') 
        : asset('assets/icons/Ves.png') }}" class="w-full h-full aspect-square">
    </a>
    <a href="/req" class="m-auto w-1/6 max-w-[4rem] p-3 aspect-square">
        <img src="{{ request()->is('req')
        ? asset('assets/icons/ReqSel.png') 
        : asset('assets/icons/Req.png') }}" class="w-full h-full aspect-square">
    </a>
    <a href="/hotline" class="m-auto w-1/6 max-w-[4rem] p-3 aspect-square">
        <img src="{{ request()->is('hotline') 
        ? asset('assets/icons/HotSel.png') 
        : asset('assets/icons/Hot.png') }}" class="w-full h-full aspect-square">
    </a>
</div>