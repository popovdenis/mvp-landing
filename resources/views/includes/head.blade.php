<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>LaunchPage - Creative Landing Page Template</title>

    <!-- Loading Template CSS -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite([
            'resources/css/bootstrap.min.css',
            'resources/css/style.css',
            'resources/css/animate.css',
            'resources/css/pe-icon-7-stroke.css',
            'resources/css/style-magnific-popup.css',
            'resources/css/head.blade.php.css',
        ])
    @endif

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700&display=swap" rel="stylesheet">

    <!-- Font Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

</head>
