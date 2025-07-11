<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EBD4QLLRQE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-EBD4QLLRQE');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- META TAG GOOGLE --}}
    <meta property="og:site_name" content="Matteo Trotta - Web Developer">
    <title>Web Developer Freelance Roma | Trotta Matteo</title>
    <meta name="description"
        content="Hai bisogno di un sito web professionale? Creo soluzioni digitali su misura per aziende e liberi professionisti.">
    {{-- META TAG GOOGLE --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://kit.fontawesome.com/6d37a08b54.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    {{-- COOKIE IUBENDA --}}
    <script type="text/javascript" src="//embeds.iubenda.com/widgets/06b020d7-268c-4851-afdc-61a5fbeab44a.js"></script>
    <script type="text/javascript" src="//embeds.iubenda.com/widgets/06b020d7-268c-4851-afdc-61a5fbeab44a.js"></script>
    {{-- COOKIE IUBENDA --}}

    {{-- FAVICON --}}
    <link rel="icon" type="image/png" sizes="16x16" href="storage/images/favicon/favicon.ico">
    {{-- FINE FAVICON --}}

{{-- FORM DI WHATSAPP --}}
<script async src="https://whatsform.com/launcher.js" id="wf-widget" data-id="oj1k4q" data-message="Message on WhatsApp" ></script>
{{-- form di whatsapp --}}

</head>

<body class="bg-indigo-900">



    <x-navbar />





    <div class="min-h-screen">{{ $slot }}</div>

    <x-footer />





</body>

</html>
