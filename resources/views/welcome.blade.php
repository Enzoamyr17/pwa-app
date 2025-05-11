@include('partials.head')

<div class="h-[67vw] bg-fixed bg-top bg-contain bg-no-repeat bg-[length:120%] z-10" style="background-image: url('assets/images/2.jpg');">
    <div class="w-full h-full bg-greenfilter opacity-50">

    </div>

</div>

<div class="relative m-auto -mt-28 bg-white h-auto min-h-[60vh] flex flex-col gap-y-4 w-full rounded-t-[24px] z-40 py-6 pb-32">

    <div class="flex mx-auto block w-11/12 h-auto bg-notwhite rounded-3xl shadow-xl overflow-hidden"
         x-data="{ 
            currentIndex: 0,
            trivias: {{ $trivias }},
            showAnswer: false,
            selectedAnswer: null,
            nextQuestion() {
                if (this.currentIndex < this.trivias.length - 1) {
                    this.currentIndex++;
                    this.showAnswer = false;
                    this.selectedAnswer = null;
                }
            },
            handleAnswer(answer) {
                this.selectedAnswer = answer;
                setTimeout(() => {
                    this.showAnswer = true;
                    setTimeout(() => this.nextQuestion(), 3000);
                }, 500);
            }
         }">
        <div class="h-full w-full flex overflow-hidden">
            <div class="w-full h-full flex flex-col bg-opacity-50 p-4 gap-2">
                <h1 class="text-center py-4">Trivia Question</h1>
                <h1 class="text-zinc-800 mx-auto text-3xl pl-6 py-4 leading-none">
                    <span x-text="trivias[currentIndex].question"></span>
                </h1>
                <div class="flex flex-col gap-y-4 text-white text-xl">
                    <input type="hidden" :value="trivias[currentIndex].correct_answer">
                    <button @click="handleAnswer('A')" 
                            class="w-full m-auto p-6 bg-blue min-h-12 text-left rounded-lg transition-all duration-300"
                            :class="{
                                'bg-backbutt': showAnswer && trivias[currentIndex].correct_answer === 'A',
                                'bg-red': showAnswer && selectedAnswer === 'A' && trivias[currentIndex].correct_answer !== 'A',
                                'bg-blue': !showAnswer || (showAnswer && selectedAnswer !== 'A' && trivias[currentIndex].correct_answer !== 'A')
                            }">
                        A. <span x-text="trivias[currentIndex].choice_a"></span>
                    </button>
                    <button @click="handleAnswer('B')"
                            class="w-full m-auto p-6 bg-blue min-h-12 text-left rounded-lg transition-all duration-300"
                            :class="{
                                'bg-backbutt': showAnswer && trivias[currentIndex].correct_answer === 'B',
                                'bg-red': showAnswer && selectedAnswer === 'B' && trivias[currentIndex].correct_answer !== 'B',
                                'bg-blue': !showAnswer || (showAnswer && selectedAnswer !== 'B' && trivias[currentIndex].correct_answer !== 'B')
                            }">
                        B. <span x-text="trivias[currentIndex].choice_b"></span>
                    </button>
                    <button @click="handleAnswer('C')"
                            class="w-full m-auto p-6 bg-blue min-h-12 text-left rounded-lg transition-all duration-300"
                            :class="{
                                'bg-backbutt': showAnswer && trivias[currentIndex].correct_answer === 'C',
                                'bg-red': showAnswer && selectedAnswer === 'C' && trivias[currentIndex].correct_answer !== 'C',
                                'bg-blue': !showAnswer || (showAnswer && selectedAnswer !== 'C' && trivias[currentIndex].correct_answer !== 'C')
                            }">
                        C. <span x-text="trivias[currentIndex].choice_c"></span>
                    </button>
                    <button @click="handleAnswer('D')"
                            class="w-full m-auto p-6 bg-blue min-h-12 text-left rounded-lg transition-all duration-300"
                            :class="{
                                'bg-backbutt': showAnswer && trivias[currentIndex].correct_answer === 'D',
                                'bg-red': showAnswer && selectedAnswer === 'D' && trivias[currentIndex].correct_answer !== 'D',
                                'bg-blue': !showAnswer || (showAnswer && selectedAnswer !== 'D' && trivias[currentIndex].correct_answer !== 'D')
                            }">
                        D. <span x-text="trivias[currentIndex].choice_d"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-5xl font-bold ml-4 py-2 pb-3 text-green">FEATURES</h1>

    <x-redirectcard 
        href="{{ route('proc') }}" 
        title="Learn about the processes"
        imageUrl="{{ asset('assets/images/4.jpg') }}"
    />
    
    <x-redirectcard 
        href="{{ route('iso') }}" 
        title="Learn about the ISO"
        imageUrl="{{ asset('assets/images/6.jpg') }}"
    />
    
    <x-redirectcard 
        href="{{ route('ves.index') }}" 
        title="Learn more about the vessel"
    />
    
    <x-redirectcard 
        href="{{ route('req.index') }}" 
        title="Submit replacement part requests"
    />
    
    <x-redirectcard 
        href="{{ route('hotl.index') }}" 
        title="Learn more about the vessel"
    />
    
</div>


@include('partials.navbar')
@include('partials.foot')