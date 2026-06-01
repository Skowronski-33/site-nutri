@props(['config'])

<section id="faq" class="py-20 bg-white">
    <div class="container mx-auto px-4 md:px-6 max-w-3xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-4">Perguntas Frequentes</h2>
            <p class="text-lg text-neutral-600">Tire suas dúvidas e sinta-se seguro(a) antes de agendar sua consulta.</p>
        </div>

        <div class="space-y-4" itemscope itemtype="https://schema.org/FAQPage">
            @foreach($config['faq'] as $index => $item)
            <div x-data="{ open: false }" class="border border-neutral-200 rounded-2xl bg-neutral-50 overflow-hidden" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button @click="open = !open" class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none" aria-controls="faq-answer-{{$index}}" :aria-expanded="open.toString()">
                    <h3 class="text-lg font-semibold text-neutral-800 pr-4" itemprop="name">{{ $item['pergunta'] }}</h3>
                    <span class="text-primary transform transition-transform duration-300 flex-shrink-0" :class="{'rotate-45': open}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                
                <div id="faq-answer-{{$index}}" x-show="open" x-collapse x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-screen" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 max-h-screen" x-transition:leave-end="opacity-0 max-h-0" style="display: none;" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div class="px-6 pb-5 text-neutral-600 leading-relaxed border-t border-neutral-100 pt-3" itemprop="text">
                        {{ $item['resposta'] }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="mt-12 text-center">
            <p class="text-neutral-600 mb-4">Ainda tem dúvidas?</p>
            <a href="https://wa.me/{{ $config['contato']['whatsapp_numero'] }}?text=Ol%C3%A1!%20Tenho%20algumas%20d%C3%BAvidas%20antes%20de%20agendar%20minha%20consulta." target="_blank" rel="noopener noreferrer" class="text-primary font-medium hover:underline inline-flex items-center gap-1">
                Fale comigo no WhatsApp
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
            </a>
        </div>
    </div>
</section>
