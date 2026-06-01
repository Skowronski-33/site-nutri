@props(['config'])

<section id="contato" class="py-20 bg-secondary-light/20 border-t border-neutral-100">
    <div class="container mx-auto px-4 md:px-6">
        <div class="flex flex-col lg:flex-row gap-12 max-w-5xl mx-auto">
            
            <!-- Info Contato -->
            <div class="w-full lg:w-5/12">
                <h2 class="text-3xl font-bold text-neutral-900 mb-4">Vamos iniciar sua transformação?</h2>
                <p class="text-neutral-600 mb-8">Preencha o formulário para tirar dúvidas ou iniciar o agendamento. Retornarei o mais breve possível.</p>
                
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-sm text-primary shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-neutral-800">Telefone / WhatsApp</h4>
                            <p class="text-neutral-600">{{ $config['contato']['telefone_exibicao'] }}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-sm text-primary shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-neutral-800">E-mail</h4>
                            <p class="text-neutral-600">{{ $config['contato']['email_destino'] }}</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-sm text-primary shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-neutral-800">Consultório</h4>
                            <p class="text-neutral-600">{{ $config['contato']['endereco'] }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="w-full lg:w-7/12">
                <div class="bg-white p-8 rounded-3xl shadow-lg border border-neutral-100">
                    
                    @if(session('success'))
                        <div class="bg-green-50 text-green-800 p-4 rounded-xl mb-6 flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="bg-red-50 text-red-800 p-4 rounded-xl mb-6">
                            <p>{{ session('error') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('landing.store') }}" method="POST" class="space-y-5">
                        @csrf
                        
                        <div>
                            <label for="nome" class="block text-sm font-medium text-neutral-700 mb-1">Nome completo <span class="text-red-500">*</span></label>
                            <input type="text" id="nome" name="nome" value="{{ old('nome') }}" required class="w-full px-4 py-3 rounded-xl border {{ $errors->has('nome') ? 'border-red-500 focus:ring-red-500' : 'border-neutral-300 focus:ring-primary' }} focus:border-transparent focus:ring-2 outline-none transition-all" placeholder="Seu nome">
                            @error('nome')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="email" class="block text-sm font-medium text-neutral-700 mb-1">E-mail <span class="text-red-500">*</span></label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-3 rounded-xl border {{ $errors->has('email') ? 'border-red-500 focus:ring-red-500' : 'border-neutral-300 focus:ring-primary' }} focus:border-transparent focus:ring-2 outline-none transition-all" placeholder="seu@email.com">
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="telefone" class="block text-sm font-medium text-neutral-700 mb-1">Telefone / WhatsApp</label>
                                <input type="tel" id="telefone" name="telefone" value="{{ old('telefone') }}" class="w-full px-4 py-3 rounded-xl border border-neutral-300 focus:ring-primary focus:border-transparent focus:ring-2 outline-none transition-all" placeholder="(11) 90000-0000">
                                @error('telefone')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="mensagem" class="block text-sm font-medium text-neutral-700 mb-1">Como posso te ajudar? <span class="text-red-500">*</span></label>
                            <textarea id="mensagem" name="mensagem" required minlength="10" rows="4" class="w-full px-4 py-3 rounded-xl border {{ $errors->has('mensagem') ? 'border-red-500 focus:ring-red-500' : 'border-neutral-300 focus:ring-primary' }} focus:border-transparent focus:ring-2 outline-none transition-all resize-none" placeholder="Escreva sua mensagem aqui...">{{ old('mensagem') }}</textarea>
                            @error('mensagem')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="w-full bg-primary hover:bg-primary-dark text-white font-medium py-4 px-6 rounded-xl transition-colors shadow-md flex justify-center items-center gap-2">
                            Enviar Mensagem
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 2-7 20-4-9-9-4Z"></path><path d="M22 2 11 13"></path></svg>
                        </button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>
