
<!doctype html>
<html lang="ru">
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow"><link rel="canonical" href="https://bootstrap5.ru/examples/blog" />
    <meta name="description" content="Журнал как шаблон блога с заголовком, навигацией, избранным контентом.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors, Alexey Golyagin">
    <meta name="docsearch:language" content="ru">
    <meta name="docsearch:version" content="5.0">
    <title>Бесплатный bootstrap 5 шаблон - Блог</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootstrap5.ru/css/docs.css">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://bootstrap5.ru/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="https://bootstrap5.ru/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://bootstrap5.ru/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="https://bootstrap5.ru/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://bootstrap5.ru/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="https://bootstrap5.ru/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <!-- Facebook -->
    <meta property="og:url" content="https://bootstrap5.ru/examples/blog">
    <meta property="og:title" content="Бесплатный bootstrap 5 шаблон - Блог">
    <meta property="og:description" content="Журнал как шаблон блога с заголовком, навигацией, избранным контентом.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://bootstrap5.ru/img/examples/blog.png">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1000">
    <meta property="og:image:height" content="500">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body>

<div id="app">
    @yield('content')
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){ dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-179173139-1');
</script>


</body>
</html>
