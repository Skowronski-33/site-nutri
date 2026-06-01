@props(['config'])

<section id="depoimentos" class="py-20 bg-secondary-light/30">
    <div class="container mx-auto px-4 md:px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-4">O que meus pacientes dizem</h2>
            <p class="text-lg text-neutral-600">Histórias reais de transformação e recuperação da autoestima.</p>
        </div>

        <div x-data="{ 
                activeSlide: 0, 
                slides: {{ count($config['depoimentos']) }},
                next() { this.activeSlide = this.activeSlide === this.slides - 1 ? 0 : this.activeSlide + 1 },
                prev() { this.activeSlide = this.activeSlide === 0 ? this.slides - 1 : this.activeSlide - 1 },
                startTimer() { setInterval(() => { this.next() }, 5000); }
            }" 
            x-init="startTimer()"
            class="max-w-4xl mx-auto relative px-4 md:px-12">
            
            <div class="overflow-hidden relative min-h-[250px]">
                @foreach($config['depoimentos'] as $index => $depoimento)
                <div x-show="activeSlide === {{ $index }}" 
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 translate-x-8"
                     x-transition:enter-end="opacity-100 translate-x-0"
                     x-transition:leave="transition ease-in duration-300 absolute inset-0"
                     x-transition:leave-start="opacity-100 translate-x-0"
                     x-transition:leave-end="opacity-0 -translate-x-8"
                     class="bg-white p-8 md:p-10 rounded-3xl shadow-sm border border-neutral-100 flex flex-col md:flex-row items-center gap-6 md:gap-8">
                     
                    <!-- Avatar Placeholder -->
                    <div class="w-24 h-24 shrink-0 rounded-full bg-neutral-200 border-4 border-secondary flex items-center justify-center overflow-hidden">
                        <svg class="w-12 h-12 text-neutral-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <div class="flex-grow text-center md:text-left">
                        <svg class="w-8 h-8 text-secondary-dark/40 mb-4 mx-auto md:mx-0" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                        <p class="text-xl italic text-neutral-700 mb-6 font-light leading-relaxed">
                            "{{ $depoimento['texto'] }}"
                        </p>
                        <div>
                            <h4 class="font-bold text-neutral-900 text-lg">{{ $depoimento['nome'] }}</h4>
                            <p class="text-primary font-medium text-sm">{{ $depoimento['resultado'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Controles -->
            <button @click="prev()" class="absolute left-0 top-1/2 -translate-y-1/2 -ml-2 md:ml-0 w-10 h-10 rounded-full bg-white shadow flex items-center justify-center text-neutral-600 hover:text-primary transition-colors focus:outline-none z-10" aria-label="Anterior">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
            </button>
            <button @click="next()" class="absolute right-0 top-1/2 -translate-y-1/2 -mr-2 md:mr-0 w-10 h-10 rounded-full bg-white shadow flex items-center justify-center text-neutral-600 hover:text-primary transition-colors focus:outline-none z-10" aria-label="Próximo">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </button>

            <!-- Dots -->
            <div class="flex justify-center gap-2 mt-8">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="activeSlide = index" :class="{'bg-primary w-6': activeSlide === index, 'bg-neutral-300 w-2 hover:bg-neutral-400': activeSlide !== index}" class="h-2 rounded-full transition-all duration-300 focus:outline-none" :aria-label="'Ir para o slide ' + (index + 1)"></button>
                </template>
            </div>
        </div>
    </div>
</section>
