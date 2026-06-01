@props(['config'])

<footer class="bg-neutral-900 text-white pt-16 pb-8">
    <div class="container mx-auto px-4 md:px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-12">
            
            <div>
                <h3 class="text-2xl font-bold mb-4">
                    {{ explode(' ', $config['perfil']['nome'])[0] }}<span class="text-primary">.</span>
                </h3>
                <p class="text-neutral-400 mb-6 leading-relaxed max-w-xs">
                    Transformando vidas através da nutrição consciente e com equilíbrio.
                </p>
                <div class="flex gap-4">
                    @if(!empty($config['redes_sociais']['instagram']))
                    <a href="{{ $config['redes_sociais']['instagram'] }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-neutral-800 flex items-center justify-center text-neutral-400 hover:bg-primary hover:text-white transition-colors" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
                    </a>
                    @endif
                    
                    @if(!empty($config['redes_sociais']['facebook']))
                    <a href="{{ $config['redes_sociais']['facebook'] }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-neutral-800 flex items-center justify-center text-neutral-400 hover:bg-primary hover:text-white transition-colors" aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>
                    @endif
                </div>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4 text-white">Links Rápidos</h4>
                <ul class="space-y-3">
                    <li><a href="#sobre" class="text-neutral-400 hover:text-primary transition-colors">Sobre Mim</a></li>
                    <li><a href="#especialidades" class="text-neutral-400 hover:text-primary transition-colors">Especialidades</a></li>
                    <li><a href="#como-funciona" class="text-neutral-400 hover:text-primary transition-colors">Como Funciona</a></li>
                    <li><a href="#faq" class="text-neutral-400 hover:text-primary transition-colors">FAQ</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4 text-white">Contato</h4>
                <ul class="space-y-3 text-neutral-400">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 shrink-0 mt-0.5 text-neutral-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        {{ $config['contato']['telefone_exibicao'] }}
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 shrink-0 mt-0.5 text-neutral-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        {{ $config['contato']['email_destino'] }}
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 shrink-0 mt-0.5 text-neutral-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        {{ $config['contato']['endereco'] }}
                    </li>
                </ul>
            </div>
            
        </div>

        <div class="border-t border-neutral-800 pt-8 mt-8 text-center md:text-left flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="text-neutral-500 text-sm">
                &copy; {{ date('Y') }} {{ $config['perfil']['nome'] }}. Todos os direitos reservados.
            </div>
            <div class="text-neutral-500 text-xs text-center md:text-right max-w-lg">
                Nutricionista inscrita no {{ $config['perfil']['crn'] }}.<br>
                Este site tem caráter informativo e não substitui consulta profissional conforme normas do CFN.
            </div>
        </div>
    </div>
</footer>
