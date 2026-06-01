@props(['config'])

<section id="sobre" class="py-20 bg-white" itemscope itemtype="https://schema.org/Person">
    <div class="container mx-auto px-4 md:px-6">
        <div class="flex flex-col md:flex-row items-center gap-12 lg:gap-20">
            
            <!-- Image Placeholder -->
            <div class="w-full md:w-5/12 flex justify-center order-2 md:order-1">
                <div class="w-full max-w-[400px] aspect-[4/5] bg-neutral-200 rounded-3xl shadow-lg flex items-center justify-center relative overflow-hidden">
                    <div class="text-center p-6 text-neutral-500">
                        <svg class="mx-auto h-10 w-10 text-neutral-400 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <p class="font-medium">[FOTO PERFIL]</p>
                        <p class="text-xs mt-1">400x500px</p>
                        <!-- <img src="caminho-da-imagem.jpg" alt="Foto de {{ $config['perfil']['nome'] }}" loading="lazy" itemprop="image" class="absolute inset-0 w-full h-full object-cover"> -->
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="w-full md:w-7/12 order-1 md:order-2 flex flex-col gap-6">
                <div>
                    <span class="inline-block px-3 py-1 bg-secondary-light text-secondary-dark rounded-full text-sm font-semibold tracking-wide mb-3" itemprop="jobTitle">Nutricionista</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-neutral-900" itemprop="name">
                        {{ $config['perfil']['nome'] }}
                    </h2>
                    <p class="text-primary font-medium mt-2">{{ $config['perfil']['crn'] }}</p>
                </div>

                <div class="prose prose-lg text-neutral-600">
                    <p itemprop="description">
                        {{ $config['perfil']['filosofia'] }}
                    </p>
                </div>

                <div class="bg-neutral-50 p-6 rounded-2xl border border-neutral-100 mt-2">
                    <h3 class="text-xl font-semibold text-neutral-800 mb-4 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                        Formação
                    </h3>
                    <ul class="space-y-3">
                        @foreach($config['perfil']['formacao'] as $item)
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-primary shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-neutral-700">{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>
