<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
        @include('template.navbar')
    <div class="container p-3 mx-auto mt-5 border rounded-md">
        @yield('content')
    </div>
</body>
</html>