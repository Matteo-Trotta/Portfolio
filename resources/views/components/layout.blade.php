<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Hai bisogno di un sito web professionale? Creo siti web , landing page e soluzioni digitali su misura per aziende e liberi professionisti. Porta il tuo business online con un design moderno e performante!">

    <title>Portfolio Trotta Matteo</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/6d37a08b54.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
</head>

<body class="bg-indigo-900">



    <x-navbar />


    


    <div class="min-h-screen">{{ $slot }}</div>

    <x-footer />



    

</body>

</html>
