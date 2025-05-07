@include('partials.head')

<div class="h-[67vw] bg-fixed bg-top bg-contain bg-no-repeat bg-[length:120%] z-10" style="background-image: url('assets/images/2.jpg');">
    <div class="w-full h-full bg-greenfilter opacity-50">

    </div>

</div>

<div class="relative m-auto -mt-28 bg-white h-auto min-h-[60vh] flex flex-col gap-y-4 w-full rounded-t-[24px] z-40 py-6 pb-32">

    <div class="flex mx-auto block w-11/12 h-auto bg-notwhite rounded-3xl shadow-xl overflow-hidden">
        <div class="h-full w-full flex overflow-hidden">
            <div class="w-full h-full flex flex-col bg-opacity-50 p-4 gap-2">
                <h1 class="text-center py-4">Trivia Question</h1>
                <h1 class="text-zinc-800 mx-auto text-3xl pl-6 py-4 leading-none">
                    {{ Str::ucfirst($trivia->question) }}
                </h1>
                <div class="flex flex-col gap-y-4 text-white text-xl">
                    <input id="answer" type="hidden" value="{{$trivia->correct_answer}}">
                    <button onclick="answerQ(this.id)" id="A" class="w-full m-auto p-6 bg-blue min-h-12 text-left rounded-lg ">
                        A. {{ Str::ucfirst($trivia->choice_a) }}
                    </button>
                    <button onclick="answerQ(this.id)" id="B" class="w-full m-auto p-6 bg-blue min-h-12 text-left rounded-lg ">
                        B. {{ Str::ucfirst($trivia->choice_b) }}
                    </button>
                    <button onclick="answerQ(this.id)" id="C" class="w-full m-auto p-6 bg-blue min-h-12 text-left rounded-lg ">
                        C. {{ Str::ucfirst($trivia->choice_c) }}
                    </button>
                    <button onclick="answerQ(this.id)" id="D" class="w-full m-auto p-6 bg-blue min-h-12 text-left rounded-lg ">
                        D. {{ Str::ucfirst($trivia->choice_d) }}
                    </button>
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-5xl font-bold ml-4 py-2 pb-3 text-green">FEATURES</h1>

    <x-landing-card 
        href="{{ route('proc') }}" 
        title="Learn about the processes"
        imageUrl="{{ asset('assets/images/4.jpg') }}"
    />
    
    <x-landing-card 
        href="{{ route('iso') }}" 
        title="Learn about the ISO"
        imageUrl="{{ asset('assets/images/6.jpg') }}"
    />
    
    <x-landing-card 
        href="{{ route('ves.index') }}" 
        title="Learn more about the vessel"
    />
    
    <x-landing-card 
        href="{{ route('req.index') }}" 
        title="Submit replacement part requests"
    />
    
    <x-landing-card 
        href="{{ route('hotl.index') }}" 
        title="Learn more about the vessel"
    />
    
</div>


<script>

    function answerQ(answer){
        // values
        let corAnswer = document.getElementById('answer').value;
        // divs
        let corDiv = document.getElementById(corAnswer);
        let ansDiv = document.getElementById(answer);

        if(answer == corAnswer){
            ansDiv.classList.remove('bg-blue');
            ansDiv.classList.add('bg-backbutt');
        }else{
            ansDiv.classList.remove('bg-blue');
            ansDiv.classList.add('bg-red');
            corDiv.classList.remove('bg-blue');
            corDiv.classList.add('bg-backbutt');
        }
        
    }

</script>


@include('partials.navbar')
@include('partials.foot')