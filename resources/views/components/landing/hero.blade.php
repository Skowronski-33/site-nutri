@props(['config'])

<section id="hero" class="pt-32 pb-16 md:pt-40 md:pb-24 overflow-hidden relative">
    <div class="absolute inset-0 -z-10 bg-gradient-to-b from-secondary-light/40 to-white"></div>
    <div class="container mx-auto px-4 md:px-6">
        <div class="flex flex-col md:flex-row items-center gap-12 md:gap-8">
            <!-- Text Content -->
            <div class="w-full md:w-1/2 flex flex-col gap-6" x-data x-intersect="$el.classList.add('animate-fade-in-up')">
                <span class="text-primary-dark font-semibold tracking-wider uppercase text-sm">Bem-vindo(a)</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-neutral-900 leading-tight">
                    Nutrição com <span class="text-primary">equilíbrio</span> e sem restrições
                </h1>
                <p class="text-lg text-neutral-600 md:w-11/12 leading-relaxed">
                    Descubra como alcançar seus objetivos de forma saudável, transformando sua relação com a comida e melhorando sua qualidade de vida.
                </p>
                <div class="pt-4">
                    <a href="https://wa.me/{{ $config['contato']['whatsapp_numero'] }}?text={{ urlencode($config['contato']['whatsapp_texto']) }}" class="inline-flex items-center gap-3 bg-primary hover:bg-primary-dark text-white px-8 py-4 rounded-full font-medium text-lg transition-transform hover:-translate-y-1 shadow-lg hover:shadow-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        Quero agendar agora
                    </a>
                </div>
            </div>

            <!-- Image Placeholder -->
            <div class="w-full md:w-1/2 flex justify-center relative">
                <!-- Blob background detail -->
                <div class="absolute inset-0 bg-secondary-light rounded-full blur-3xl opacity-50 -z-10 transform scale-90 translate-y-10"></div>
                
                <div class="w-full max-w-[500px] aspect-[5/6] bg-neutral-200 rounded-[2rem] rounded-tr-[6rem] rounded-bl-[6rem] shadow-xl flex items-center justify-center relative overflow-hidden border-8 border-white">
                    <div class="text-center p-6 text-neutral-500">
                        <svg class="mx-auto h-12 w-12 text-neutral-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <p class="font-medium text-lg">[FOTO DA PROFISSIONAL]</p>
                        <p class="text-sm mt-2">Dimensão recomendada:<br>500x600px</p>
                        <!-- <img src="caminho-da-imagem.jpg" alt="Nutricionista {{ $config['perfil']['nome'] }}" fetchpriority="high" class="absolute inset-0 w-full h-full object-cover"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
