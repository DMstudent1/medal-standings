<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>{{ $title }}</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
            <p>Медали</p>
            </a>
         </nav>
    </header>
    <main class="d-flex justify-content-center mt-5">
        {{ $slot }}
    </main>
    <script src="../js/main.js"></script>
    
</body>
</html>