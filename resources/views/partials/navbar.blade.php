<div class="Absolute fixed flex bg-white flex-nowrap -bottom-1 w-full h-auto border-t border-gray-300 shadow-nav z-50 pb-4">
    <a id="homeButton" class="m-auto w-[14vw] max-w-[4rem] p-3 aspect-square">
        <img src="{{ request()->is('/') 
        ? asset('assets/icons/HomeSel.png') 
        : asset('assets/icons/Home.png') }}" class="w-full aspect-square">
    </a>
    <a href="{{ route('proc') }}" class="m-auto w-[14vw] max-w-[4rem] p-3 aspect-[1/1]">
        <img src="{{ request()->is('proc') 
        ? asset('assets/icons/ProcSel.png') 
        : asset('assets/icons/Proc.png') }}" class="w-full aspect-square">
    </a>
    <a href="{{ route('iso') }}" class="m-auto w-[14vw] max-w-[4rem] p-3 aspect-square">
        <img src="{{ request()->is('iso')
        ? asset('assets/icons/IsoSel.png') 
        : asset('assets/icons/Iso.png') }}" class="w-full aspect-square">
    </a>
    <a href="{{ route('ves.index') }}" class="m-auto w-[14vw] max-w-[4rem] p-3 aspect-square">
        <img src="{{ request()->is('ves')
        ? asset('assets/icons/VesSel.png') 
        : asset('assets/icons/Ves.png') }}" class="w-full aspect-square">
    </a>
    <a href="{{ route('req.index') }}" class="m-auto w-[14vw] max-w-[4rem] p-3 aspect-square">
        <img src="{{ request()->is('req')
        ? asset('assets/icons/ReqSel.png') 
        : asset('assets/icons/Req.png') }}" class="w-full aspect-square">
    </a>
    <a href="{{ route('hotl.index') }}" class="m-auto w-[14vw] max-w-[4rem] p-3 aspect-square">
        <img src="{{ request()->is('hotl') 
        ? asset('assets/icons/HotSel.png') 
        : asset('assets/icons/Hot.png') }}" class="w-full aspect-square">
    </a>
</div>

<script>

    isDown=false;
    secondsToHold=0.5
    elem=document.getElementById('homeButton');

    elem.addEventListener('touchstart', function(event) { 
 
        console.log("down");

        if (isDown==false){
            isDown=true;
            setTimeout(function() {
                if (isDown==true){
                    console.log("Hold");
                    window.location.href = "/dashboard"; // redirects within the same domain

                }else{
                    console.log("didn't hold");
                    if(window.location.pathname != '/'){
                        window.location.href = window.location.origin; // redirects within the same domain
                    }

                }
            }, (secondsToHold*1000));
        }

    });

    elem.addEventListener('touchend', function(event) {

        isDown=false;  
        console.log("up");

    });

</script>