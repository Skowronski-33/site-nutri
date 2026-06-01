@props(['config'])

<section id="especialidades" class="py-20 bg-secondary-light/30">
    <div class="container mx-auto px-4 md:px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-4">Minhas Especialidades</h2>
            <p class="text-lg text-neutral-600">Áreas de atuação onde posso ajudar você a transformar sua saúde e bem-estar.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($config['especialidades'] as $especialidade)
            <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 border border-neutral-100 group">
                <div class="w-14 h-14 bg-secondary-light text-primary rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                    @if($especialidade['icone'] == 'emagrecimento')
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20"></path><path d="m17 5-5-3-5 3"></path><path d="m5 19 7 3 7-3"></path><path d="M19 12H5"></path></svg>
                    @elseif($especialidade['icone'] == 'esportiva')
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path><path d="m12 18 6 4"></path><path d="m12 18-6 4"></path></svg>
                    @elseif($especialidade['icone'] == 'clinica')
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                    @elseif($especialidade['icone'] == 'mulher')
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="10" r="6"></circle><line x1="12" y1="16" x2="12" y2="22"></line><line x1="9" y1="19" x2="15" y2="19"></line></svg>
                    @elseif($especialidade['icone'] == 'infantil')
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 5.25a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"></path><path d="M14 5.25a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"></path><path d="M20 5.25a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"></path><path d="M12 19V9"></path><path d="M12 9a2 2 0 0 0-2-2h-1.5"></path><path d="M12 9a2 2 0 0 1 2-2h1.5"></path><path d="M7 16v-7"></path><path d="M17 16v-7"></path></svg>
                    @else
                        <!-- icone generico (reeducacao, etc) -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path></svg>
                    @endif
                </div>
                <h3 class="text-xl font-bold text-neutral-800 mb-3">{{ $especialidade['titulo'] }}</h3>
                <p class="text-neutral-600 leading-relaxed">{{ $especialidade['descricao'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
