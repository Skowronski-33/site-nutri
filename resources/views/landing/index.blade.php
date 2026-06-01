<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $config['seo']['title'] ?? 'Nutricionista' }}</title>
    <meta name="description" content="{{ $config['seo']['description'] ?? '' }}">
    
    <!-- Open Graph -->
    <meta property="og:title" content="{{ $config['seo']['title'] ?? '' }}">
    <meta property="og:description" content="{{ $config['seo']['description'] ?? '' }}">
    <meta property="og:image" content="{{ asset('placeholder-og.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $config['seo']['title'] ?? '' }}">
    <meta name="twitter:description" content="{{ $config['seo']['description'] ?? '' }}">
    <meta name="twitter:image" content="{{ asset('placeholder-og.jpg') }}">

    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Preconnect Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Favicon SVG inline placeholder -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='50' fill='%23728c69'/></svg>">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Schema.org LocalBusiness + Person -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@type": ["LocalBusiness", "Person"],
      "name": "{{ $config['perfil']['nome'] }}",
      "image": "{{ asset('placeholder-og.jpg') }}",
      "jobTitle": "Nutricionista",
      "url": "{{ url()->current() }}",
      "telephone": "{{ $config['contato']['whatsapp_numero'] }}",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "{{ $config['contato']['endereco'] }}"
      }
    }
    </script>

    <!-- GTM / GA4 Placeholder -->
    <!-- 
    @if(isset($config['analytics']['gtm_id']) && $config['analytics']['gtm_id'] != 'GTM-XXXXXXX')
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','{{ $config['analytics']['gtm_id'] }}');</script>
    @endif
    -->
</head>
<body class="font-sans text-neutral-800 antialiased bg-neutral-100 flex flex-col min-h-screen">
    
    <!-- GTM noscript -->
    <!--
    @if(isset($config['analytics']['gtm_id']) && $config['analytics']['gtm_id'] != 'GTM-XXXXXXX')
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ $config['analytics']['gtm_id'] }}"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @endif
    -->

    <x-landing.header :config="$config" />

    <main class="flex-grow">
        <x-landing.hero :config="$config" />
        <x-landing.sobre :config="$config" />
        <x-landing.especialidades :config="$config" />
        <x-landing.como-funciona />
        <x-landing.depoimentos :config="$config" />
        <x-landing.faq :config="$config" />
        <x-landing.contato :config="$config" />
    </main>

    <x-landing.footer :config="$config" />
    <x-landing.whatsapp-float :config="$config" />
    <x-landing.cookie-banner />

</body>
</html>
