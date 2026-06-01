<div x-data="{ 
        showCookieBanner: false,
        acceptCookies() {
            localStorage.setItem('cookies_accepted', 'true');
            this.showCookieBanner = false;
        },
        declineCookies() {
            localStorage.setItem('cookies_accepted', 'false');
            this.showCookieBanner = false;
        }
    }" 
    x-init="setTimeout(() => { if(!localStorage.getItem('cookies_accepted')) showCookieBanner = true; }, 1000)"
    x-show="showCookieBanner" 
    x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="opacity-0 translate-y-full"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-full"
    class="fixed bottom-0 left-0 w-full bg-white border-t border-neutral-200 shadow-[0_-4px_20px_rgba(0,0,0,0.05)] z-50 p-4 md:p-6"
    style="display: none;">
    <div class="container mx-auto max-w-6xl flex flex-col md:flex-row items-center justify-between gap-4">
        <div class="text-sm text-neutral-600 flex-grow text-center md:text-left">
            <p class="font-semibold text-neutral-800 mb-1">Aviso de Cookies e Privacidade</p>
            Utilizamos cookies para melhorar sua experiência em nosso site, personalizar conteúdo e analisar o tráfego. Ao continuar navegando, você concorda com nossa Política de Privacidade.
        </div>
        <div class="flex gap-3 shrink-0">
            <button @click="declineCookies()" class="px-5 py-2 text-sm font-medium text-neutral-600 hover:bg-neutral-100 rounded-lg transition-colors border border-transparent">
                Recusar
            </button>
            <button @click="acceptCookies()" class="px-5 py-2 text-sm font-medium bg-neutral-800 hover:bg-black text-white rounded-lg transition-colors shadow-sm">
                Aceitar Cookies
            </button>
        </div>
    </div>
</div>
