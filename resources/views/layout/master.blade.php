<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>@yield('title')</title>
</head>

<body dir="rtl">
    <section class="vh-100" style="background-color: #eee;">
        @yield('content')
    </section>
    @yield('footer_scripts')
</body>

</html>
