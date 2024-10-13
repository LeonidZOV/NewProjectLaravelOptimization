<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
    @vite(['resources\css\app.css', 'resources\js\app.js'])
</head>

<body>
    <header>
        <img src="" alt="" srcset="">
        <li>Главная</li>
        <li>Массивы</li>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        &copy; Зудихин Леонид Сергеевич
    </footer>
</body>

</html>