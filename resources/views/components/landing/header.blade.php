@props(['config'])

<header 
    x-data="{ mobileMenuOpen: false, scrolled: false }" 
    @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 'shadow-md py-3': scrolled, 'py-5': !scrolled }"
    class="fixed w-full top-0 z-50 bg-white/95 backdrop-blur-sm transition-all duration-300"
>
    <div class="container mx-auto px-4 md:px-6 flex justify-between items-center">
        <!-- Logo / Name -->
        <a href="#" class="text-2xl font-bold text-primary-dark tracking-tight">
            {{ explode(' ', $config['perfil']['nome'])[0] }}<span class="text-primary">.</span>
        </a>

        <!-- Desktop Nav -->
        <nav class="hidden md:flex items-center gap-8">
            <a href="#sobre" class="text-neutral-800 hover:text-primary transition-colors font-medium">Sobre Mim</a>
            <a href="#especialidades" class="text-neutral-800 hover:text-primary transition-colors font-medium">Especialidades</a>
            <a href="#como-funciona" class="text-neutral-800 hover:text-primary transition-colors font-medium">Como Funciona</a>
            <a href="#faq" class="text-neutral-800 hover:text-primary transition-colors font-medium">FAQ</a>
        </nav>

        <!-- CTA Button -->
        <div class="hidden md:block">
            <a href="https://wa.me/{{ $config['contato']['whatsapp_numero'] }}?text={{ urlencode($config['contato']['whatsapp_texto']) }}" target="_blank" rel="noopener noreferrer" class="bg-primary hover:bg-primary-dark text-white px-6 py-2.5 rounded-full font-medium transition-colors shadow-sm hover:shadow-md flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Agendar Consulta
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button 
            @click="mobileMenuOpen = !mobileMenuOpen" 
            class="md:hidden text-neutral-800 focus:outline-none"
            aria-label="Toggle menu"
            :aria-expanded="mobileMenuOpen.toString()"
        >
            <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            <svg x-show="mobileMenuOpen" style="display: none;" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
    </div>

    <!-- Mobile Menu Overlay -->
    <div 
        x-show="mobileMenuOpen" 
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="md:hidden absolute top-full left-0 w-full bg-white shadow-lg border-t border-neutral-100"
        style="display: none;"
    >
        <div class="px-4 py-6 flex flex-col gap-4">
            <a @click="mobileMenuOpen = false" href="#sobre" class="block text-lg text-neutral-800 font-medium">Sobre Mim</a>
            <a @click="mobileMenuOpen = false" href="#especialidades" class="block text-lg text-neutral-800 font-medium">Especialidades</a>
            <a @click="mobileMenuOpen = false" href="#como-funciona" class="block text-lg text-neutral-800 font-medium">Como Funciona</a>
            <a @click="mobileMenuOpen = false" href="#faq" class="block text-lg text-neutral-800 font-medium">FAQ</a>
            <hr class="border-neutral-200 my-2">
            <a href="https://wa.me/{{ $config['contato']['whatsapp_numero'] }}?text={{ urlencode($config['contato']['whatsapp_texto']) }}" class="bg-primary text-white text-center px-4 py-3 rounded-lg font-medium flex justify-center items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Agendar Consulta
            </a>
        </div>
    </div>
</header>
